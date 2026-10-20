<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::with(['bookType','authors'])->get();
    }

    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    public function show(Book $book)
    {
        return $book->load(['bookType','authors']);
    }

    public function update(Request $request,Book $book)
    {
        $book->update($request->all());
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
