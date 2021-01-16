@extends('layouts.backend.app',[
	'title' => 'Edit Skill',
	'pageTitle' => 'Edit Skill',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('skill.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('skill.update',$skill->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input required value="{{ $skill->name }}" class="form-control @error('name') is-invalid @enderror" type="" name="name" id="name">
                @error('name')
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