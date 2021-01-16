<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class LayoutController extends Controller
{
    public function header()
    {
    	return view('admin.layout.header');
    }

	public function about()
    {
    	return view('admin.layout.about');
    }

    public function footer()
    {
    	return view('admin.layout.footer');
    }	    
}
