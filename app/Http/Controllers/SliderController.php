<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Slider::get();
        return view('gallery.slider', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Upload image function
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $input['title'] = $request->title;
//
//        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
//        $request->image->move(public_path('storage'), $input['image']);
//
//        $pathImage = Storage::putFile('public', $request->file('storage'));
//        $url = Storage::url($pathImage);
//        $input['pathImage'] = $url;
//
//        Slider::create($input);


        $files = $request->file('storage');

        if(!empty($files)) :
            foreach($files as $file) :

                $input['title'] = $request->title;

                $input['image'] = time().$file->getClientOriginalName();
                $request->image->move(public_path('slider_img'), $input['image']);

                $pathImage = Storage::putfile('public/slider_img', $file);
                $url = Storage::url($pathImage);
                $input['pathImage'] = $url;

                Slider::create($input);

            endforeach;
        endif;


//        $newImage = new Slider();
//
//        $newImage->title = $request->title;
//        $pathImage = Storage::putFile('public', $request->file('storage'));
//        $url = Storage::url($pathImage);
//        $newImage->pathImage = $url;
//        $newImage->image = time().'.'.$request->image->getClientOriginalExtension();
//        $request->image->move(public_path('storage'), $newImage->image);
//        $newImage->save();

        return back()
            -> with('success', 'Image Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Slider::find($id)->delete();
        Storage::delete("public/{$request->pathImage}");

        return back()
            ->with('success', 'Image removed successfully');
    }
}
