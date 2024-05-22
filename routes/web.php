<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\{
    MenuController,
    OrderController,
};

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roles-user', function(){
    return view('auth.role_register');
})->name('role-user');
Route::get('/dashboard', function(){
    return view('layouts.app');
})->name('dashboard');
Route::get('/register-customer', function(){
    return view('auth.register-customer');
})->name('register-customer');
Route::get('/register-merchant', function(){
    return view('auth.register-merchant');
})->name('register-merchant');

Route::resource('menus', MenuController::class);
Route::resource('orders', OrderController::class);