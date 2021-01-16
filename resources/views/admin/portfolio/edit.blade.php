@extends('layouts.backend.app',[
	'title' => 'Edit Portfolio',
	'pageTitle' => 'Edit Portfolio',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('portfolio.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('portfolio.update',$portfolio->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input required="" value="{{ $portfolio->title }}" class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input required="" value="{{ $portfolio->description }}" class="form-control @error('description') is-invalid @enderror" name="description" id="description" type="">
                @error('description')
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