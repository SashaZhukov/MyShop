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
        $currency = Currency::find($request->session()->get('currency'));

        $products = Product::all();

        return view('product.list', compact('products', 'currency'));
    }

    public function show(Product $product, Request $request)
    {
        $currency = Currency::find($request->session()->get('currency'));

        $status = Product::find($product->id)->status;

        $sizesId = ProductSize::where('product_id', $product->id)->pluck('size_id');
        $sizes = Size::find($sizesId);
        $productInfo = ProductSize::where('product_id', $product->id)->where('status', true)->pluck('size_id');

        return view('product.show', compact('product', 'status', 'sizes', 'currency', 'productInfo'));
    }

}
