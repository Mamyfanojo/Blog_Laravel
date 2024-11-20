<?php

namespace App\Models\admin;

use App\Models\admin\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function post() {
        return $this->hasMany(Post::class);
    }
}