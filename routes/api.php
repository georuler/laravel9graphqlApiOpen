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

Route::post('register', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

Route::post('adminRegister', [\App\Http\Controllers\AdminController::class, 'register']);
Route::post('/adminLogin', [\App\Http\Controllers\AdminController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:admin')->get('/usera', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user1', function (Request $request) {
    return ['zz' => 123];
});

Route::middleware('auth:sanctum')->post('/user2', function (Request $request) {
    return ['zz' => 5555555555555555555555555];
});
