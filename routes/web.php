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

/*
Route::get('/', function () {
    return "Bienvenido Darwin";
});*/


Route::get('/', function () {
    return view('principal');
});


Route::get('/contactos', function () {
    return view('contactos');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');


