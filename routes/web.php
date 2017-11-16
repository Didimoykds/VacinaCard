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

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth', 'prefix' => 'user'], function(){
    Route::get('/menu', 'Web\Site@index')->name('menu');
    Route::get('/settings', function (){
        header("Refresh:1, menu");
        return "Ainda não existe!";
    })->name('settings');
    // Route::get('/abastecimento')
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
