<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'title',
        'author',
        'category',
        'description',
        'published_date',
        'status',
    ];
}
