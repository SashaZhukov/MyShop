<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewProduct query()
 * @mixin \Eloquent
 */
class ReviewProduct extends Model
{
    use HasFactory;
    protected $table = 'reviewProduct';
    protected $fillable = [
        'review_id',
        'product_id'
    ];
}
