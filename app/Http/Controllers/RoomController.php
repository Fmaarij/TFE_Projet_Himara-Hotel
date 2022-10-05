<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Roomservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $rooms = Room::all();
        return view ( 'room.index', compact( 'rooms' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $rooms = Room::all();
        $roomservices = Roomservice::all();
        return view( 'room.create', compact( 'rooms', 'roomservices' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreRoomRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        // $this->validate( $request, [
        //     'img' => 'required|img|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ] );

        // if ( $request->hasFile( 'img' ) ) {
        //     $image = Room::make( $request->file( 'img' ) );

            /**
            * Main Image Upload on Folder Code
            */
            // $imageName = time().'-'.$request->file( 'img' )->getClientOriginalName();
            // $destinationPath = public_path( 'images/' );
            // $image->save( $destinationPath.$imageName );

            // /**
            // * Generate Thumbnail Image Upload on Folder Code
            // */
            // $destinationPathThumbnail = public_path( 'images/thumbnail/' );
            // $image->resize( 100, 100 );
            // $image->save( $destinationPathThumbnail.$imageName );
            $rooms = new Room;
            Storage::put( 'public/room/', $request->file( 'img' ) );
            $rooms->img = $request->file( 'img' )->hashName();
            $rooms->city = $request->city;
            $rooms->description = $request->description;
            $rooms->price = $request->price;
            $rooms->star = $request->star;
            $rooms->service_id = $request->service_id;
            $rooms->save();

            /**
            * Write Code for Image Upload Here,
            *
            * $upload = new Images();
            * $upload->file = $imageName;
            * $upload->save();
            */

            // return back()
            // ->with( 'success', 'Image Upload successful' )
            // ->with( 'imageName', $imageName );
        // }

        return redirect()->back();

        // $rooms = new Room;

        // Storage::put( 'public/img/', $request->file( 'img' ) );
        // $rooms->img = $request->file( 'img' )->hashName();
        // $rooms->city = $request->city;
        // $rooms->description = $request->description;
        // $rooms->price = $request->price;
        // $rooms->service_id = $request->service_id;
        // $rooms->save();
        // return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Room  $room
    * @return \Illuminate\Http\Response
    */

    public function show() {
        $room = Room::all();
        return view( 'room.show', compact( 'room' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Room  $room
    * @return \Illuminate\Http\Response
    */

    public function edit( Room $room ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateRoomRequest  $request
    * @param  \App\Models\Room  $room
    * @return \Illuminate\Http\Response
    */

    public function update( UpdateRoomRequest $request, Room $room ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Room  $room
    * @return \Illuminate\Http\Response
    */

    public function destroy( Room $room ) {
        //
    }
}
