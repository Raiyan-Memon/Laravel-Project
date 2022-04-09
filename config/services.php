<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '277229971270-vk7m3eb64mnjqpaqiqmgki9npj55viv9.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],

    'github' => [
        'client_id' => env(key: 'GITHUB_CLIENT_ID'),
        'client_secret' => env(key: 'GITHUB_CLIENT_SECRET'),
        'redirect' => env(key: 'GITHUB_REDIRECT_URL')

    ]

];