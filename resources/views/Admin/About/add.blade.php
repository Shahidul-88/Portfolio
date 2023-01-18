@extends('layouts.dashboard')


@section('content')

<div class="row">
    <div class="col-lg-10 m-auto">
        
        <div class="modal fade" id="modalID" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add About Me</h3>
                <br>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="desp" class="form-control" id="" cols="10" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add About</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div> 
    </div> 

    {{-- show details --}}
    <div class="col-lg-10 m-auto">
        <div class="card mt-2">
            <div class="card-header">
                <h4 class="d-inline">Show About</h4>
                @if (session('error'))
                    <strong class="text-danger">{{session('error')}}</strong>
                @endif
                @if (session('success'))
                    <strong class="text-success">{{session('success')}}</strong>
                @endif
                <button class="btn btn-secondary btn-sm float-right" data-bs-target="#modalID" data-bs-toggle="modal">Add New</button>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($about_all as $key=> $about)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{substr($about->desp,0,60)}}</td>
                            <td><img width="100" src="{{asset('Uploads/about')}}/{{$about->photo}}" alt=""></td>
                            <td>
                                <a href="{{route('about.edit', $about->id)}}"><i class="mr-3 fa-sharp fa-solid fa-pen-to-square"></i></a>

                                <a href=""><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center mt-3" colspan="4"><h4 class="text-danger text-center">No Information Found</h4></td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection