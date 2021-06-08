<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Project Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for the project.
    | You are free to adjust these settings as needed.
    |
    */

    'userStatuses' => [
        'active',
        'inactive',
        'banned',
    ],

    'roles' => [
        'developer',
        'super-admin',
        'tenant-admin',
        'tenant-user'
    ],

    'sequence_types' => [
        'course',
        'course_onboarding',
        'user_onboarding'
    ]
];
