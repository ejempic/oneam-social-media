<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReactionsController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::Resource('/profiles', ProfilesController::class);

    Route::Resource('/posts', PostsController::class);

    Route::Resource('/posts/{post}/comments', CommentsController::class);

    Route::post('/comments/{comment}/comments', [CommentsController::class, 'reply']);

    Route::Resource('/posts/{post}/reactions', ReactionsController::class);

    Route::post('/comments/{comment}/reactions', [ReactionsController::class, 'commentReaction']);


});


