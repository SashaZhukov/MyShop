<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'type',
        'color',
        'size',
        'status'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function sizes()
    {
        return $this->hasManyThrough(Size::class, ProductSize::class, 'size_id', 'id');
    }
}
