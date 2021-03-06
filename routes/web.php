<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\ReviewsController;

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
//     Route::get('/', [ProductsController::class, 'index']);
// });

Route::get('/', [ProductsController::class, 'index']);
Route::get('/redirect-blocked', function(){
    return view('redirections.redirect--blocked');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/manage', function(){
        return view('admin.manage');
    });
    Route::get('/manage/users', [AdminController::class, 'indexUsers']);
    Route::get('/manage/products', [AdminController::class, 'indexProducts']);
    Route::get('/manage/reviews', [AdminController::class, 'indexReviews']);
    Route::put('/manage/user/{id}', [AdminController::class, 'updateUser']);
    Route::delete('/manage/product/{id}', [AdminController::class, 'destroyProduct']);
    Route::delete('/manage/review/{id}', [AdminController::class, 'destroyReview']);
});

Route::middleware(['auth', 'blocked'])->group(function(){
    Route::get('/dashboard', [UsersController::class, 'show'])->name('dashboard');
    Route::get('/product/create', [ProductsController::class, 'create']);
    Route::post('/product', [ProductsController::class, 'store']);
    Route::get('/products', [ProductsController::class, 'index']);
    Route::get('/products/{id}', [ProductsController::class, 'show']);
    Route::get('/review/create', [ReviewsController::class, 'create']);
    Route::post('/review', [ReviewsController::class, 'store']);
    Route::patch('/lend/{id}', [ProductsController::class, 'updateLend']);
    Route::patch('/return/{id}', [ProductsController::class, 'updateReturn']);
    Route::patch('/return/accept/{id}', [ProductsController::class, 'updateReturnAccept']);
    Route::get('/redirect-lend', function(){
        return view('redirections.redirect--lend');
    });
    Route::get('/redirect-return', function(){
        return view('redirections.redirect--return');
    });
    Route::get('/redirect-accept', function(){
        return view('redirections.redirect--accept');
    });
    Route::get('/redirect-create', function(){
        return view('redirections.redirect--create');
    });
});

require __DIR__.'/auth.php';
