<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//added for REACT....
Route::view('/{path?}', 'app');

//Route::get('/', function () {
//
//    $results = DB::select('select * from stocks', array(1));
//    var_dump($results);
//    return view('welcome');
//});
//
//Route::get('/temp','UsersController@index');
//Route::resource('whatever', 'UsersController');
//Route::apiResource('apitest', 'API\UsersController');
