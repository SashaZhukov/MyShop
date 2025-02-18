<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewProduct extends Model
{
    use HasFactory;
    protected $table = 'reviewProduct';
    protected $fillable = [
        'review_id',
        'product_id'
    ];
}
