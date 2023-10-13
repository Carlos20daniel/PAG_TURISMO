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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tur1', function () {
    return view('tur1');
});
Route::get('/tur2', function () {
    return view('tur2');
});
Route::get('/tur3', function () {
    return view('tur3');
});
Route::get('/tur4', function () {
    return view('tur4');
});
Route::get('/tur5', function () {
    return view('tur5');
});
Route::get('/tur6', function () {
    return view('tur6');
});
