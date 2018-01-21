<?php

use Illuminate\Http\Request;

Use App\Device;

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

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('device', 'DeviceController@index');
    Route::get('device/{device}', 'DeviceController@show');
});

// Route::get('device', 'DeviceController@index');

// Route::get('device/{id}', 'DeviceController@show');

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });