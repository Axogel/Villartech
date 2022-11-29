<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendGmailController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\PortfolioTechnologiesController;
use App\Http\Controllers\FlickerController;
use App\Http\Controllers\TeamUserController;
use App\Http\Controllers\PortfolioController;
use App\Models;

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




Route::get('/', [FrontController::class, 'welcome']);
Route::post('/sendemail', [SendGmailController::class, 'sendgmail']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	/* SETTTINGS CRUD*/ 

	Route::resource('settings', AdminSettingController::class);

	/*FLICKERS CRUD */
	Route::resource('flickers', FlickerController::class);

	/* EMPLOOYES CRUD*/ 
	Route::resource('teams', TeamUserController::class);

	/* PORTFOLIOS CRUD*/ 
	Route::resource('portfolios', PortfolioController::class);


	Route::get('/dashboard', function () {
		return view('welcome');



	});
	


});

