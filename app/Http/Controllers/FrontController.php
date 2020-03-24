<?php

namespace App\Http\Controllers;

use App\Course;
use App\Slider;
use App\Feedbacks;
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
        $courses=Course::all();
        $feedbacks=Feedbacks::all();
        $sliderImages = Slider::get();
        return view('welcome', compact(['sliderImages','feedbacks','courses']));
    }
}

