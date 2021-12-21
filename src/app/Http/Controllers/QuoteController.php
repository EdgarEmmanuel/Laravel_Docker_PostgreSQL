<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function indexQuote(){
        $quotes = Quote::all();
        return view("quotes.index",['quotes' => $quotes]);
    }
}
