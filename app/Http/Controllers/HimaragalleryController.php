<?php

namespace App\Http\Controllers;

use App\Models\Himaragallery;
use App\Http\Requests\StoreHimaragalleryRequest;
use App\Http\Requests\UpdateHimaragalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HimaragalleryController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $himaragallery = Himaragallery::all();
        return view ( 'himaragallery.index', compact( 'himaragallery' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view ( 'himaragallery.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreHimaragalleryRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $himaragallery = Himaragallery::all()->count();
        if ( $himaragallery === 1 ) {
            return redirect()->back()->with( 'error', 'You can only add 1 himara gallery title, please delete or edit the existed item.' );
        } else {

            $himaragallery = new Himaragallery;

            $himaragallery->title = $request->title;
            $himaragallery->coloredpart = $request->coloredpart;
            $himaragallery->subpara = $request->subpara;
            $himaragallery->direct = $request->direct;
            $himaragallery->save();

            return redirect()->back()->with( 'success', 'Himara gallery title added successfully.' );
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Himaragallery  $himaragallery
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $himaragallery = Himaragallery::find( $id );
        return view( 'himaragallery.show', compact( 'himaragallery' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Himaragallery  $himaragallery
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $himaragallery = Himaragallery::find( $id );
        return view( 'himaragallery.edit', compact( 'himaragallery' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateHimaragalleryRequest  $request
    * @param  \App\Models\Himaragallery  $himaragallery
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $himaragallery = Himaragallery::find( $id );
        $himaragallery->title = Str::of($request->title)->replaceArray('*', ['<span class="text-himara">','</span>'],$request->title);
        // $himaragallery->title = $request->title;
        $himaragallery->coloredpart = $request->coloredpart;
        $himaragallery->subpara = $request->subpara;
        $himaragallery->direct = $request->direct;
        $himaragallery->save();

        return redirect()->back()->with( 'success', 'Himara gallery title updated successfully.' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Himaragallery  $himaragallery
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $himaragallery = Himaragallery::find( $id );
        $himaragallery->delete();
        return redirect( 'himaragallery' );
    }
}
