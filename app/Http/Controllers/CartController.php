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

    public function base()
    {
        return view('frontend.cart.retail.base');
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
        return view('frontend.cart.wholesale.business_cart');
    }
    public function businessCart1()
    {
        return view('frontend.cart.wholesale.business_cart_1');
    }
    public function businessCart2()
    {
        return view('frontend.cart.wholesale.business_cart_2');
    }
    public function businessCart3()
    {
        return view('frontend.cart.wholesale.business_cart_3');
    }
    public function businessCart4()
    {
        return view('frontend.cart.wholesale.business_cart_4');
    }
    public function businessCart5()
    {
        return view('frontend.cart.wholesale.business_cart_5');
    }
    public function businessCart6()
    {
        return view('frontend.cart.wholesale.business_cart_6');
    }
    public function businessCart7()
    {
        return view('frontend.cart.wholesale.business_cart_7');
    }
    public function businessCart8()
    {
        return view('frontend.cart.wholesale.business_cart_8');
    }
}
