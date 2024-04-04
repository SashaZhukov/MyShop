<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;

class ProductFilterService
{
    public function filter($category_id = null, $color_id = null, $size_id = null)
    {
        if (!empty($category_id or $color_id or $size_id)) {
            $query = Product::query();

            if ($category_id !== null) {
                $query->where('category_id', $category_id);
            }

            if ($color_id !== null) {
                $query->whereHas('colors', function ($q) use ($color_id){
                    $q->where('color_id', $color_id);
                });
            }

            if ($size_id !== null) {
                $query->whereHas('sizes', function ($q) use ($size_id){
                    $q->where('size_id', $size_id);
                });
            }

            $products = $query->get();

        } else {
            $products = Product::all();
        }

        return $products;
    }
}
