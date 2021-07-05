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

    public function buyTogether()
    {
        return view('frontend.cart.buytogether');
    }

    public function waitAccept()
    {
        return view('frontend.cart.wait_accept');
    }

    public function waitGetProduct()
    {
        return view('frontend.cart.wait_get_product');
    }

    public function delivery()
    {
        return view('frontend.cart.delivery');
    }

    public function delivered()
    {
        return view('frontend.cart.delivered');
    }

    public function aborted()
    {
        return view('frontend.cart.aborted');
    }

    public function paid()
    {
        return view('frontend.cart.paid_order');
    }
}
