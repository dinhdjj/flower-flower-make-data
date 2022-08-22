<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    protected $table = 'Flowers';

    public function Categories()
    {
        return $this->belongsToMany(Category::class, 'CategoryFlower', 'FlowerID', 'CategoryID');
    }

    public function Comments()
    {
        return $this->hasMany(FlowerComment::class, 'FlowerID');
    }
}
