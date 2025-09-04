<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'books';
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
    public function getIsDownloadableAttribute(): bool
    {
        if (empty($this->path)) return false;
        return Storage::disk('public')->exists($this->path);
    }
}
