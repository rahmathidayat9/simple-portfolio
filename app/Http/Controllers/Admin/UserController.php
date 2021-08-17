<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest as Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.index',['users' => $users]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {   
        /*  Add Request ketika kondisi seperti inputan butuh dicustom seperti di hash ini ,
            semua cara dibawah benar (termasuk commented code dibawah ini).
            User::create(array_merge($request->all(),['password' => Hash::make($request->password)]));
        */
        
        $request->request->add(['password' => Hash::make($request->password)]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success','Data berhasil ditambah');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit',['user' => $user]);
    }

    public function update(User $user)
    {
        $user->update(array_merge(request()->all(),['password' => Hash::make(request()->password)]));
        return redirect()->route('user.index')->with('success','Data berhasil update');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','Data berhasil dihapus');
    }
}
