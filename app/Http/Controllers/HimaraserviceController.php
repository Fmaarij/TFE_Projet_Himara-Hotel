<?php

namespace App\Http\Controllers;

use App\Models\Himaraservice;
use App\Http\Requests\StoreHimaraserviceRequest;
use App\Http\Requests\UpdateHimaraserviceRequest;
use App\Models\Roomservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class HimaraserviceController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $himaraservices = Himaraservice::all();
        // dd($himaraservices);
        return view ( 'himaraservice.index', compact( 'himaraservices' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomservices = Roomservice::all();
        return view ('himaraservice.create',compact('roomservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHimaraserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $himaraservices=new Himaraservice;
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
            $request->file('img')->storeAs('public/himara_images', $filenametostore);
            $request->file('img')->storeAs('public/himara_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/himara_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 750, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $himaraservices->img = $filenametostore;
        }

        // $himaraservices->title=$request->title;

        $himaraservices->coloredpart=$request->coloredpart;
        $himaraservices->subpara=$request->subpara;
        $himaraservices->imgtitle=$request->imgtitle;
        $himaraservices->icon_id=$request->icon_id;
        $himaraservices->titletitle=$request->titletitle;
        $himaraservices->titlepara=$request->titlepara;
        $himaraservices->save();

        return redirect()->back()->with('success', 'Himara Service added successfully.' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Himaraservice  $himaraservice
    * @return \Illuminate\Http\Response
    */

    public function show( $id) {
        $himaraservices = Himaraservice::find($id);
        return view ( 'himaraservice.show', compact( 'himaraservices' ));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Himaraservice  $himaraservice
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $roomservices = Roomservice::all();
        $himaraservices = Himaraservice::find($id);
        return view ( 'himaraservice.edit', compact( 'himaraservices','roomservices' ));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateHimaraserviceRequest  $request
    * @param  \App\Models\Himaraservice  $himaraservice
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id) {
        $himaraservices=Himaraservice::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/himara_images/thumbnail/'.$himaraservices->img);
            Storage::delete('public/himara_images/'.$himaraservices->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/himara_images', $filenametostore);
            $request->file('img')->storeAs('public/himara_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/himara_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 750, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $himaraservices->img = $filenametostore;
        }

        // $himaraservices->title=$request->title;
        $himaraservices->title = Str::of($request->title)->replaceArray('*', ['<span class="text-himara">','</span>'],$request->title);
        $himaraservices->coloredpart=$request->coloredpart;
        $himaraservices->subpara=$request->subpara;
        $himaraservices->imgtitle=$request->imgtitle;
        $himaraservices->icon_id=$request->icon_id;
        $himaraservices->titletitle=$request->titletitle;
        $himaraservices->titlepara=$request->titlepara;
        $himaraservices->save();

        return redirect()->back()->with('success', 'Himara Service has been updated successfully.' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Himaraservice  $himaraservice
    * @return \Illuminate\Http\Response
    */

    public function destroy($id) {
        $himaraservices = Himaraservice::find($id);
        $himaraservices->delete();
        return redirect('himaraservices');
    }
}
