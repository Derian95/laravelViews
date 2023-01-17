<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 /**
     * User Module
     */
    // Route::resource('products', ProductsController::class);
    // Route::get('products/view/all', [ProductsController::class, 'indexAll']);
    // Route::get('products/view/search', [ProductsController::class, 'search']);



     /**
     * User Module
     */
    Route::get('user/view/all', [UserController::class, 'index']);
