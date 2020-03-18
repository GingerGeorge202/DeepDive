<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sliderImages = Slider::get();
        return view('welcome', compact('sliderImages'));
    }
}

