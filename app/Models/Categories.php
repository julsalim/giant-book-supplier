<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Books;
use App\Models\Publisher;
use App\Models\Category;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    use HasFactory;

    public function books() {
        return $this->belongsToMany(Books::class, 'book_categories');
    }
}
