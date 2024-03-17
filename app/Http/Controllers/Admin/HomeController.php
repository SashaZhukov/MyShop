<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $productCount = Product::all()->count();
        $userCount = User::all()->count();


        return view('admin.home.index', compact('productCount',  'userCount'));
    }
}
