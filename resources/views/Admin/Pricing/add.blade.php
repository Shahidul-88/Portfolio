@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">    
        <div class="modal fade card bg-secondary" id="modalID" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card">
            <div class="modal-header card-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Pricing Information</h3>
                <br>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body card-body">
                <form action="{{route('insert.pricing.free')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Pricing Image</label>
                        <input type="file" name="pricing_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Pricing Name</label>
                        <input type="text" name="pricing_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Pricing Service</label>
                        <input type="text" name="pricing_service" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Pricing Rate</label>
                        <input type="text" name="pricing_rate" class="form-control">
                    </div>
                   
                    </div>
                    <div class="modal-footer">
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Add Pricing</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>

    {{-- show free pricing --}}

     <div class="col-lg-10 m-auto">
        <div class="card mt-2">
            <div class="card-header">
                <h4 class="d-inline">Show Pricing Details - Basic</h4>
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
                        <th>Pricing Image</th>
                        <th>Pricing Name</th>
                        <th>Seriveces</th>
                        <th>Pricing Rate</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($free_prices as $key=> $free)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td><img src="{{asset('Uploads/pricing')}}/{{$free->pricing_image}}" alt=""></td>
                            <td>{{$free->pricing_name}}</td>
                            <td>{{$free->pricing_service}}</td>
                            <td>{{$free->pricing_rate}}</td>
                            <td>
                                <a href=""><i class="mr-3 fa-sharp fa-solid fa-pen-to-square"></i></a>

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