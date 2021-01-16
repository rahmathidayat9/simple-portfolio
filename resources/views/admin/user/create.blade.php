@extends('layouts.backend.app',[
	'title' => 'Create User',
	'pageTitle' => 'Create User',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('user.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="" name="name" id="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@stop