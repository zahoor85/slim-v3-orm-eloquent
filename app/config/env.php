<?php

return [
    'settings' => [

        'debuggedEmail' => 'zahoor.personal@gmail.com',

        // Defaults 
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Define Limit, using for fetch Data by third party
        'defineLimit' => 2,

        // Application Authentication Key 
        'AuthenticatonKey' => 'c2FqamFkLm1hc29vZEBjb2RlbnRlcnByaXNlLmNvbQ==',

        // Renderer settings
        'renderer' => [
            //  'template_path' => __DIR__ . '/../templates/',
        ],

        'cors' => null !== getenv('CORS_ALLOWED_ORIGINS') ? getenv('CORS_ALLOWED_ORIGINS') : '*',

        // Database credentials Live
        // 'mysql' => [
        //     'username'      => 'root',
        //     'password'      => 'root',
        //     'database'      => 'samples_slim_orm',
        //     'host'          => 'mysql-dev'
        // ],


        'db' => [
            'driver' => 'mysql',
            'host' => 'mysql-dev',
            'database' => 'sample_db_slim_orm',
            'username' => 'root',
            'password' => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
        

    ],
];
