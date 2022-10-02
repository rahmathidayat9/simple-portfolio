<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    protected $home;

    public function index()
    {
        $Home = new Home();
        return view('home.index', [
            'getHeader' => $Home->getHeader(),
            'getAbout'     => $Home->getAbout(),
            'getFooter' => $Home->getFooter(),
            'getSkill'     => $Home->getSkill(),
            'getPortfolio'     => $Home->getPortfolio(),
        ]);
    }
}