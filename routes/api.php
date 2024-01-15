<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/list_rating', 'App/Http/controllers/RatingController@index');
Route::post('crete_rating', 'App/Http/controllers/RatingController@Implement_Rating');
Route::delete('/{rating_id}','App/Http/controllers/RatingController@Remove_Rating');
Route::put('/{rating_id}/{rating}','App/Http/controllers/RatingController@changing_Rating');

//Login
Route::post('/login', 'App/Http/controllers/LoginCotroller@login');
