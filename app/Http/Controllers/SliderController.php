<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $sliders = Slider::all();

        return view ( 'slider.index', compact('sliders' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view ( 'slider.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreSliderRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $sliders=new Slider;
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
            $request->file('img')->storeAs('public/slider_images', $filenametostore);
            $request->file('img')->storeAs('public/slider_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/slider_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1920, 1280, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $sliders->img = $filenametostore;
        }

        $sliders->title1=$request->title1;
        $sliders->title2=$request->title2;
        $sliders->title3=$request->title3;
        $sliders->title4=$request->title4;
        $sliders->waar = $request->waar;
        $sliders->save();

        return redirect()->back()->with('success', "Slider added successfully.");

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */

    public function show($id ) {
        $sliders = Slider::find($id);
        return view('slider.show',compact('sliders'));
    }

    // public function oldslider($id){



    // }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $sliders = Slider::find($id);
        return view('slider.edit',compact('sliders'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateSliderRequest  $request
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id) {
        $sliders=Slider::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/slider_images/thumbnail/'.$sliders->img);
            Storage::delete('public/slider_images/'.$sliders->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/slider_images', $filenametostore);
            $request->file('img')->storeAs('public/slider_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/slider_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1920, 1280, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $sliders->img = $filenametostore;
        }
        $sliders->title1=$request->title1;
        $sliders->title2=$request->title2;
        $sliders->title3=$request->title3;
        $sliders->title4=$request->title4;
        $oldslide = $sliders->waar;
        // dd($oldslide);
        $newslide =Slider::where('waar','=',$oldslide)->get();
        //    dd($newslide);
        $sliders->waar = $request->waar;
        // $oldslid->save();
        // dd($oldslid);
        // dd($sliders);


        // $actualLogo = Photo::where('for','=','slider')->where('is_main','=',1)->get()->first();
        // $actualLogo->is_main = 0;
        // $actualLogo->save();

        // $nextLogo = $slider->photos->first();
        // $nextLogo->is_main = 1;
        // $nextLogo->save();




        // $sliderfirst=Slider::where('waar','=',$sliders->waar)->get();
        // $sliderfirst->waar=$request->waar;
        // $sliderfirst->save();
        // $slidersother->save();
        // $otherssliders =$sliders->img;
        // dd($otherssliders);
        // $sliderfirst = 'others';
        // $sliders->save();

        $sliders->save();

        return redirect()->back()->with('success', "Slider Updated successfully.");
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect('slider');
    }
}
