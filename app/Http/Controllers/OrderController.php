<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function index()
    {
        $cart = Session::get('cart', []);

        $totalPrice = 0;

        foreach ($cart as $productId => $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }
        return view('cart.checkoutForm', compact('cart', 'totalPrice'));
    }

    public function orderAdd(OrderRequest $request)
    {
        $cart = Session::get('cart', []);

        $orderInfo = $request->all();
        $orderInfo['user_id'] = auth()->user()->id;
        $orderInfo['status'] = 'accepted';

        $newOrder = Order::create($orderInfo);

        foreach ($cart as $productId => $product) {
            OrderItem::create([
                'product_id' => $productId,
                'color' => $product['color'],
                'size' => $product['size'],
                'totalPrice' => $product['price'] * $product['quantity'],
                'order_id' => $newOrder->id,
                'quantity' => $product['quantity'],
            ]);
        }

        Mail::to($orderInfo['user_email'])->send(new OrderShipped());
        Session::forget('cart');

        return redirect()->route('home');
    }
}
