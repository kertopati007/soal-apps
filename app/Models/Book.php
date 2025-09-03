<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'title',
        'description',
        'is_available',
        'file_path',
        'file_name',
    ];

    protected $casts = [
        'is_available' => 'string',
    ];
    public function url(): string
    {
        return asset('storage/' . $this->path);
    }
}
