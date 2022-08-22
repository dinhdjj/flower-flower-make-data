<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'Posts';

    public function Categories()
    {
        return $this->belongsToMany(Category::class, 'CategoryPost', 'PostID', 'CategoryID');
    }

    public function Comments()
    {
        return $this->hasMany(PostComment::class, 'PostID');
    }
}
