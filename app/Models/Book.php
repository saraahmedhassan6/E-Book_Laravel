<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descr',
        'author',
        'publication_date',
        'publisher',
        'language',
        'image',
        'author_image',
        'borrowed',
        'category_id',
    ];
    
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
