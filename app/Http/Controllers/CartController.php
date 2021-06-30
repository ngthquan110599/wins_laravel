<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart1()
    {
        return view('frontend.cart.index');
    }
    public function cart2()
    {
        return view('frontend.cart.cart2');
    }
}
