<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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
        return $this->belongsToMany(Size::class, ProductSize::class, 'size_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, ProductColor::class, 'color_id', 'id');
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
