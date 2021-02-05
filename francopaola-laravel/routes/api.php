<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User1Controller;

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

Route::get('/user1',[User1Controller::class,'index']);

Route::post('/user1',[User1Controller::class,'store']);

Route::get('/user1/{id}',[User1Controller::class,'show']);

Route::put('/user1/{id}',[User1Controller::class,'update']);

Route::delete('/user1/{id}',[User1Controller::class,'destroy']);
