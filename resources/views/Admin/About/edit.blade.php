@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Edit Inforamtion</h4>
                @if(session('success'))
                <strong class="text-warning">{{session('success')}}</strong>
                @endif
            </div>
            <div class="card-body">
                 <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Photo</label>
                        <input type="file" name="photo" class="form-control">
                        <input type="hidden" name="user_id" class="form-control" value="{{$about_info->id}}">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update Photo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection