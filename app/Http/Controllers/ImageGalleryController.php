<?php

namespace App\Http\Controllers;

use App\ImageGallery;
use Illuminate\Http\Request;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $images = ImageGallery::get();
        return view('gallery.gallery', compact('images'));
    }

    /**
     * Upload image function
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input['title'] = $request->title;

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('storage'), $input['image']);

//        $pathImage = Storage::putFile('public', $request->file('storage'));
//        $url = Storage::url($pathImage);
//        $input['pathImage'] = $url;

        ImageGallery::create($input);

        return back()
            -> with('success', 'Image Uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        ImageGallery::find($id)->delete();

        return back()
            ->with('success', 'Image removed successfully');
    }

}
