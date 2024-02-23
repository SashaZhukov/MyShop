<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Product $product)
    {
        return view('reviews.add', compact('product'));
    }

    public function store( Request $request)
    {
        $newReview = $request->validate([
            'comment' => 'required',
            'user_name' => '',
            'evaluation' => '',
            'product_id' => '',
        ]);

        Review::create($newReview);
        return redirect()->route('product.show', $request->product_id);
    }
}
