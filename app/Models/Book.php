<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year',
        'availability'
    ];

    public function borrowers()
    {
        return $this->belongsToMany(User::class, 'book_user')->withTimestamps();
    }
}