<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'user_email',
        'full_name',
        'country',
        'city',
        'address',
        'postcode',
        'status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'orderItem', 'order_id', 'product_id')->withPivot('quantity');
    }
}
