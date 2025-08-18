<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;






Route::get('/', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
->middleware('auth')
->can('edit', 'product');

Route::patch('/products/{product}', [ProductController::class, 'update'])
->middleware('auth');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])
->middleware('auth');

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'send']);


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);



Route::middleware('guest')->group(function () {
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

});



Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');