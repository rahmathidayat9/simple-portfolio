<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use Illuminate\Http\Request;
use File;
use App\Models\Header;
use App\Http\Controllers\Admin\UploadController;

class HeaderController extends Controller
{
    public function index()
    {
        $headers = Header::get();
        return view('admin.header.index',['headers' => $headers]);
    }

    public function create()
    {
        return view('admin.header.create');
    }

    public function store(HeaderRequest $request)
    {   
        $image = UploadController::uploadSingleImage('image/header');

        $request->request->add(['image' => $image]);
        Header::create($request->all());
        return redirect()->route('header.index')->with('success','Data berhasil ditambah');
    }

    public function edit(Header $header)
    {
        return view('admin.header.edit',['header' => $header]);
    }

    public function update(Request $request,Header $header)
    {
        $header->update($request->all());
        return redirect()->route('header.index')->with('success','Data berhasil update');
    }

    public function destroy(Header $header)
    {
        File::delete(storage_path('app/public/uploads/image/header/'.$header->image));
        $header->delete();
        return redirect()->route('header.index')->with('success','Data berhasil dihapus');
    }
}
