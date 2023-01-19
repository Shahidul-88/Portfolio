@extends('layouts.dashboard')


@section('content')

<div class="row">
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
                        <th>Email</th>
                        <th>Message</th>

                    </tr>
                    @forelse ($contacts as $key=> $contact)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>     
                            <td>{{$contact->comment}}</td>
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