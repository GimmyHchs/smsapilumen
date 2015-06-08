<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*$app->get('/', function() use ($app) {
    return $app->welcome();
});*/
$app->get('/','App\Http\Controllers\HomeController@index');
$app->get('/home','App\Http\Controllers\HomeController@index');
$app->get('/document','App\Http\Controllers\DocumentController@index');
$app->get('/account','App\Http\Controllers\AccountController@index');
$app->get('/api','App\Http\Controllers\ApiController@index');
$app->get('/api/every8d','App\Http\Controllers\ApiController@every8d');