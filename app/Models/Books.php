<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Books;
use App\Models\Publisher;
use App\Models\Category;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Books extends Model
{
    use HasFactory;

    public function publisher() : BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'book_categories', 'book_id', 'category_id');
    }
}
