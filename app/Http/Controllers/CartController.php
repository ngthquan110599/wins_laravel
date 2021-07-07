<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Giỏ hàng lẻ
    public function cart1()
    {
        return view('frontend.cart.retail.index');
    }

    public function cart2()
    {
        return view('frontend.cart.retail.cart2');
    }

    public function buyTogether()
    {
        return view('frontend.cart.retail.buytogether');
    }

    public function waitAccept()
    {
        return view('frontend.cart.retail.wait_accept');
    }

    public function waitGetProduct()
    {
        return view('frontend.cart.retail.wait_get_product');
    }

    public function delivery()
    {
        return view('frontend.cart.retail.delivery');
    }

    public function delivered()
    {
        return view('frontend.cart.retail.delivered');
    }

    public function aborted()
    {
        return view('frontend.cart.retail.aborted');
    }

    public function paid()
    {
        return view('frontend.cart.retail.paid_order');
    }

    // Giỏ hàng buôn
    public function frame()
    {
        return view('frontend.cart.wholesale.frame.frame');
    }

    public function wholesale()
    {
        return view('frontend.cart.wholesale.cart_wholesale');
    }
    public function businessCart()
    {
        return view('frontend.cart.wholesale.business_cart_1');
    }
}
