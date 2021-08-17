<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterRequest as Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::get();
        return view('admin.footer.index',['footers' => $footers]);
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(Request $request)
    {   
        Footer::create($request->all());
        return redirect()->route('footer.index')->with('success','Data berhasil ditambah');
    }

    public function edit(Footer $footer)
    {
        return view('admin.footer.edit',['footer' => $footer]);
    }

    public function update(Request $request,Footer $footer)
    {
        $footer->update($request->all());
        return redirect()->route('footer.index')->with('success','Data berhasil update');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footer.index')->with('success','Data berhasil dihapus');
    }
}
