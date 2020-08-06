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
Route::get('/about','PagesController@about')->name('user.about');
Route::get('/welcome',function(){
	return view('welcome');
});

Route::resource('/gallery','GalleryController',[
	'except' => ['update','show','edit','create']
]);

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
	Route::get('/', 'CadminController@index')->name('cadmin.dashboard');
	Route::get('/logout', 'Auth\CadminLoginController@logout')->name('cadmin.logout');
});

//Forms Data Submittion
//Route::resource('/form','FormsController');

//User and C-admin Control 
Route::resource('/user','UserController',[
    'except' => ['update']
]);
Route::resource('/cadmin','CadminController',[
	'except' => ['update','edit',]
]);

//News / Events Controller
Route::resource('/news','NewsController');

//Communty Controller
Route::resource('/community','PostsController');
Route::resource('/community/reply','ReplyController',[
	'except' => ['index','show','edit','create','destroy']
]);

//SPA Form
Route::resource('/spa','SpaController');

// About Leo & Leo Clubs
Route::get('/about_leo', 'PagesController@about_leo')->name('about_leo.index'); 
Route::get('/leo_clubs', 'PagesController@leo_clubs')->name('leo_clubs.index'); 