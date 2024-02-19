<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $currencies = Currency::all();

        return view('currency.currency-choice', compact('currencies'));
    }

    public function store(Request $request)
    {

        $currency = Currency::find($request->get('currency'));


        $request->session()->put('currency', $request->get('currency', ));


        return redirect()->route('home');
    }
}
