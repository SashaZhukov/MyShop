<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

if (!function_exists('CheckUserOrders')){
    function CheckUserOrders() {
         $userId = Auth::user()->id;
         $res = Order::where('user_id', $userId)->count();

         if ($res !== 0){
             return true;
         }

         return false;
    }
}
