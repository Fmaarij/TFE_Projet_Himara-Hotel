<?php

namespace App\Http\Controllers;

use App\Models\Homepagephotovideo;
use App\Http\Requests\StoreHomepagephotovideoRequest;
use App\Http\Requests\UpdateHomepagephotovideoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class HomepagephotovideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepagephotovideos = Homepagephotovideo::all();
        return view ( 'homepagephotovideo.index', compact( 'homepagephotovideos' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'homepagephotovideo.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomepagephotovideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homepagephotovideos = Homepagephotovideo::all()->count();
        if ( $homepagephotovideos === 1 ) {
            return redirect()->back()->with( 'error', 'You can only add 1 photo and 1 video link, please delete or edit the existed item.' );
        } else {

            $homepagephotovideos = new Homepagephotovideo;

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
                $request->file('img')->storeAs('public/homepagephotovideo', $filenametostore);
                $request->file('img')->storeAs('public/homepagephotovideo/thumbnail', $filenametostore);

                //Resize image here
                $thumbnailpath = public_path('storage/homepagephotovideo/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(1392, 394, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $img->save();
                $homepagephotovideos->img = $filenametostore;
            }

            $homepagephotovideos->imgname = $request->imgname;
            $homepagephotovideos->videoname = $request->videoname;
            $homepagephotovideos->videolink = $request->videolink;
            $homepagephotovideos->save();

            return redirect()->back()->with( 'success', 'items added successfully.' );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homepagephotovideo  $homepagephotovideo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homepagephotovideos = Homepagephotovideo::find($id);
        return view ( 'homepagephotovideo.show', compact( 'homepagephotovideos' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homepagephotovideo  $homepagephotovideo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homepagephotovideos = Homepagephotovideo::find($id);
        return view ( 'homepagephotovideo.edit', compact( 'homepagephotovideos' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomepagephotovideoRequest  $request
     * @param  \App\Models\Homepagephotovideo  $homepagephotovideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homepagephotovideos =Homepagephotovideo::find($id);

        if($request->hasFile('img')) {
            Storage::delete('public/homepagephotovideo/thumbnail/'.$homepagephotovideos->img);
            Storage::delete('public/homepagephotovideo/'.$homepagephotovideos->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/homepagephotovideo', $filenametostore);
            $request->file('img')->storeAs('public/homepagephotovideo/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/homepagephotovideo/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1392, 394, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $homepagephotovideos->img = $filenametostore;
        }

        $homepagephotovideos->imgname = $request->imgname;
        $homepagephotovideos->videoname = $request->videoname;
        $homepagephotovideos->videolink = $request->videolink;
        $homepagephotovideos->save();

        return redirect()->back()->with( 'success', 'items updated successfully.' );
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homepagephotovideo  $homepagephotovideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homepagephotovideos =Homepagephotovideo::find($id);
        $homepagephotovideos->delete();
        return redirect('himaraPV');
    }
}
