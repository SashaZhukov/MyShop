<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Color;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\Review;
use App\Models\ReviewProduct;
use App\Models\Size;
use App\Services\ProductFilterService;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request, ProductFilterService $productCategoryFilterService)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();

        $products = $productCategoryFilterService->categoryFilter($request->input('category_id'), $request->input('color_id'), $request->input('size_id'));

        return view('products.list', compact('products', 'colors', 'sizes', 'currency', 'currencyActive', 'categories'));
    }

    public function show(Product $product, Request $request)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

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

        if (isset($result)) {
            $avgCountEvaluation = round(array_sum($result) / $allCountReviews);
            return view('products.show', compact('product', 'reviewsViews', 'reviewsEvaluation', 'avgCountEvaluation', 'allCountReviews', 'reviews', 'status', 'sizes', 'currency', 'productInfo'));
        }

        return view('products.show', compact('product', 'reviewsViews', 'reviewsEvaluation', 'allCountReviews', 'reviews', 'status', 'sizes', 'currency', 'productInfo', 'currencyActive'));

    }

}
