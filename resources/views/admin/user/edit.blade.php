@extends('layouts.backend.app',[
	'title' => 'Edit User',
	'pageTitle' => 'Edit User',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('user.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('user.update',$user->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input required value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" type="" name="name" id="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input required class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password">
                <small class="text-secondary">Password boleh kosong</small>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
@stop