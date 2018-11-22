<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'vaccine'], function() {
    Route::get('/', function(){ 
        return response(['message' => 'oi'], 200); 
    });
    Route::post('/', 'Api\VaccineController@create');
    Route::put('/{id}', 'Api\VaccineController@update');
    Route::delete('/{id}', 'Api\VaccineController@delete');
});

Route::get('/teste', function () {
    return response(['message' => "OI!"], 200);
});
