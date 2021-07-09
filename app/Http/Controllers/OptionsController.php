<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionsController extends Controller
{
    public function notification()
    {
        return view('frontend.option.notification');
    }

    public function favourite()
    {
        return view('frontend.option.favourite');
    }
}
