<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::middleware(['auth'])->group(function(){
//     Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index']);
// });

Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/redirect-blocked', function(){
    return view('redirections.redirect--blocked');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/users/{id}/products', [\App\Http\Controllers\UsersController::class, 'allOwnedProducts']);
    Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index']);
});

Route::middleware(['auth', 'blocked'])->group(function(){
    Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index']);
    Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'show']);
    Route::get('/dashboard', [\App\Http\Controllers\UsersController::class, 'show'])->name('dashboard');
    Route::get('/review/create', [\App\Http\Controllers\ReviewsController::class, 'create']);
    Route::post('/review', [\App\Http\Controllers\ReviewsController::class, 'store']);
    Route::post('/lend', [\App\Http\Controllers\ProductsController::class, 'updateLend']);
    Route::post('/return', [\App\Http\Controllers\ProductsController::class, 'updateReturn']);
    Route::post('/return/accept', [\App\Http\Controllers\ProductsController::class, 'updateReturnAccept']);
    Route::get('/redirect-lend', function(){
        return view('redirections.redirect--lend');
    });
    Route::get('/redirect-return', function(){
        return view('redirections.redirect--return');
    });
    Route::get('/redirect-accept', function(){
        return view('redirections.redirect--accept');
    });
});

require __DIR__.'/auth.php';
