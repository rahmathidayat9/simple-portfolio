@extends('layouts.backend.app',[
    'title' => 'Manage Footer',
    'pageTitle' => 'Manage Footer',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-footer py-3">
        <a href="{{ route('footer.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Copyright</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($footers as $footer)
                    <tr>
                        <td>{{ $footer->title }}</td>
                        <td>{{ $footer->description }}</td>
                        <td>{{ $footer->address }}</td>
                        <td>{{ $footer->phone }}</td>
                        <td>{{ $footer->email }}</td>
                        <td>{{ $footer->copyright }}</td>
                        <td>
                            <div class="row mx-auto">
                                <a href="{{ route('footer.edit',$footer->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                <form method="POST" action="{{ route('footer.destroy',$footer->id) }}">
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