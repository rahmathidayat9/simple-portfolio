@extends('layouts.backend.app',[
	'title' => 'Create Footer',
	'pageTitle' => 'Create Footer',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('footer.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('footer.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control @error('description') is-invalid @enderror" name="description" id="description" type="">
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control @error('address') is-invalid @enderror" name="address" id="address" type="">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" type="">
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="copyright">Copyright</label>
                <input class="form-control @error('copyright') is-invalid @enderror" name="copyright" id="copyright" type="">
                @error('copyright')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@stop