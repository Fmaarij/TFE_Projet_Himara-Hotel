<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Mail\Roomconfirmation;
use App\Models\Room;
use App\Models\Typeofroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $bookings = Booking::all();
        return view( 'booking.index', compact( 'bookings' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $bookings = Booking::all();
        $typeofroom = Typeofroom::all();
        $users = User::all();
        $rooms = Room::all();
        // foreach ( $typeofroom as $type ) {
        //     foreach ( $type->room as $ro ) {

        //         dd( $ro->price );
        //     }
        // }
        return view( 'booking.create', compact( 'bookings', 'typeofroom', 'users', 'rooms' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreBookingRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $bookings = new Booking;
        $bookings->booking_name = $request->booking_name;
        $bookings->booking_email = $request->booking_email;
        $bookings->booking_phone = $request->booking_phone;
        $bookings->booking_country = $request->booking_country;
        $bookings->booking_adult = $request->booking_adult;
        $bookings->booking_child = $request->booking_child;
        $bookings->booking_date = $request->booking_date;
        $bookings->user_id = Auth::user()->id;
        $bookings->room_id = $request->room_id;
        //  $bookings->typeofroom_id = $request->typeofroom_id;
        $bookings->booking_comments = $request->booking_comments;
        $bookings->save();
        $dateinout = explode( ' - ', $bookings->booking_date );
        $datein = $dateinout[ 0 ];
        $dateout = $dateinout[ 1 ];
        $room = Room::where( 'id', '=', $bookings->room_id )
        ->update( [
            'checkin' => $datein,
            'checkout' => $dateout
        ] );

        $data = [
            // 'recipient' => 'member@test.com',
            'booking_name' => $request->booking_name,
            'booking_email' => $request->booking_email,
            'booking_phone'=>$request->booking_phone,
            'booking_guests'=>$request->booking_adult+$request->booking_child,
            'booking_country'=>$request->booking_country,
            'booking_date'=>$request->booking_date,
            'user_id'=>Auth::user()->id,
            'room_id'=>$request->room_id,
            'subject'=>"Room Confirmation",
            // 'body'=>$request->message,

        ];
        Mail::to( 'himarahotel@gmail.com' )->send( new Roomconfirmation($data));
        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Booking  $booking
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $booking = Booking::find( $id );
        return view( 'booking.show', compact( 'booking' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Booking  $booking
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $booking = Booking::find( $id );
        $typeofroom = Typeofroom::all();
        $users = User::all();
        $rooms = Room::all();
        return view( 'booking.edit', compact( 'booking', 'typeofroom', 'users', 'rooms' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateBookingRequest  $request
    * @param  \App\Models\Booking  $booking
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $bookings = Booking::find( $id );
        $bookings->booking_name = $request->booking_name;
        $bookings->booking_email = $request->booking_email;
        $bookings->booking_phone = $request->booking_phone;
        $bookings->booking_country = $request->booking_country;
        $bookings->booking_adult = $request->booking_adult;
        $bookings->booking_child = $request->booking_child;
        $bookings->booking_date = $request->booking_date;
        $bookings->user_id = Auth::user()->id;
        $bookings->room_id = $request->room_id;
        //  $bookings->typeofroom_id = $request->typeofroom_id;
        $bookings->booking_comments = $request->booking_comments;
        $bookings->save();
        $dateinout = explode( ' - ', $bookings->booking_date );
        $datein = $dateinout[ 0 ];
        $dateout = $dateinout[ 1 ];
        $room = Room::where( 'id', '=', $bookings->room_id )
        ->update( [
            'checkin' => $datein,
            'checkout' => $dateout
        ] );
        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Booking  $booking
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $booking = Booking::find( $id );
        $room = Room::where( 'id', '=', $booking->room_id )
        ->update( [
            'checkin' => 0,
            'checkout' => 0,
        ] );
        $booking->delete();
        return redirect( 'bookings' );
    }
}
