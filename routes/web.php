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

Route::get('/', function () {

    $results = DB::select('select * from stock', array(1));


//    Schema::create('stock1',function($tbl){
//        $tbl->increments('key');
//        $tbl->string('ticker',10);
//        $tbl->timestamps();
//    }
//    );
//
    return view('welcome');
});
