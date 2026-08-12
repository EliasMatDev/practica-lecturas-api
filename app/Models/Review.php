<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use Hasfactory;

    protected $fillable = ['score', 'comment'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
