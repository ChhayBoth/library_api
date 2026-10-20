<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index()
    {
        return BookAuthor::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'author_id' => 'required|exists:authors,id',
            'author_date' => 'nullable|date',
            'remark' => 'nullable|string',
        ]);

        return response()->json(
            BookAuthor::create($validated),
            201
        );
    }

    public function show(int $book, int $author)
    {
        return BookAuthor::where('book_id', $book)
            ->where('author_id', $author)
            ->firstOrFail();
    }

    public function update(
        Request $request,
        int $book,
        int $author
    ) {
        $record = BookAuthor::where('book_id', $book)
            ->where('author_id', $author)
            ->firstOrFail();

        $validated = $request->validate([
            'author_date' => 'sometimes|nullable|date',
            'remark' => 'sometimes|nullable|string',
        ]);

        $record->update($validated);

        return response()->json($record);
    }

    public function destroy(int $book, int $author)
    {
        $record = BookAuthor::where('book_id', $book)
            ->where('author_id', $author)
            ->firstOrFail();

        $record->delete();

        return response()->json([
            'message' => 'Book author deleted successfully'
        ]);
    }
}
