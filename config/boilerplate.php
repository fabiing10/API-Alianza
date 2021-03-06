<?php

return [
    'profile' => [
        'validation_rules' => [
            'id' => 'required'
        ]
    ],
    'sign_up' => [
        'release_token' => env('SIGN_UP_RELEASE_TOKEN'),
        'validation_rules' => [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]
    ],
    'login' => [
        'validation_rules' => [
            'username' => 'required',
            'password' => 'required'
        ]
    ],
    'forgot_password' => [
        'validation_rules' => [
            'email' => 'required|email'
        ]
    ],
    'reset_password' => [
        'release_token' => env('PASSWORD_RESET_RELEASE_TOKEN', false),
        'validation_rules' => [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]
    ]
];
