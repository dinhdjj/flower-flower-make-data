<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Orders';

    public function Flowers()
    {
        return $this->belongsToMany(Flower::class, 'FlowerOrder', 'OrderID', 'FlowerID');
    }
}
