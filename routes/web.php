<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontController, HomeController, SendGmailController, AdminSettingController, PortfolioTechnologiesController, FlickerController, TeamUserController, PortfolioController, DeclarationController, TagController, SkillController, CategoryController, CategoryTypeController, BlogController, FaqController, ContactController, EmailController};
use RealRashid\SweetAlert\Facades\Alert;




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

Route::post('/send', 'App\Http\Controllers\EmailController@send')->name('send');
Route::post('/enviar', 'App\Http\Controllers\ContactController@sendEmail')->name('enviar');


Route::get('/', [FrontController::class, 'welcome'])->name('PageHome');
Route::post('/sendemail', [SendGmailController::class, 'sendgmail']);



 /* Blog Section */

Route::get('/blog/{slug}', [FrontController::class, 'blogArticle'])->name('blogArticle');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');

 /* END */



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/services', [FrontController::class, 'servicesView'])->name('servicesView');

Route::get('/portfolio', [FrontController::class, 'portfolioView'])->name('portfolioView');
Route::get('/aboutUs', [FrontController::class, 'aboutUs'])->name('aboutUs');
Route::get('/portfolio/{slug}', [FrontController::class, 'portfolioDetails'])->name('portfolioDetail');

Route::get('/contactUs', [FrontController::class, 'contactUs'])->name('contactUs');
Route::get('/workUs', [FrontController::class, 'workUs'])->name('workUs');

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
	 
	// SKILLS CRUD

	Route::resource('skills', SkillController::class);

	/* TAGS CRUD*/ 
	Route::resource('tags', TagController::class);

	/* CATEGORIES CRUD*/ 
	Route::resource('categories', CategoryController::class);

	/* CATEGORY TYPES CRUD*/ 
	Route::resource('category-types', CategoryTypeController::class);

	/* BLOGS CRUD*/ 
	Route::resource('blogs', BlogController::class);

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


	/* EMPLOYEES SKILL CRUD */


	Route::get('/getEmployeeSkill/{team}', 'App\Http\Controllers\TeamUserController@getEmployeeSkills')->name('employeeSkill');
	Route::get('/createEmployeeSkill/{team}', 'App\Http\Controllers\TeamUserController@createSkills')->name('teams-language.create');
	Route::post('/storeEmployeeSkill/', 'App\Http\Controllers\TeamUserController@storeSkills')->name('teams-language.store');
	Route::get('/editEmployeeSkill/{skill}/', 'App\Http\Controllers\TeamUserController@editSkills')->name('teams-language.edit');
	Route::put('/updateEmployeeSkill/{id}/', 'App\Http\Controllers\TeamUserController@updateSkills')->name('teams-language.update');
	Route::delete('/deleteEmployeeSkill/{skill}/', 'App\Http\Controllers\TeamUserController@destroySkills')->name('teams-language.destroy');

	/* FAQS CRUD*/

	Route::resource('faqs', FaqController::class);

	/* PORTFOLIOS CRUD*/ 
	Route::resource('portfolios', PortfolioController::class);
	Route::delete('/selected-portfolio', [PortfolioController::class, 'destroyMultiple'])->name('portfolio.delete');

	/* DECLARATIONS CRUD*/ 
	Route::resource('declarations', DeclarationController::class);

	/* RECIEVED EMAILS TABLE */
	Route::resource('contacts', ContactController::class);
	Route::delete('/deleteEmail/{id}/', 'App\Http\Controllers\ContactController@destroy')->name('contact.destroy');



	Route::get('/dashboard', function () {

		Alert::success('Welcome to Villartechonologies Dashboard', 'Logued in successfully');


		return view('welcome');



	});
	


});

