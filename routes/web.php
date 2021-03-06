<?php

use Illuminate\Support\Facades\Route;

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

//Pages Controller Routes
Route::get('/', 'PagesController@index')->name('main.index');  
Route::get('/index','PagesController@userindex')->name('user.index');
Route::get('/welcome',function(){
	return view('welcome');
});
Route::post('/contact','PagesController@store')->name('contact');
Route::get('/mailbox','PagesController@mail')->name('contact.show');
Route::delete('/mailbox/{$id}','AdminController@delete')->name('contact.delete');
Route::resource('/gallery','GalleryController',[
	'except' => ['update','show','edit','create']
]);
Route::get('/downloadPDF/{id}','SpaController@downloadPDF');

//Authentication Routes
Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

//Profile controller for admins and users
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');

//Admins and C-Admins Routes
Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@loginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::prefix('cadmin')->group(function(){
	Route::get('/login', 'Auth\CadminLoginController@loginForm')->name('cadmin.login');
	Route::post('/login', 'Auth\CadminLoginController@login')->name('cadmin.login.submit');
	Route::get('/', 'CadminController@index')->name('cadmin.home');
	Route::get('/logout', 'Auth\CadminLoginController@logout')->name('cadmin.logout');
});

//Forms Data Submittion
//Route::resource('/form','FormsController');

//User and C-admin Control 
Route::resource('/user','UserController',[
    'except' => ['update','edit']
]);
Route::resource('/cadmin','CadminController',[
	'except' => ['update','edit',]
]);
Route::get('/userall','AdminController@userall');

//News / Events Controller
Route::resource('/news','NewsController');

//Communty Controller
Route::resource('/community','PostsController');
Route::resource('/community/reply','ReplyController',[
	'except' => ['index','show','edit','create','destroy']
]);

//SPA Form
Route::resource('/spa','SpaController',[
	'except' => ['update','edit',]
]);

// About Leo & Leo Clubs
Route::get('/about_leo', 'PagesController@about_leo')->name('about_leo.index'); 
Route::get('/leo_clubs', 'PagesController@leo_clubs')->name('leo_clubs.index');

Route::view('/award', 'frontend/award');
Route::view('/calender', 'frontend/calender'); 

Route::get('/about', 'PagesController@about_leo')->name('about_leo.index'); 
Route::get('/clubs', 'PagesController@leo_clubs')->name('leo_clubs.index'); 
Route::get('/clubs', 'PagesController@leo_clubs')->name('leo_clubs.index');
Route::middleware('auth:admins')->group(function (){
	Route::put('/cadmin/update/points/{id}','AdminController@points');
});

Route::get('/leaderboard', 'PagesController@pointtb')->name('points.index');
Route::resource('/report','MonthreportController');

Route::resource('/treasurer','TreasurerController');

Route::get('/pledge',function ()
{
	return view('pages.pledge');
});
Route::get('/salutation',function ()
{
	return view('pages.salutation');
});