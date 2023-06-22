<?php

use Illuminate\Support\Facades\Route;

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

//Route::middleware('api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('auth/login', 'App\Http\Controllers\AuthController@login');
Route::post('auth/signup', 'App\Http\Controllers\AuthController@signup');

Route::group(["middleware" => ["apiJwt"]], function (){
    Route::get('users', 'App\Http\Controllers\UserController@index');
    Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
});


