@extends('layouts.backend.app',[
    'title' => 'Manage Portfolio',
    'pageTitle' => 'Manage Portfolio',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-footer py-3">
        <a href="{{ route('portfolio.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($portfolios as $portfolio)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/uploads/image/portfolio/'.$portfolio->image) }}" width="50" height="50">
                        </td>
                        <td>{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->description }}</td>
                        <td>
                            <div class="row mx-auto">
                                <a href="{{ route('portfolio.edit',$portfolio->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                <form method="POST" action="{{ route('portfolio.destroy',$portfolio->id) }}">
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