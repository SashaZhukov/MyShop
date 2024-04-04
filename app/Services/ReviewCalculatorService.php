<?php

namespace App\Services;

use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewCalculatorService
{
    public function caulculate($reviewsForProduct, $productId)
    {
            $reviewsRating = DB::table('reviews')
                ->where('product_id', $productId)
                ->selectRaw('rating, count(rating) as cnt')
                ->groupBy('rating')
                ->get()
                ->pluck('cnt', 'rating')
                ->toArray();

            $avgRating = round(Review::where('product_id', $productId)->average('rating'));

            $ratingsPercentage = [];

            foreach ($reviewsRating as $rating => $count)
            {
                $percentage = ($count / $reviewsForProduct) * 100;
                $ratingsPercentage[$rating] = $percentage;
            }

            $this->calculateInfo = ['ratingsPercentage' => $ratingsPercentage, 'avgRating' => $avgRating];

            return $this->calculateInfo;

    }
}
