<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('users', [ApiController::class, 'getAllUsers']);
Route::get('products', [ApiController::class, 'getAllProducts']);
Route::get('reviews', [ApiController::class, 'getAllReviews']);
Route::get('users/{id}', [ApiController::class, 'getUser']);
Route::get('products/{id}', [ApiController::class, 'getProduct']);
Route::get('reviews/{id}', [ApiController::class, 'getReview']);

