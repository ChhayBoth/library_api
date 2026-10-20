<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookTypeController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookAuthorController;

Route::apiResource('authors',AuthorController::class);

Route::apiResource('book-types',BookTypeController::class);

Route::apiResource('books',BookController::class);

Route::get('book-authors',[BookAuthorController::class,'index']);

Route::post('book-authors',[BookAuthorController::class,'store']);

Route::get('book-authors/{book}/{author}',[BookAuthorController::class,'show']);

Route::put('book-authors/{book}/{author}',[BookAuthorController::class,'update']);

Route::delete('book-authors/{book}/{author}',[BookAuthorController::class,'destroy']);
