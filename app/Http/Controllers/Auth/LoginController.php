<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest as Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
    	$credentials = $request->only(['email','password']);

    	if (Auth::attempt($credentials)) {
  			return redirect()->intended('admin');
    	}else{
    		return redirect()->to('login')->with('error','Login Gagal !');
    	}
    }
}
