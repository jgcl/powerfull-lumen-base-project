<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => env('DB_SQLITE_DATABASE', base_path('database/database.sqlite')),
            'prefix'   => env('DB_SQLITE_PREFIX', ''),
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_MYSQL_HOST', 'mysqlsrv'),
            'port'      => env('DB_MYSQL_PORT', 3306),
            'database'  => env('DB_MYSQL_DATABASE', 'test'),
            'username'  => env('DB_MYSQL_USER', 'test'),
            'password'  => env('DB_MYSQL_PASS', 'TestPassWord1234'),
            'charset'   => env('DB_MYSQL_CHARSET', 'utf8'),
            'collation' => env('DB_MYSQL_COLLATION', 'utf8_unicode_ci'),
            'prefix'    => env('DB_MYSQL_PREFIX', ''),
            'timezone'  => env('DB_MYSQL_TIMEZONE', '-03:00'),
            'strict'    => env('DB_MYSQL_STRICT_MODE', false),
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_POSTGRES_HOST', 'postgresqlsrv'),
            'port'     => env('DB_POSTGRES_PORT', 5432),
            'database' => env('DB_POSTGRES_DATABASE', 'test'),
            'username' => env('DB_POSTGRES_USERNAME', 'postgres'),
            'password' => env('DB_POSTGRES_PASSWORD', 'TestPassWord1234'),
            'charset'  => env('DB_POSTGRES_CHARSET', 'utf8'),
            'prefix'   => env('DB_POSTGRES_PREFIX', ''),
            'schema'   => env('DB_POSTGRES_SCHEMA', 'public'),
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_SQLSRV_HOST', 'sqlserversrv'),
            'port'     => env('DB_SQLSRV_PORT', '1433'),
            'database' => env('DB_SQLSRV_DATABASE', 'master'),
            'username' => env('DB_SQLSRV_USERNAME', 'SA'),
            'password' => env('DB_SQLSRV_PASSWORD', 'TestPassWord1234'),
            'charset'  => env('DB_SQLSRV_CHARSET', 'utf8'),
            'prefix'   => env('DB_SQLSRV_PREFIX', ''),
        ],

        'oracle' => [
            'driver'         => 'oracle',
            'tns'            => env('DB_ORACLE_TNS', ''),
            'host'           => env('DB_ORACLE_HOST', 'oraclesrv'),
            'port'           => env('DB_ORACLE_PORT', '1521'),
            'database'       => env('DB_ORACLE_DATABASE', 'XE'),
            'username'       => env('DB_ORACLE_USERNAME', 'system'),
            'password'       => env('DB_ORACLE_PASSWORD', 'oracle'),
            'charset'        => env('DB_ORACLE_CHARSET', 'AL32UTF8'),
            'prefix'         => env('DB_ORACLE_PREFIX', ''),
            'prefix_schema'  => env('DB_ORACLE_SCHEMA_PREFIX', ''),
            'server_version' => env('DB_ORACLE_SERVER_VERSION', '11g'),
        ],

        'mongodb' => [
            'driver'   => 'mongodb',
            'database' => env('DB_MONGO_DATABASE', 'test'),
            'dsn' => env('DB_MONGO_DSN', 'mongodb://mongosrv:27017'),
            //'host' => env('DB_MONGO_HOST', 'mongo'),
            //'port' => env('DB_MONGO_PORT', '27017'),
            /*'options' => [
                'database' => 'admin' // sets the authentication database required by mongo 3
            ]*/
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations', // stored in default database

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => env('REDIS_CLUSTER', false),

        'default' => [
            'host'     => env('REDIS_HOST'),
            'port'     => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DATABASE', 0),
            'password' => env('REDIS_PASSWORD', null),
        ],

    ],

];
