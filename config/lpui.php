<?php
return [
    /**
     * The endpoint for each model.
     */
    'url' => [
        'users' => 'manage/users',
        'roles' => 'manage/roles',
        'permissions' => 'manage/permissions',
    ],

    /**
     * The middleware(s) to apply before attempting to access
     */
    'middlewares' => ['web', 'auth'],

    /**
     * User Model
     */
    'models' => [
        'user' => App\User::class
    ],

    /**
     * Table Name
     */
    'table_names' => [
        'users' => 'users',
    ],

];