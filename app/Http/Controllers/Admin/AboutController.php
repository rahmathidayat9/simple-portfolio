<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use File;
use App\Models\About;
use App\Http\Controllers\Admin\UploadController;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::get();
        return view('admin.about.index',['abouts' => $abouts]);
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {   
        $image = UploadController::uploadSingleImage('image/about');
        $request->request->add(['image' => $image]);
        About::create($request->all());
        return redirect()->route('about.index')->with('success','Data berhasil ditambah');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit',['about' => $about]);
    }

    public function update(Request $request,About $about)
    {
        $about->update($request->all());
        return redirect()->route('about.index')->with('success','Data berhasil update');
    }

    public function destroy(About $about)
    {
        File::delete(storage_path('app/public/uploads/image/about/'.$about->image));
        $about->delete();
        return redirect()->route('about.index')->with('success','Data berhasil dihapus');
    }
}
