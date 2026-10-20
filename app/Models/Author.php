<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'gender',
        'dob',
        'pob',
        'address',
        'phone',
        'email',
        'photo'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class,'book_authors')
                    ->withPivot('author_date','remark');
    }
}
