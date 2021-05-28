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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['namespace' => 'Index'], function () {
    Route::get('user/logins', 'IndexController@userLogin');

    Route::get('user/me', 'IndexController@userMe')->middleware('jwt.auth');

    Route::get('logout', 'IndexController@logout')->middleware('jwt.auth');

    Route::get('user/refresh', 'IndexController@refresh')->middleware('jwt.auth');
});

