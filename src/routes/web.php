<?php

Route::get('manage/users', function () {
    return view('lpui::users');
})->middleware('web','auth');

Route::get('manage/roles', function () {
    return view('lpui::roles');
})->middleware('web','auth');

Route::get('manage/permissions', function () {
    return view('lpui::permissions');
})->middleware('web','auth');