<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
	protected $home;

	public function __construct()
	{
		$this->home = new Home;
	}

    public function index()
    {
    	return view('home.index',[
    		'getHeader' => $this->home->getHeader(),
    		'getAbout' 	=> $this->home->getAbout(),
    		'getFooter' => $this->home->getFooter(),
    		'getSkill' 	=> $this->home->getSkill(),
    		'getPortfolio' 	=> $this->home->getPortfolio(), 
    	]);
    }
}
