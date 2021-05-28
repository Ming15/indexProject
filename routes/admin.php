<?php

Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/login', 'IndexController@adminLogin');

    Route::get('admin/me', 'IndexController@adminMe')->middleware('jwt.auth');

    Route::get('user/login', 'IndexController@logout')->middleware('jwt.auth');

});
