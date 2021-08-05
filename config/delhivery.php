<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Shiprocket Credentilas
    |--------------------------------------------------------------------------
    |
    | Here you can set the default shiprocket credentilas. However, you can pass the credentials while connecting to shiprocket client
    |
    */

    'credentials' => [
        'key' => env('DELHIVERY_KEY', 'keyhere'),
    ],


    /*
    |--------------------------------------------------------------------------
    | Default output response type
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the output response you need.
    |
    | Supported: "collection" , "object", "array"
    |
    */

    'responseType' => 'collection',
];
