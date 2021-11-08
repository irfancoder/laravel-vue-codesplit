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

Route::get('/', function () {
    return view('direct/index');
});
Route::get('/lazyload', function () {
    return view('lazyload/index');
});

Route::get('/manual', function () {
    return view('manual/server/index');
});
