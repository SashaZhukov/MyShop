<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Currency;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

        $cart = Session::get('cart', []);
        $totalPrice = 0;

        foreach ($cart as $productId => $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }

        return view('cart.cart', compact('currency', 'cart', 'totalPrice', 'currencyActive'));
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = Session::get('cart', []);

         if (array_key_exists($productId, $cart)) {
             $cart[$productId]['quantity'] += $request->input('quantity');
         }else {
             $product =  Product::find($productId);
             $productInfo = [
                 'name' => $product->name,
                 'price' => $product->price,
                 'img' => $product->img,
                 'color' => $request->input('color'),
                 'size' => $request->input('size'),
                 'quantity' => $request->input('quantity'),
             ];
             $cart[$productId] = $productInfo;
         }

         Session::put('cart', $cart);
         Session::save();

         return redirect()->route('cart.index');
    }

    public function remove($productId)
    {
        $cart = Session::get('cart');

        if (array_key_exists($productId, $cart) && $cart[$productId]['quantity'] > 1) {
             $cart[$productId]['quantity']--;
             Session::put('cart', $cart);
        } else {
            unset($cart[$productId]);
            Session::put('cart', $cart);
        }

        if (count($cart) === 0) {
            Session::forget('cart');
        }

        return redirect()->route('cart.index');
    }
}
