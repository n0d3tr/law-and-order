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
});

Route::get('/Acerca-de-nosotros', function () {
    return view('about');
});

Route::get('/Servicios', function () {
    return view('service');
});

Route::get('/Servicios/{name}', function ($name) {
    if ($name == 'Consultoria-Juridica') {
        // echo $name;
        return view('consultoriaJuridica');
    }
});