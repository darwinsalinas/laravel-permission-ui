<?php

Route::get('manage/users', function () {
    return view('lpui::users');
});

Route::get('manage/roles', function () {
    return view('lpui::roles');
});

Route::get('manage/permissions', function () {
    return view('lpui::permissions');
});