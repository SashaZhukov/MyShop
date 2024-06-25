<?php

namespace App\Services;


class ProductColorSizeAdd
{
    public function productColor($productId, $request, $modelColor, $stringColor)
    {
        foreach ($request as $itemId => $item) {
            $modelColor->create([
                'product_id' => $productId,
                $stringColor . '_id' => $itemId
            ]);
        }
    }

    public function productSize($productId, $request, $modelSize, $stringSize)
    {
        foreach ($request as $itemId => $item) {
            $modelSize->create([
                'product_id' => $productId,
                $stringSize . '_id' => $itemId,
                'status' => '1'
            ]);
        }
    }
}
