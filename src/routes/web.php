<?php

Route::middleware(config('lpui.middlewares'))->group(function () {
    Route::get(config('lpui.url.users'),'Dsalinas\LPUI\Controllers\UsersController@index');
    Route::post(config('lpui.url.users'),'Dsalinas\LPUI\Controllers\UsersController@store');
    Route::get(config('lpui.url.users') . '/{user}','Dsalinas\LPUI\Controllers\UsersController@show');
    Route::delete(config('lpui.url.users') . '/{user}','Dsalinas\LPUI\Controllers\UsersController@destroy');
    Route::patch(config('lpui.url.users') . '/{user}','Dsalinas\LPUI\Controllers\UsersController@update');
});


Route::get(config('lpui.url.roles'), 'Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));

Route::get(config('lpui.url.permissions'), 'Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));