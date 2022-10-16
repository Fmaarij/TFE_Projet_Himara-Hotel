<?php

namespace App\Http\Controllers;

use App\Models\Latestnew;
use App\Http\Requests\StoreLatestnewRequest;
use App\Http\Requests\UpdateLatestnewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class LatestnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestnews =Latestnew::all();
        return view('latestnews.index', compact('latestnews'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latestnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLatestnewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $latestnews=new Latestnew;
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
            $request->file('img')->storeAs('public/latestnews_images', $filenametostore);
            $request->file('img')->storeAs('public/latestnews_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/latestnews_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $latestnews->img = $filenametostore;
        }

        $latestnews->title=$request->title;
        $latestnews->para=$request->para;
        $latestnews->save();

        return redirect()->back()->with('success', "latest news added successfully.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Latestnew  $latestnew
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $latestnews = Latestnew::find($id);
        return view('latestnews.show', compact('latestnews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Latestnew  $latestnew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $latestnews = Latestnew::find($id);
        return view('latestnews.edit', compact('latestnews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLatestnewRequest  $request
     * @param  \App\Models\Latestnew  $latestnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $latestnews=Latestnew::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/latestnews_images/thumbnail/'.$latestnews->img);
            Storage::delete('public/latestnews_images/'.$latestnews->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/latestnews_images', $filenametostore);
            $request->file('img')->storeAs('public/latestnews_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/latestnews_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $latestnews->img = $filenametostore;
        }

        $latestnews ->title=$request->title;
        $latestnews ->para=$request->para;
        $latestnews->save();
        return redirect()->back()->with('success', "Latest news has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Latestnew  $latestnew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $latestnews =Latestnew::find($id);
        $latestnews->delete();
        return redirect('latestnews');
    }
}
