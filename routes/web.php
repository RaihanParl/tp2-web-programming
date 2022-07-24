<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('home', ['title' => 'Home']);
})->name('home');



Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('register', ['App\Http\Controllers\UserController', 'register'])->name('register');

Route::post('register', ['App\Http\Controllers\UserController', 'register_action'])->name('register.action');

Route::get('login', ['App\Http\Controllers\UserController', 'login'])->name('login');

Route::post('login', ['App\Http\Controllers\UserController', 'login_action'])->name('login.action');

Route::get('password', ['App\Http\Controllers\UserController', 'password'])->name('password');

Route::post('password', ['App\Http\Controllers\UserController', 'password_action'])->name('password.action');

Route::get('logout', ['App\Http\Controllers\UserController', 'logout'])->name('logout');

Route::get('forgetpassword', ['App\Http\Controllers\UserController', 'forgetpassword'])->name('forgetpassword');

Route::post('forgetpassword', ['App\Http\Controllers\UserController', 'forgetpassword_action'])->name('forgetpassword.action');