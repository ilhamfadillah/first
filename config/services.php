<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '918903744954497',
        'client_secret' => 'e72af746c84d02570a262e932cae054b',
        'redirect' => 'https://safe-woodland-77424.herokuapp.com/callback',
    ],
    
    'paypal' => [
	'client_id' => 'AQ6txFydPE6WHuhC0KzcYpm92fwMINIWQg9uLcRiatnsyqbKgEsuMKvGwlCI3CpNCoSghHh0y54NyeAY',
	'secret' => 'ECRPybZy1UmDQ2hugUvfuKD3rM1h8MnBrtm37rtZt_uNTRoSlvE5pOGbDlGNBqXkZvaWT9WCCVQem_qG'
    ],
];
