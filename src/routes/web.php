<?php

Route::get(config('lpui.url.users'),'Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));

Route::get(config('lpui.url.roles'), 'Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));

Route::get(config('lpui.url.permissions'), 'Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));