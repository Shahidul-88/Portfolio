<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit_profile(){
        return view('Admin.Users.edit_profile');
    }

    public function edit_general(Request $request)
    {
        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return back()->with('success', 'User Info Updated Successfully');
    }
    public function edit_password(Request $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'password' => bcrypt($request->password),
            ]);
            return back()->with('pass_success', 'Password Change Successfully');
        } else {
            return back()->with('old_password', 'Old Password Doesnot Matched');
        }
    }
    public function edit_image(Request $request)
    {
        $request->validate([
            'photo' => ['required', 'mimes:png,jpg,jpeg,JPEG,JPG,PNG',],
            'photo' => 'file|max:3072'
        ]);

        $uploaded_photo =  $request->photo;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Auth::id() . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/users/' . $file_name);

        User::find(Auth::id())->update([
            'photo' => $file_name,
        ]);
        return back()->with('img_success', 'Profile Photo Updated Successfully');
    }
}
