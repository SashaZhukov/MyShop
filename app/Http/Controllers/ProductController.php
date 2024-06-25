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
use App\Services\ReviewCalculatorService;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request, ProductFilterService $productFilterService)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();

        $products = $productFilterService->filter($request->input('category_id'), $request->input('color_id'), $request->input('size_id'));

        return view('products.list', compact('products', 'colors', 'sizes', 'currency', 'currencyActive', 'categories'));
    }

    public function show(Product $product, Request $request, ReviewCalculatorService $reviewCalculator)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

        $status = Product::find($product->id)->status;
        $sizesId = ProductSize::where('product_id', $product->id)->pluck('size_id');
        $sizes = Size::find($sizesId);
        $productInfo = ProductSize::where('product_id', $product->id)->where('status', true)->pluck('size_id');
        $colors = $product->colors()->get();

        $countReviewsForProduct = Review::where('product_id', $product->id)->count();
        $reviewsForProduct = Review::where('product_id', $product->id)->paginate(6);

        $arr = $reviewCalculator->caulculate($countReviewsForProduct, $product->id);
        $avgRating = $arr['avgRating'];
        $ratingPercentage = $arr['ratingsPercentage'];

        return view('products.show')
            ->with('product', $product)
            ->with('colors', $colors)
            ->with('reviewsForProduct', $reviewsForProduct)
            ->with('status', $status)
            ->with('sizes', $sizes)
            ->with('currency', $currency)
            ->with('productInfo', $productInfo)
            ->with('currencyActive', $currencyActive)
            ->with('avgRating', $avgRating)
            ->with('ratingPercentage', $ratingPercentage)
            ->with('countReviewsForProduct', $countReviewsForProduct);
    }

}
