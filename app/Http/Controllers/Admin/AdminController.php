<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;

class AdminController extends Controller
{	
	protected $adminModel;

	public function __construct()
	{
		$this->adminModel = new Admin;
	}

    public function index()
    {
    	return view('admin.index',[
    		'users' 	=> $this->adminModel->countTableRow('users'),
    		'skills' 	=> $this->adminModel->countTableRow('skills'),
    		'portfolio' => $this->adminModel->countTableRow('portfolio'),
    		'about'	    => $this->adminModel->countTableRow('about'),
    	]);
    }
}
