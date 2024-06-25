<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Currency;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Size;
use App\Services\ProductColorSizeAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.pagesForAdmin.products.products-list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        $sizes = Size::all();
        $categories = Category::all();
        return view('admin.pagesForAdmin.products.product-addForm', compact('colors', 'sizes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductAddRequest $request, ProductSize $productSize, ProductColor $productColor, ProductColorSizeAdd $productColorSizeAdd)
    {
        $file = $request->file('image')->store('Uploads/ProductImages', 'public');
        $img = basename($file);

        $product = Product::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'img' => $img,
            'description' => $request->get('description'),
            'category_id' => $request->get('category'),
            'status' => '1'
        ]);

        $stringForColor = 'color';
        $productColorSizeAdd->productColor($product->id, $request->get('color'), $productColor, $stringForColor);

        $stringForSize = 'size';
        $productColorSizeAdd->productSize($product->id, $request->get('size'), $productSize, $stringForSize);

        return redirect()->route('productsAdm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $product = Product::find($id);
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

        $status = Product::find($product->id)->status;
        $sizesId = ProductSize::where('product_id', $product->id)->pluck('size_id');
        $sizes = Size::find($sizesId);
        $colors = $product->colors()->get();

        return view('admin.pagesForAdmin.products.product-show', compact('currencyActive', 'product', 'currency', 'colors', 'sizes', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
