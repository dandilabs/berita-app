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
    return view('home');
});
Route::get('/dunia', function () {
    return view('dunia.index');
});
Route::get('/olahraga', function () {
    return view('olahraga.index');
});
Route::get('/hiburan', function () {
    return view('hiburan.index');
});
Route::get('/bisnis', function () {
    return view('bisnis.index');
});
Route::get('/teknologi', function () {
    return view('teknologi.index');
});
Route::get('/intro', function () {
    return view('intro');
});
Route::get('/cs', function () {
    return view('cs');
});
Route::get('/terkini', function () {
    return view('terkini.index');
});
Route::get('/politik', function () {
    return view('politik.index');
});
Route::get('/wisata', function () {
    return view('wisata.index');
});
Route::get('/kriminal', function () {
    return view('kriminal.index');
});
Route::get('user/login', function () {
    return view('auth.login');
});
Route::get('user/register', function () {
    return view('auth.register');
});
