<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', [PostController::class, 'store']);
Route::get('/getpost',[PostController::class,'index']);
route::post('/post/update',[PostController::class,'update']);
route::get('/post/destroy/{id}',[PostController::class,'destroy']);
route::get('/post/{id}',[PostController::class,'show']);
