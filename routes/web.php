<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LayoutController;

//Auth Namespace
use App\Http\Controllers\Auth\LoginController;

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

Route::view('/','home.index');
Route::view('/','home.index')->name('home');

Route::namespace('Auth')->group(function(){

	Route::view('/login','auth.login')->name('login')->middleware('guest');
	Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');

	Route::post('/logout',function(){
		return redirect()->to('/login')->with(Auth::logout());
	});

});

Route::middleware(['auth'])->namespace('Admin')->group(function(){
	Route::get('/admin',[AdminController::class,'index'])->name('admin');
	Route::get('admin/layout/header',[LayoutController::class,'header'])->name('layout.header');
	Route::get('admin/layout/about',[LayoutController::class,'about'])->name('layout.about');
	Route::get('admin/layout/footer',[LayoutController::class,'footer'])->name('layout.footer');

	//Crud Resource
	Route::resource('/admin/user','UserController');
	Route::resource('/admin/about','AboutController');
	Route::resource('/admin/header','HeaderController');
	Route::resource('/admin/footer','FooterController');
	Route::resource('/admin/portfolio','PortfolioController');
	Route::resource('/admin/skill','SkillController');
});
