<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Two\GoogleProvider;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/testing', function () {
//     return view('testing');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/contacts/testing', [ContactController::class]);


Route::resource('/accounts', AccountController::class);
Route::resource('/projects', ProjectController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/users', UserController::class);


// Route::get('/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('/google/callback', [GoogleController::class, 'handdleGoogleCallBack']);

// Google

// Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Github
Route::get('/sign-in/github', [LoginController::class, 'github']);
Route::get('/sign-in/github/redirect', [LoginController::class, 'githubRedirect']);

//google
Route::get('/sign-in/google', [LoginController::class, 'google']);
Route::get('google/callback', [LoginController::class, 'googleRedirect']);


//extra route