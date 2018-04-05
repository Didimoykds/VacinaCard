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
    if(Auth::check()){
      return redirect()->route('menu');
    }
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth', 'prefix' => 'user'], function(){
    Route::get('/menu', 'Web\Site@index')->name('menu');

    Route::post('/menu', 'Web\Site@registerProcess');

    Route::delete('/menu', 'Web\SiteDelete@deleteProcess');

    Route::put('/menu', 'Web\SiteUpdate@updateProccess');

    Route::get('/settings', function (){
        header("Refresh:1, menu");
        return "Ainda não existe!";
    })->name('settings');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
