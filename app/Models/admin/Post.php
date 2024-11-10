<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'category_id',
        'image'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function imageUrl() {
        return Storage::url($this->image);
    }
}
