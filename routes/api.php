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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [\App\Http\Controllers\BookController::class, 'show'])->name('books.show');
Route::post('/books/create', [\App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::put('/books/{book}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
