<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $currencyActive = Currency::find($request->session()->get('currencies'));
        $currency = Currency::all()->count();

        return view('main', compact( 'request', 'currencyActive', 'currency'));
    }
}
