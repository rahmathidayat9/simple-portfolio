@extends('layouts.backend.app',[
	'title' => 'Edit Header',
	'pageTitle' => 'Edit Header',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('header.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('header.update',$header->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input required value="{{ $header->title }}" class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="navbar_title">Navbar Title</label>
                <input required value="{{ $header->navbar_title }}" class="form-control @error('navbar_title') is-invalid @enderror" name="navbar_title" id="navbar_title" type="">
                @error('navbar_title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="up_text">Up Text</label>
                <input required value="{{ $header->up_text }}" class="form-control @error('up_text') is-invalid @enderror" name="up_text" id="up_text" type="">
                @error('up_text')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="down_text">Down Text</label>
                <input placeholder="example : Iam student,web developer,gamer" required value="{{ $header->down_text }}" class="form-control @error('down_text') is-invalid @enderror" name="down_text" id="down_text" type="">
                @error('down_text')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
@stop