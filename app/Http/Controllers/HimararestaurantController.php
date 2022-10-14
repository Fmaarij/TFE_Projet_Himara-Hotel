<?php

namespace App\Http\Controllers;

use App\Models\Himararestaurant;
use App\Http\Requests\StoreHimararestaurantRequest;
use App\Http\Requests\UpdateHimararestaurantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HimararestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $himararestaurants=Himararestaurant::all();
        return view ('himararestaurent.index',compact('himararestaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('himararestaurent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHimararestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $himararestaurants=new Himararestaurant;
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
            $request->file('img')->storeAs('public/himararestaurent_images', $filenametostore);
            $request->file('img')->storeAs('public/himararestaurent_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/himararestaurent_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(640, 423, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $himararestaurants->img = $filenametostore;
        }

        $himararestaurants->title=$request->title;
        $himararestaurants->subtitle=$request->subtitle;
        $himararestaurants->subpara=$request->subpara;
        $himararestaurants->imgtitle=$request->imgtitle;
        $himararestaurants->price=$request->price;
        $himararestaurants->imgpara=$request->imgpara;
        $himararestaurants->save();

        return redirect()->back()->with('success', "the dish has been added successfully.");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Himararestaurant  $himararestaurant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $himararestaurants=Himararestaurant::find($id);
        return view ('himararestaurent.show',compact('himararestaurants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Himararestaurant  $himararestaurant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $himararestaurants=Himararestaurant::find($id);
        return view ('himararestaurent.edit',compact('himararestaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHimararestaurantRequest  $request
     * @param  \App\Models\Himararestaurant  $himararestaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $himararestaurants=Himararestaurant::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/himararestaurent_images/thumbnail/'.$himararestaurants->img);
            Storage::delete('public/himararestaurent_images/'.$himararestaurants->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/himararestaurent_images', $filenametostore);
            $request->file('img')->storeAs('public/himararestaurent_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/himararestaurent_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(640, 423, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $himararestaurants->img = $filenametostore;
        }

        $himararestaurants->title=$request->title;
        $himararestaurants->subtitle=$request->subtitle;
        $himararestaurants->subpara=$request->subpara;
        $himararestaurants->imgtitle=$request->imgtitle;
        $himararestaurants->price=$request->price;
        $himararestaurants->imgpara=$request->imgpara;
        $himararestaurants->save();

        return redirect()->back()->with('success', "the dish has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Himararestaurant  $himararestaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $himararestaurants = Himararestaurant::find($id);
        $himararestaurants->delete();
        return redirect('himarares');
    }
}
