
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookTypeController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookAuthorController;

// Authors CRUD
Route::apiResource('authors', AuthorController::class);

// Book Types CRUD
Route::apiResource('book-types', BookTypeController::class);

// Books CRUD
Route::apiResource('books', BookController::class);

// Book Authors CRUD
Route::get('book-authors', [BookAuthorController::class, 'index']);
Route::post('book-authors', [BookAuthorController::class, 'store']);
Route::get('book-authors/{book}/{author}', [BookAuthorController::class, 'show']);
Route::put('book-authors/{book}/{author}', [BookAuthorController::class, 'update']);
Route::delete('book-authors/{book}/{author}', [BookAuthorController::class, 'destroy']);
