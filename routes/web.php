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
    $fumetti = config('comics');
    return view('home', ['fumetti'=>$fumetti]);
});
Route::get('/fumetti', function () {
    $fumetti = config('comics');
    return view('partials.fumetti', ['fumetti'=>$fumetti]);
});
Route::get('/productdetails', function () {
    return view('productdetails');
});