@extends('layouts.backend.app',[
    'title' => 'Profile',
    'pageTitle' => 'Profile',
])
@section('content')
@include('layouts.components.alert-dismissible')
    <div class="row">
        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.profile.update',Auth::user()->id) }}">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required="" type="" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input required="" type="" class="form-control" id="email" value="{{ Auth::user()->email }}" name="email">
                    </div>
                        <label for="password">Password</label>
                        <input type="hidden" class="form-control" id="old_password" value="{{ Auth::user()->password }}" name="old_password">
                        <input type="password" class="form-control" name="password" id="password">
                        <small>kosongkan password jika password tidak ingin diubah</small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
@stop