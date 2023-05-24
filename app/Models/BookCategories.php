<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategories extends Model
{
    use HasFactory;

    public function books() : HasMany
    {
        return $this->hasMany(Books::class, 'book_id');
    }

    public function categories() : HasMany
    {
        return $this->hasMany(Categories::class, 'book_categories');
    }

}
