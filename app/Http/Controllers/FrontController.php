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
    public function index(Slider $slider)
    {
//        $data1['slider']=DB::table('slider')->orderby('id','desc')->get();
//        return view('/')->with('')


        $path = Slider::setTable('slider')->orderby('image','desc')->get();
        $url = Slider::url($path);
        return view('welcome')->with('image', $url);
    }
}

//public function update(CourseRequest $request, Course $course)
//{
//    $course->describe = $request->describe;
//
//    if($request->file('img')){
//        $dfile=$course->img;
//        $file = basename($dfile);
//        Storage::delete('public/'.$file);
//        $path=Storage::putFile('public',$request->file('img'));
//        $url=Storage::url($path);
//        $course->img = $url;
//    }
//
//    $course->update();
//    return redirect()->route('course.index');
//}
