<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'OrderItem';
    protected $fillable = [
        'product_id',
        'color',
        'size',
        'totalPrice',
        'order_id',
        'quantity',
    ];
    use HasFactory;
}
