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
        $room = Room::find(1);
        return view ( 'room.index', compact( 'room' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        // $rooms = Room::all();
        $room = Room::find(1);
        $roomservices = Roomservice::all();
        return view( 'room.create', compact( 'room', 'roomservices' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreRoomRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $room_id = $request->id;

        if($request->file('img')){
            $image = $request->file('img');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); //get's the extension of the file
            Image::make($image)->resize(1920, 1200)->save('roomthumbnail/'.$name_gen);
            $save_url = 'roomthumbnail/'.$name_gen;

            Room::findOrFail($room_id)->update([
                'img' => $request->$image.$name_gen,
                'city' => $request->city,
                'description' => $request->description,
                'price' => $request->price,
                'service_id' => $request->service_id,
            ]);
            $notification = array(
                'message' => 'Room added with thumbnail waiting to validate by the admin or moderator.',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }else{

            Room::findOrFail($room_id)->update ([
                'city' => $request->city,
                'description' => $request->description,
                'price' => $request->price,
                'service_id' => $request->service_id,
            ]);
            $notification = array(
                'message' => 'Room added without thumbnail waiting to validate by the admin or moderator.',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }// end else

        // $rooms = new Room;

        // Storage::put( 'public/img/', $request->file( 'img' ) );
        // $rooms->img = $request->file( 'img' )->hashName();
        // $rooms->city = $request->city;
        // $rooms->description = $request->description;
        // $rooms->price = $request->price;
        // $rooms->service_id = $request->service_id;
        // $rooms->save();
        // return redirect()->back();

    }//end condition

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
