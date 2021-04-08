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
Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'show']);

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/users/{id}/products', [\App\Http\Controllers\UsersController::class, 'allOwnedProducts']);
    Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index']);
    Route::get('/users/{id}', [\App\Http\Controllers\UsersController::class, 'show']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\UsersController::class, 'show'])->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Testing routes for getting users

// Route::get('/users/{id}/products', [\App\Http\Controllers\UsersController::class, 'allOwnedProducts']);

require __DIR__.'/auth.php';
