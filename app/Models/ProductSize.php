<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $size_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'size_id',
        'status'
    ];
    protected $table = 'productSizes';
}
