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
    return view('welcome');
})->name('home');
Route::get('/room-overview', function () {
    return view('room-overview');
})->name('room.overview');
Route::get('/room-details', function () {
    return view('room-details');
})->name('room-details');
Route::get('/dining-overview', function () {
    return view('dining-overview');
})->name('dining.overview');
Route::get('/dining-details', function () {
    return view('dining-details');
})->name('dining.details');
Route::get('/pages-other', function () {
    return view('pages-other');
})->name('pages.other');


