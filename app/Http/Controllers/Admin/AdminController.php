<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;

class AdminController extends Controller
{	
    public function index()
    {
    	return view('admin.index',[
    		'users' 	=> DB::table('users')->count(),
    		'skills' 	=> DB::table('skills')->count(),
    		'portfolio' => DB::table('portfolio')->count(),
    		'about'	    => DB::table('about')->count(),
    	]);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function update(Request $request, $id)
    {
        if ($request->password) {
            $password = Hash::make($request->password);
        }else{  
            $password = $request->old_password;
        }   

        DB::table('users')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  $password,
        ]);

        return redirect()->route('admin.profile')->with('success','Profil Berhasil diperbarui');
    }
}
