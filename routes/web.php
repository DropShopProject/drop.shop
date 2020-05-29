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
    return view('drop-shop');
})-> name("drop-shop");

Route::get('products', function () {
    return view('products');
})-> name("products");

Route::get('calendar', function () {
    return view('calendar');
})-> name("calendar");