<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataReturn = [
            'title' => 'A Life'
        ];
        return view('frontend.home.index', $dataReturn);
    }
}
