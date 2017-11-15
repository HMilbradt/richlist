<?php

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

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/how', function () {
    return view('home.how');
});

Route::get('/join', function () {
    return view('home.join');
});

Route::get('/dashboard', 'ProfileController@index')->name('dashboard');

Route::post('/payment', 'PaymentController@store')->name('payment');
