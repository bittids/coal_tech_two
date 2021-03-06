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
Route::get('/ct_form', 'CTController@index');
Route::post('/ct_form', 'CTController@post_form');
Route::post('/ct_reset', 'CTController@post_reset');
Route::get('/ct_formx', 'CTController@post_formx');
