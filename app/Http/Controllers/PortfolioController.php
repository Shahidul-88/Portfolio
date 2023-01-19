<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gold;
use App\Models\HeaderInfo;
use App\Models\Portfolio;
use App\Models\Premium;
use App\Models\PremiumPricing;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function frontend_index(){
        $header = HeaderInfo::find(1);
        $about_all = About::find(1);
        $services = Service::all();
        $portfolio = Portfolio::all();
        $free_prices = Pricing::find(1);
        $free_prices_serv = Pricing::all('pricing_service');
        $premiumss = PremiumPricing::find(1);
        $premiumss_services = PremiumPricing::all('pricing_service_premium');
        $golds = Gold::find(1);
        $gold_service = Gold::all('gold_services');
        return view('index',[
            'header' => $header,
            'about_all' => $about_all,
            'services' => $services,
            'portfolio' => $portfolio,
            'free_prices' => $free_prices,
            'free_prices_serv' => $free_prices_serv,
            'premiumss' => $premiumss,
            'premiumss_services' => $premiumss_services,
            'golds' => $golds,
            'gold_service' => $gold_service,
        ]);
    } 
    public function details(){
        $header = HeaderInfo::all();
        return view('Admin.Header.add',[
            'header' => $header,
        ]);
    }
    public function details_store(Request $request){
        if(!empty($request->name && $request->designation)){
            HeaderInfo::insert([
                'name' => $request->name,
                'designation' => $request->designation,
            ]);
            return back()->with('success', 'Name Addedd Successfully');
        }else{
            return back()->with('error', 'Feilds Cannot Be Empty');
        }
    }

    public function about(Request $request){
        $about_all = About::all();
        return view('Admin.About.add',[
            'about_all' => $about_all,
        ]);
    }

    public function about_insert(Request $request){
        $about_photo = $request->photo;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'about_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/about/' . $file_name));

        About::insert([
            'desp' => $request->desp,
            'photo'=> $file_name
        ]);
        return back()->with('success','About Added Successfully');
    }
    public function about_edit($user_id){
        $about_info = About::find($user_id);
        return view('Admin.About.edit',[
            'about_info' => $about_info,
        ]);
    }

    public function about_update(Request $request)
    {
        $about_photo = $request->photo;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'about_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/about/' . $file_name));
        
        About::find($request->user_id)->update([
            'photo' => $file_name,
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function service_show(){
        $services = Service::all();
        return view('Admin.Service.add',[
            'services' => $services,
        ]);
    }

    public function service_insert(Request $request)
    {
        $about_photo = $request->service_image;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'service_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/service/' . $file_name));

        Service::insert([
            'service_title' =>  $request->service_title,
            'service_detail' => $request->service_detail,
            'service_image' => $file_name,
        ]);
        return back()->with('success', 'Addedd Successfully');
    }

    public function portfolio_show(){
        $portfolio = Portfolio::all();
        return view('Admin.Portfolio.add',[
            'portfolio' => $portfolio,
        ]);
    }

    public function portfolio_insert(Request $request){
        $about_photo = $request->portfolio_image;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'portfolio_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/portfolio/' . $file_name));

        Portfolio::insert([
            'portfolio_title' =>  $request->portfolio_title,
            'portfolio_image' => $file_name,
        ]);
        return back()->with('success', 'Addedd Successfully');
    }

    public function pricing_show(){
        $free_prices = Pricing::all();
        return view('Admin.Pricing.add',[
            'free_prices' => $free_prices,
        ]);
    }
    public function pricing_insert(Request $request){
        $about_photo = $request->pricing_image;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'pricing_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/pricing/' . $file_name));

        Pricing::insert([
            'pricing_name' =>  $request->pricing_name,
            'pricing_service' =>  $request->pricing_service,
            'pricing_rate' =>  $request->pricing_rate,
            'pricing_image' =>  $file_name,
            
        ]);
        return back()->with('success', 'Addedd Successfully');
    }

    public function pricing_premium(){
        $premiums = PremiumPricing::all();
        return view('Admin.Pricing.premium',[
            'premiums' => $premiums,
        ]);
    }
    public function pricing_premium_insert(Request $request){
        $about_photo = $request->pricing_image_premium;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'premium_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/pricing/' . $file_name));

        PremiumPricing::insert([
            'pricing_name_premium' =>  $request->pricing_name_premium,
            'pricing_service_premium' =>  $request->pricing_service_premium,
            'pricing_rate_premium' =>  $request->pricing_rate_premium,
            'pricing_image_premium' =>  $file_name,

        ]);
        return back()->with('success', 'Addedd Successfully');
    }

    public function pricing_gold(){
        $golds = Gold::all();
        return view('Admin.Pricing.gold',[
            'golds' => $golds,
        ]);
    }

    public function pricing_gold_insert(Request $request){
        $about_photo = $request->gold_image;
        $extension = $about_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'gold_image')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($about_photo)->save(public_path('Uploads/pricing/' . $file_name));

        Gold::insert([
            'gold_name' =>  $request->gold_name,
            'gold_services' =>  $request->gold_services,
            'gold_rate' =>  $request->gold_rate,
            'gold_image' =>  $file_name,

        ]);
        return back()->with('success', 'Addedd Successfully');
    }
}
