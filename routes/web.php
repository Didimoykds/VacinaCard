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

    Route::put('/menu', 'Web\SiteUpdate@completarAgendamento');

    Route::get('/settings', function (){
        header("Refresh:1, menu");
        return "Ainda não existe!";
    })->name('settings');

    Route::group(['prefix' => 'schedule'], function () {
      
        Route::post('/', 'ScheduleController@create')->name('create-schedule');
        Route::put('/{id}', 'ScheduleController@update')->name('update-schedule');
        Route::delete('/{id}', 'ScheduleController@delete')->name('delete-schedule');
        Route::put('/{id}/complete', 'ScheduleController@completeSchedule')->name('complete-schedule');

    });

    Route::group(['prefix' => 'vaccine'], function () {

        Route::post('/', 'VaccineController@create')->name('create-vaccine');
        Route::put('/{id}', 'VaccineController@update')->name('update-vaccine');
        Route::delete('/{id}', 'VaccineController@delete')->name('delete-vaccine');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');