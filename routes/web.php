<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Home')->group(function(){
	Route::get('/',[HomeController::class,'index']);
	Route::get('/',[HomeController::class,'index'])->name('home');
});

Route::namespace('Auth')->group(function(){
	Route::view('/login','auth.login')->name('login')->middleware('guest');
	Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
	Route::post('/logout',function(){
		return redirect()->to('/login')->with(Auth::logout());
	});
});

Route::middleware(['auth'])->namespace('Admin')->group(function(){
	Route::get('/admin',[AdminController::class,'index'])->name('admin');
	Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin.profile');
	Route::patch('/admin/profile/update/{id}',[AdminController::class,'update'])->name('admin.profile.update');
    
	//Layout
	Route::get('admin/layout/header',[LayoutController::class,'header'])->name('layout.header');
	Route::post('admin/layout/setheader',[LayoutController::class,'setHeader'])->name('layout.setheader');
	Route::get('admin/layout/about',[LayoutController::class,'about'])->name('layout.about');
	Route::post('admin/layout/setabout',[LayoutController::class,'setAbout'])->name('layout.setabout');
	Route::get('admin/layout/footer',[LayoutController::class,'footer'])->name('layout.footer');
	Route::post('admin/layout/setfooter',[LayoutController::class,'setFooter'])->name('layout.setfooter');

	//Crud Resource
	Route::resource('/admin/user','UserController');
	Route::resource('/admin/about','AboutController');
	Route::resource('/admin/header','HeaderController');
	Route::resource('/admin/footer','FooterController');
	Route::resource('/admin/portfolio','PortfolioController');
	Route::resource('/admin/skill','SkillController');
});
