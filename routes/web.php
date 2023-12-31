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
    return view('/layouts/main');
});
Route::get('/registros', function () {
    return view('/layouts/registros');
});
Route::get('/login', function () {
    return view('/layouts/login');
});
Route::get('/relatorios', function () {
    return view('/layouts/relatorios');
});
