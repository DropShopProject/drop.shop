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

Route::get('products', 'ProductController@show_product_details')-> name("products");

Route::get('calendar', function () {
    return view('calendar');
})-> name("calendar");

Route::get('contact', function () {
    return view('contact');
})-> name("contact");

Route::get('travisscott', function () {
    return view('travisscott');
})-> name("travisscott");

Route::get('create-account', 'UserController@create')->name("create-account");

Route::post('create-account', 'UserController@store');


Route::get('view-account', 'UserController@show_account_page');

Route::get('send-mail', 'MailController@sendMail');

Route::get('test-view', 'FavoriteController@show_favorite_details');

