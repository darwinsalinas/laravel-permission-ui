<?php

Route::get('manage/users','Dsalinas\LPUI\Controllers\UsersController@modulo')
    ->middleware(config('lpui.middlewares'));

Route::get('manage/roles', function () {
    return view('lpui::roles');
})->middleware(config('lpui.middlewares'));

Route::get('manage/permissions', function () {
    return view('lpui::permissions');
})->middleware(config('lpui.middlewares'));