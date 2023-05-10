<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
     return view('login');
});

Route::get('login', 'App\Http\Controllers\AuthController@index');
Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin');
Route::get('register', 'App\Http\Controllers\AuthController@register');
Route::post('post-register', 'App\Http\Controllers\AuthController@postRegister');
Route::get('logout', 'App\Http\Controllers\AuthController@logout');

//Route::resource('/applicants', VisitorController::class);

Route::get('dashboard', 'App\Http\Controllers\ApplicantController@index');
Route::get('/home', 'App\Http\Controllers\ApplicantController@index')->name('home');
Route::get('/apphome', 'App\Http\Controllers\ApplicantController@apphome')->name('apphome');
Route::get('/list', 'App\Http\Controllers\ApplicantController@list');
Route::put('/edit','App\Http\Controllers\ApplicantController@update');
Route::resource('applicants', 'App\Http\Controllers\ApplicantController');
Route::get('/search', 'App\Http\Controllers\ApplicantController@search');
Route::get('/search', 'App\Http\Controllers\ApplicantController@search')->name('search');


//Route::get('/login', [LoginController::class, 'login'])->name('login');
//Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

