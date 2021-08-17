<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Http\Request;
use File;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::get();
        return view('admin.portfolio.index',['portfolios' => $portfolios]);
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(PortfolioRequest $request)
    {   
        $image = UploadController::uploadSingleImage('image/portfolio');
        
        $request->request->add(['image' => $image]);
        Portfolio::create($request->all());
        return redirect()->route('portfolio.index')->with('success','Data berhasil ditambah');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit',['portfolio' => $portfolio]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->update($request->all());
        return redirect()->route('portfolio.index')->with('success','Data berhasil update');
    }

    public function destroy(Portfolio $portfolio)
    {
        File::delete(storage_path('app/public/uploads/image/portfolio/'.$portfolio->image));
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success','Data berhasil dihapus');
    }
}
