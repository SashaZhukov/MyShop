<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $currency = Currency::find($request->session()->get('currencies'));

        return view('main', compact( 'request', 'currency'));
    }
}
