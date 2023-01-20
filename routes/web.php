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
use App\Http\Controllers\DeclarationController;
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

	/* EMPLOYEES CRUD*/ 
	Route::resource('teams', TeamUserController::class);

	/* EMPLOYEES EDUCATION CRUD*/ 
	Route::get('/getEmployee/{team}', 'App\Http\Controllers\TeamUserController@getEmployee')->name('employee');
	Route::get('/createEmployeeEducation/{team}', 'App\Http\Controllers\TeamUserController@createEducation')->name('teams-skills.create');
	Route::post('/storeEmployeeEducation/', 'App\Http\Controllers\TeamUserController@storeEducation')->name('teams-skills.store');
	Route::get('/editEmployeeEducation/{education}/', 'App\Http\Controllers\TeamUserController@editEducation')->name('teams-skills.edit');
	Route::put('/updateEmployeeEducation/{id}/', 'App\Http\Controllers\TeamUserController@updateEducation')->name('teams-skills.update');
	Route::delete('/deleteEmployeeEducation/{education}/', 'App\Http\Controllers\TeamUserController@destroyEducation')->name('teams-skills.destroy');

    /* EMPLOYEES EXPERIENCE CRUD */

	Route::get('/getEmployeeExperience/{team}', 'App\Http\Controllers\TeamUserController@getEmployeeExperience')->name('employeeExperience');
	Route::get('/createEmployeeExperience/{team}', 'App\Http\Controllers\TeamUserController@createExperience')->name('teams-experience.create');
	Route::post('/storeEmployeeExperience/', 'App\Http\Controllers\TeamUserController@storeExperience')->name('teams-experience.store');
	Route::get('/editEmployeeExperience/{experience}/', 'App\Http\Controllers\TeamUserController@editExperience')->name('teams-experience.edit');
	Route::put('/updateEmployeeExperience/{id}/', 'App\Http\Controllers\TeamUserController@updateExperience')->name('teams-experience.update');
	Route::delete('/deleteEmployeeExperience/{education}/', 'App\Http\Controllers\TeamUserController@destroyExperience')->name('teams-experience.destroy');





	/* PORTFOLIOS CRUD*/ 
	Route::resource('portfolios', PortfolioController::class);

		/* PORTFOLIOS CRUD*/ 
		Route::resource('declarations', DeclarationController::class);


	Route::get('/dashboard', function () {
		return view('welcome');



	});
	
	Route::get('/testModal', function () {
		return view('teams.modal-employees.show');



	});

});

