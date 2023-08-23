<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Published_User extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'book_id',
        'returned',
        'check'
    ];

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }
}


