<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

    public function store(GalleryRequest $request)
    {

        $file = new ImageGallery();

        $file->title = $request->title;
        $path = Storage::putFile('public',$request->file('image'));
        $url=Storage::url($path);
        $file->pathImage = $url;

        $file->save();

        return back()
            -> with('success', 'Image Uploaded successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImageGallery  $images
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $images=ImageGallery::find($id);
        $images->delete();

        $dfile=$images->pathImage;
        $file = basename($dfile);
        Storage::delete('public/'.$file);

        return back()
            ->with('success', 'Image removed successfully');
    }

}
