<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
endforeach
        return view ('about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $abouts = About::all();
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abouts=new About;
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
            $request->file('img')->storeAs('public/about_images', $filenametostore);
            $request->file('img')->storeAs('public/about_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/about_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $abouts->img = $filenametostore;
        }

        $abouts->title=$request->title;
        $abouts->year=$request->year;
        $abouts->subpara=$request->subpara;
        $abouts->para=$request->para;
        $abouts->imgtitle=$request->imgtitle;
        $abouts->imgpara=$request->imgpara;
        $abouts->save();

        return redirect()->back()->with('success', "About info added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $abouts=About::find($id);
        return view('about.show',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts=About::find($id);
        return view('about.edit',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $abouts=About::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/about_images/thumbnail/'.$abouts->img);
            Storage::delete('public/about_images/'.$abouts->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/about_images', $filenametostore);
            $request->file('img')->storeAs('public/about_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/about_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $abouts->img = $filenametostore;
        }

        $abouts->title=$request->title;
        $abouts->subpara=$request->subpara;
        $abouts->para=$request->para;
        $abouts->imgtitle=$request->imgtitle;
        $abouts->imgpara=$request->imgpara;
        $abouts->save();
        return redirect()->back()->with('success', "about info updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::find($id);
        $abouts->delete();
        return redirect('about');
    }
}
