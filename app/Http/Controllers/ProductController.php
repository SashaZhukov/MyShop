<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Review;
use App\Models\ReviewProduct;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $currency = Currency::find($request->session()->get('currencies'));

        $products = Product::all();

        return view('products.list', compact('products', 'currency'));
    }

    public function show(Product $product, Request $request)
    {
        $currency = Currency::find($request->session()->get('currencies'));

        $status = Product::find($product->id)->status;
        $sizesId = ProductSize::where('product_id', $product->id)->pluck('size_id');
        $sizes = Size::find($sizesId);
        $productInfo = ProductSize::where('product_id', $product->id)->where('status', true)->pluck('size_id');

        $reviews = Review::where('product_id', $product->id)->get();
        $reviewsViews = Review::where('product_id', $product->id)->paginate(4);

        $reviewsEvaluation = DB::table('reviews')
            ->selectRaw('evaluation, count(evaluation) as cnt')
            ->groupBy('evaluation')
            ->get()
            ->pluck('cnt', 'evaluation')
            ->toArray();

        $allCountReviews = count($reviews);

        foreach ($reviewsEvaluation as $k=>$v)
        {
            $result[] = $k * $v;
        }

        $avgCountEvaluation = array_sum($result) / $allCountReviews;

        return view('products.show', compact('product', 'reviewsViews', 'reviewsEvaluation', 'avgCountEvaluation', 'allCountReviews', 'reviews', 'status', 'sizes', 'currency', 'productInfo'));
    }

}
