<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/health', 'PhpDebugController@health');

$router->get('/select', 'DatabaseController@select');
$router->post('/insert', 'DatabaseController@insert');
$router->put('/update', 'DatabaseController@update');
$router->delete('/delete', 'DatabaseController@delete');
