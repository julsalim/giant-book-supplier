<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Books;
use App\Models\Publisher;
use App\Models\Category;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publisher';

    public function books() {
        return $this->hasMany(Books::class);
    }

}
