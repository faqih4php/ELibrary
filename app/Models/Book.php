<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    //
    protected $fillable = [
        'title',
        'author',
        'categories_id',
    ];

    public function category() : BelongsTo{
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
