<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LayoutController extends Controller
{
    public function header()
    {
        $headers = DB::table('headers')->paginate(2);
    	return view('admin.layout.header',['headers' => $headers]);
    }

    public function setHeader(Request $request)
    {
        if ($request->status==NULL) {
            DB::table('headers')->where('is_active',1)->update(['is_active' => NULL]);
            DB::table('headers')->where('id',$request->id)->update(['is_active' => 1]);
            $request->session()->flash('success','Header diaktifkan');
        }else{
            DB::table('headers')->where('id',$request->id)->update(['is_active' => NULL]);
            $request->session()->flash('error','Header dinonaktifkan');
        }
    }

	public function about()
    {
        $abouts = DB::table('about')->paginate(2);
    	return view('admin.layout.about',['abouts' => $abouts]);
    }

    public function setAbout(Request $request)
    {
        if ($request->status==NULL) {
            DB::table('about')->where('is_active',1)->update(['is_active' => NULL]);
            DB::table('about')->where('id',$request->id)->update(['is_active' => 1]);
            $request->session()->flash('success','About diaktifkan');
        }else{
            DB::table('about')->where('id',$request->id)->update(['is_active' => NULL]);
            $request->session()->flash('error','About dinonaktifkan');
        }
    }

    public function footer()
    {
        $footers = DB::table('footers')->paginate(2);
    	return view('admin.layout.footer',['footers' => $footers]);
    }

    public function setFooter(Request $request)
    {
        if ($request->status==NULL) {
            DB::table('footers')->where('is_active',1)->update(['is_active' => NULL]);
            DB::table('footers')->where('id',$request->id)->update(['is_active' => 1]);
            $request->session()->flash('success','Footer diaktifkan');
        }else{
            DB::table('footers')->where('id',$request->id)->update(['is_active' => NULL]);
            $request->session()->flash('error','Footer dinonaktifkan');
        }
    }	    
}
