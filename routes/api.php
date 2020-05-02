<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/name', [ 'uses' => 'ApiTestController@postTest', 'middleware' => 'auth.jwt']);
Route::get('/names', [ 'uses' => 'ApiTestController@getTest']);
Route::put('/name/{id}',[ 'uses' => 'ApiTestController@putTest', 'middleware' => 'auth.jwt']);
Route::delete('/name/{id}', [
    'uses' => 'ApiTestController@deleteTest',
    'middleware' => 'auth.jwt'
]);

Route::post('/user/singup', [
    'uses' => 'UserController@singUp'
]);
Route::post('/user/singin', [
    'uses' => 'UserController@singIn'
]);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
