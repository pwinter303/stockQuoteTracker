<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('userPLW', function() {
    return \App\User::all();
});

Route::get('userPLW/{id}', function($id) {
    return \App\User::find($id);
});

Route::get('stockForUser/{id}', function($id) {
    return \App\User::find($id);
});

Route::put('User1/{id}', function (Request $request) {
    echo "reqeuest is $request";
});

// Working example of passing multiple parameters into PUT
// Call using this URL in postman: http://127.0.0.1:8000/api/User/1/2
//Route::put('User/{id}/{ss}', 'API\UsersController@update');
//Route::apiResource('OfficialAPI', 'API\UsersController');


Route::apiResource('users', 'API\UsersController');

//http://127.0.0.1:8000/api/stocks  returns ALL the stocks...
Route::apiResource('stocks', 'API\StocksController');

//Cant use the generic apiResource since we have to pass in multiple parameters
//Route::apiResource('userstocks', 'API\UserStocksController');

//NOTE: api is added
//http://127.0.0.1:8000/api/user/0f4a78c4-e172-4d56-8627-83b66da01411/userstocks/
Route::get('user/{user_id}/userstocks/', 'API\UserStocksController@index');
Route::get('user/{user_id}/userstocks/{id}', 'API\UserStocksController@show');
Route::delete('user/{user_id}/userstocks/{id}', 'API\UserStocksController@delete');

