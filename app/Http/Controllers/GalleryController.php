<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view ('gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('gallery.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=new Gallery;
        if($request->hasFile('img')) {
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/gallery_images', $filenametostore);
            $request->file('img')->storeAs('public/gallery_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/gallery_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $gallery->img = $filenametostore;
        }

        $gallery->galname=$request->galname;
        $gallery->category_id=$request->category_id;
        $gallery->save();

        return redirect()->back()->with('success', "Image added successfully.");

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gallery=Gallery::find($id);
        return view('gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::find($id);
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery=new Gallery;
        if($request->hasFile('img')) {
            Storage::delete('storage/gallery/thumbnail/'.$gallery->img);
            Storage::delete('public/gallery/'.$gallery->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/gallery_images', $filenametostore);
            $request->file('img')->storeAs('public/gallery_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/gallery_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $gallery->galurl = $filenametostore;
        }

        $gallery ->galname=$request->galname;
        $gallery ->category_id=$request->category_id;
        $gallery->save();
        return redirect()->back()->with('success', "Image updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('allimg');
    }
}
