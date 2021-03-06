<?php

use Illuminate\Http\Request;
use Laravel\Passport\Passport;


/*
-------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'cors'], function() {
	
	// 	
	Route::post('user/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
	Route::get('/user', function (Request $request) {
		return $request->user();
	}
	)->middleware('auth:api');
	
}
);

