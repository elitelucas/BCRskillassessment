<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class MainController extends Controller
{
    public function input()
    {
        $drinks = Drink::get();
        return view('input', ['drinks' => $drinks]);
    }
    public function check(Request $request)
    {
        $drinkinfo = Drink::find($request->drink);
        $consumption = $request->consumption;
        $total = $drinkinfo->amount * $consumption;
        $rest = floor((500 - $total) / $drinkinfo->amount);
        return view('check', ['rest' => $rest, 'drinkinfo' => $drinkinfo]);
    }
}
