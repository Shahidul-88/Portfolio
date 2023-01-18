@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome To Dashboard <strong>{{Auth::user()->name}}</strong></h4>
                </div>
                <div class="card-body">
                    @if(Auth::user()->photo == null)
                    <img style="width:40px;margin-left:-60px" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                    @else
                    <img style="width: 100px; height:100px; margin-bottom:15px" src="{{asset('Uploads/users/')}}/{{Auth::user()->photo}}" alt="..." class="avatar-img">
                    @endif
                    <p>This is your Admin Dashboard</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
