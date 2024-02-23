<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'comment',
        'user_name',
        'evaluation',
        'product_id'
    ];
    use HasFactory;

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
