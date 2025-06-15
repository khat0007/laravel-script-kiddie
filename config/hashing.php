<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt', // You can change to 'argon' or 'argon2id' for stronger hashing

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Password Hashing Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of rounds used by the bcrypt algorithm
    | when hashing passwords. The higher the number, the more secure—but also
    | the slower the hashing process.
    |
    */

    'bcrypt' => [
        'rounds' => 10, // 10 is a good balance between security and performance
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Password Hashing Options
    |--------------------------------------------------------------------------
    |
    | These options configure the Argon hashing algorithm, which provides
    | strong resistance against GPU brute-force attacks and is a good
    | alternative to bcrypt. Laravel supports "argon" and "argon id".
    |
    */

    'argon' => [
        'memory' => 1024,  // Memory in kilobytes
        'threads' => 2,    // Parallelism (threads)
        'time' => 2,       // Number of hashing iterations
    ],

];
