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

Route::get('/', function () {

    return view('welcome');
});
//取回密码第一步
Route::get("/retrieve",'RetrieveController@index');
Route::post("/first",'RetrieveController@first');//第一步
Route::any('/second','RetrieveController@second');//第二步
Route::post('/third','RetrieveController@third');//第三步
Route::get('/four','RetrieveController@four');//第四步findPassword
Route::post('/findPassword','RetrieveController@findPassword');//第四步