<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookType;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    public function index(){ return BookType::all(); }

    public function store(Request $request)
    {
        return BookType::create($request->all());
    }

    public function show(BookType $bookType)
    {
        return $bookType;
    }

    public function update(Request $request,BookType $bookType)
    {
        $bookType->update($request->all());
        return $bookType;
    }

    public function destroy(BookType $bookType)
    {
        $bookType->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
