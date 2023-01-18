@extends('layouts.dashboard')


@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">    
        <div class="modal fade card bg-secondary" id="modalID" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card">
            <div class="modal-header card-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Header Information</h3>
                <br>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body card-body">
                <form action="{{route('insert.details')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add name</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>

    {{-- show --}}

     <div class="col-lg-10 m-auto">
        <div class="card mt-2">
            <div class="card-header">
                <h4 class="d-inline">Show Name and Designation</h4>
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
                    @forelse ($header as $key=> $head)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$head->name}}</td>
                            <td>{{$head->designation}}</td>
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