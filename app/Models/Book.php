<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_title',
        'book_type_id',
        'publish_date',
        'num_of_pages',
        'num_of_copies',
        'edition',
        'publisher',
        'book_source',
        'remark',
    ];
}
