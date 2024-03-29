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

// for landing login page
Route::get('/', function () {
    return view('index');
});

// for register routing
Route::get('/register',function(){
    return view('site.register');
});

// for dashboard route
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

