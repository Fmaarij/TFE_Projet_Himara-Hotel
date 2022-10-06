<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Roomservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
// use Image;
// use Nette\Utils\Image;
// use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
class RoomController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        // $rooms = Room::paginate(4); //   {{-- pagination --}}
        // $room = Room::find(1);
        $rooms = Room::all();
        return view ( 'room.index', compact( 'rooms' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        // $rooms = Room::all();
        // $room = Room::find(1);
        $roomservices = Roomservice::all();
        return view( 'room.create', compact('roomservices' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreRoomRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $room=new Room;


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
            $request->file('img')->storeAs('public/room_images', $filenametostore);
            $request->file('img')->storeAs('public/room_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/room_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $room->img = $filenametostore;


        }
        $room->city = $request->city;
        $room->star= $request->star;
        $room->price = $request->price;
        $room->description = $request->description;
        // $room->service_id = $request->service_id;
          $room->service=json_encode( $request->service);
        $room->save();
        return redirect()->back()->with('success', "Image uploaded successfully.");
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

    public function update( Request $request ) {

    }//end condition

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
