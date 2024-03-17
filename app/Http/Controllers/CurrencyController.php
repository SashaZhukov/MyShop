<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();

        return view('currencies/currency-choice', compact('currencies'));
    }

    public function store(Request $request)
    {
        $request->session()->put('currencies', $request->get('currency'));

        return redirect()->route('home');
    }
}
