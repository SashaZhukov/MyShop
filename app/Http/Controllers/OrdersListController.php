<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersListController extends Controller
{
    public function index(Request $request){
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

        $orders = Order::where('user_id', auth()->user()->id)->where('status', '!=', 'received')->get();

        return view('orders.orders', compact('currency', 'currencyActive', 'orders'));
    }

}
