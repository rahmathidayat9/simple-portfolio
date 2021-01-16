@extends('layouts.backend.app',[
    'title' => 'Manage About',
    'pageTitle' => 'Manage About',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-footer py-3">
        <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Role</th>    
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($abouts as $about)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/uploads/image/about/'.$about->image) }}" width="50" height="50">
                        </td>
                        <td>{{ $about->title }}</td>
                        <td>{{ Str::limit($about->description,50) }}</td>
                        <td>{{ $about->name }}</td>
                        <td>{{ $about->phone }}</td>
                        <td>{{ $about->email }}</td>
                        <td>{{ $about->role }}</td>
                        <td>
                            <div class="row mx-auto">
                                <a href="{{ route('about.edit',$about->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                <form method="POST" action="{{ route('about.destroy',$about->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop