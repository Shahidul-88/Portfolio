@extends('layouts.dashboard')


@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">    
        <div class="modal fade" id="modalID" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Pricing Information</h3>
                <br>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body card-body">
                <form action="{{route('testimonial.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Client Image</label>
                        <input type="file" name="photo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Client Review</label>
                        <textarea name="desp" class="form-control" id="" cols="10" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Client Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                   
                    </div>
                    <div class="modal-footer">
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Add Testimonial</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>

    <div class="col-lg-10 m-auto">
        <div class="card mt-2">
            <div class="card-header">
                <h4 class="d-inline">Show Clients Review</h4>
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
                        <th>Image</th>
                        <th>Review</th>

                    </tr>
                    @forelse ($testimonials as $key=> $test)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$test->name}}</td>
                             <td><img width="50" src="{{asset('Uploads/testimonial')}}/{{$test->photo}}" alt=""></td>
                            <td>{{$test->desp}}</td>
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