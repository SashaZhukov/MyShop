<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $currencies = Currency::all();

        return view('currencies.currencies-choice', compact('currencies'));
    }

    public function store(Request $request)
    {

        $currency = Currency::find($request->get('currencies'));


        $request->session()->put('currencies', $request->get('currencies', ));


        return redirect()->route('home');
    }
}
