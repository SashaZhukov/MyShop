<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewsRequest;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Product $product)
    {
        return view('reviews.add', compact('product'));
    }

    public function store(ReviewsRequest $request, $productId)
    {
         $newReview = [
             'comment' => $request->input('comment'),
             'user_name' => $request->input('user_name'),
             'rating' => $request->input('rating'),
             'product_id' => $productId,
         ];

        Review::create($newReview);
        return redirect()->route('product.show', $request->product_id);
    }
}
