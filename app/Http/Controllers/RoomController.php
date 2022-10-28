<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Mail\MailNotify;
use App\Mail\Mailroomvalidate;
use App\Models\About;
use App\Models\Catagor;
use App\Models\Category;
use App\Models\Roomreview;
use App\Models\Roomservice;
use App\Models\Roomsphoto;
use App\Models\Tag;
use App\Models\Typeofroom;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use function PHPSTORM_META\type;

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
               // Get the search value from the request
        $search = request()->input('search');
        if($search){
             // Search in the title and body columns from the room table
             $rooms = Room::where('city', 'LIKE', "%{$search}%")
                 ->Where('checkin','=',0)->paginate(3);
                //  ->get();

        } else {

            $rooms = Room::orderBy('id', 'desc')->paginate(3);
        }
        return view ('room.index')
        ->with('roomsphotos', Roomsphoto::all())
        ->with('roomsreviews' , Roomreview::all())
        ->with('catagor' , Catagor::all())
        ->with('tag' , Tag::all())
        ->with('rooms', $rooms);
    }

    //roomreview update
    public function roomreview(){
        $room = Room::where('id','=',Auth::user()->room_id && Room::where('user_id','=',Auth::user()->id))->get();
        // dd($room);
        // User::where('id','=',Auth::user()->id)->get()
        // foreach($room as $rom){
        //     dd($rom->star);
        // }
        return view('review.review',compact('room'));
    }
    public function updatestars(Request $request) {
        // $room = Room::where( 'id', '=', $bookings->room_id )
        $room = Room::where('id','=',Auth::user()->room_id)
                        // ->where('id','=',Auth::user()->id)
        ->update( [
            'star' => $request->star,
            'description' => $request->description,
        ] );
        // dd($room);
        $roomrev = Roomreview::where('room_id','=',Auth::user()->room_id)
                                ->where('id','=',Auth::user()->id)
        ->update( [
            'star' => $request->star,
            'feedback' => $request->description,
            // 'user_id' =>Auth::user()->id,
        ] );
        // dd($room);
        return redirect()->back();
    }

    //Category function
        public function showcatagor(Catagor $catagor){
        $roomcategory = request('roomcategory');
        if(request('roomcategory')){
        $rooms = Room::WhereHas('catagor', function($query) use($roomcategory){
         return $query->where('id', 'like', "$roomcategory");})->paginate(3);
        }else{
        return "It does not exist!";
     }
     return view('Room.Roomcat', compact('rooms'));
                    }

                    //Tag function
                    public function showtag(Tag $tag){
                        $tag = request('tag');
                        // dd($tag);
        if(request('tag')){
        $room_tag = Room::WhereHas('tags', function($query) use($tag){
            return $query->where('tag_id', 'like', "$tag");})->paginate(3);
            // dd($tag);
        }else{
        return "It does not exist!";
     }
     return view('Room.Roomtag', compact('room_tag'));
                        // return view('tag.index')
                        // ->with('tag', $tag);
                        // ->with('tags', $tag->tags()->paginate(1));
                    }


    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
public function allrooms(){
    $rooms = Room::all();
    return view ( 'room.allrooms',compact('rooms') );
}



    public function create() {
        // $rooms = Room::all();
        // $room = Room::find( 1 );
        $roomtype = Typeofroom::all();

        $roomservices = Roomservice::all();
        return view( 'room.create', compact( 'roomservices', 'roomtype' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreRoomRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        request()->validate([
            "img" => ["required"],
            "typeofroom_id" => ["required"],
            "bed" => ["required",],
            "availablerooms" => ["required"],
            "maxguests" => ['required'],

            "city" => ["required"],
            "star" => ['required'],
            "price" => ["required"],
            "promo" => ['required'],

            "description" => ["required"],
            // "service" => ['required'],
        ]);
        $room = Room::where('typeofroom_id','=',$request->typeofroom_id)->get()->count();
        // $rooms = Room::find($request->typeofroom_id)->count();

        if( intval($room)===8){
            return redirect()->back()->with('error','You can add only 8 rooms');
        }else{
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
                $img = Image::make($thumbnailpath)->resize(1920, 1200, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $img->save();
                $room->img = $filenametostore;
            }

            $room->typeofroom_id = $request->typeofroom_id;
            $room->bed  = $request->bed;
            $room->availablerooms  = $request->availablerooms;
            $room->maxguests = $request->maxguests;
            $room->city = $request->city;
            $room->star= $request->star;
            $room->price = $request->price;
            $room->promo= $request->promo;
            $room->description = $request->description;
            $room->description1 = $request->description1;
            $room->service=json_encode( $request->service);
            $room->save();
            $data = [
                // 'recipient' => 'member@test.com',
                'email' => $request->email,
                'typeofroom' => $request->typeofroom_id,
                'city'=>$request->city,
                'price'=>$request->price,
                'promo'=>$request->promo,
                'description'=>$request->description,
                'subject'=>"New room added",
                // 'body'=>$request->message,

            ];
            Mail::to( 'himarahotel@gmail.com' )->send( new Mailroomvalidate($data));
            return redirect()->back()->with('success', "room added successfully.");
        }

        }




    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Room  $room
    * @return \Illuminate\Http\Response
    */

    public function show($id) {
        $roomz = Room::all();
        $room= Room::find($id);
        $abouts = About::all();
        $roomservices = Roomservice::all();
        $users = User::find($id);
        // $roomservices = Roomservice::where($room->service, '=','service')->get();
        $roomsreviews = Roomreview::where('room_id','=',$id)->get();
                                    // ->where('star','=','4')->count();
        $total = Roomreview::where('room_id','=',$id)->sum('star');
        // $avge = $total*100/$roomsreviews;
        // $countstars= Roomreview::where('room_id','=',$id)
        //                         ->where('star','=','4')->count();
        // dd($countstars);
        // $avgstar =Roomreview::avg('star');
        $avgstar =Roomreview::where('room_id',"=",$id)->get()->avg('star');
        // $avgstar =Roomreview::where('room_id',"=",$id)->get();
        // $moyen=avg($avgstar->star);
        // dd($avgstar);
        // $roomstars = Roomreview::where('room_id','=',$id)->get()->count();
        // $roomforrev = Room::all();
        $similarrooms = Room::where('typeofroom_id','=',$room->typeofroom_id)->take(3)->get();
        // $view->with('roomdispo',Room::orderBy('created_at','asc')->take(5)->get());
        $roomsphotos = Roomsphoto::where('roomtype_id','=',$room->typeofroom->id)->get();
        return view( 'room.show', compact( 'room','roomsphotos','abouts','roomservices','roomsreviews','avgstar','users','similarrooms','roomz','total') );
                }

                /**
                * Show the form for editing the specified resource.
                *
                * @param  \App\Models\Room  $room
                * @return \Illuminate\Http\Response
                */

                public function showroom($id) {
                    $room = Room::find($id);
                    return view('room.roomshow',compact('room'));
                }

                public function roomsnotvalide(){
                    $rooms = Room::where('Ptoshow','=',0)->get();
                    return view('room.roomsnotvalide',compact('rooms'));

                }


                public function roomstovalide(Request $request,$id){
                   $roomsi = Room::find($id);

                   $roomsi->Ptoshow= 1;

                   $roomsi->save();
                   $data = [
                       // 'recipient' => 'member@test.com',
                       'email' => $request->email,
                       'typeofroom' => $request->typeofroom_id,
                       'city'=>$request->city,
                       'price'=>$request->price,
                       'promo'=>$request->promo,
                       'description'=>$request->description,
                       'subject'=>"room Validated successfully ",
                       // 'body'=>$request->message,

                   ];
                   Mail::to( 'himarahotel@gmail.com' )->send( new Mailroomvalidate($data));
                   return redirect()->back()->with('success', "room has been validated successfully.");

                }


                public function edit( $id ) {
                    $room = Room::find($id);
                    $roomtype=Typeofroom::all();
                    $roomervices = Roomservice::all();
                    return view('room.edit',compact('room','roomtype','roomervices'));
                }

                /**
                * Update the specified resource in storage.
                *
                * @param  \App\Http\Requests\UpdateRoomRequest  $request
                * @param  \App\Models\Room  $room
                * @return \Illuminate\Http\Response
                */

                public function update( Request $request,$id ) {
                    $room=Room::find($id);
                    if($request->hasFile('img')) {
                        Storage::delete('public/room_images/thumbnail/'.$room->img);
                        Storage::delete('public/room_images/'.$room->img);
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
                        $img = Image::make($thumbnailpath)->resize(1920, 1200, function($constraint) {
                            // $constraint->aspectRatio();
                        });
                        $img->save();
                        $room->img = $filenametostore;
                    }

                    $room->typeofroom_id = $request->typeofroom_id;
                    $room->bed  = $request->bed;
                    $room->availablerooms  = $request->availablerooms;
                    $room->maxguests = $request->maxguests;
                    $room->city = $request->city;
                    $room->star= $request->star;
                    $room->price = $request->price;
                    $room->promo= $request->promo;
                    $room->Ptoshow= $request->Ptoshow;
                    $room->description = $request->description;
                    $room->description1 = $request->description1;
                    $room->service=json_encode( $request->service);
                    $room->save();
                    $data = [
                        // 'recipient' => 'member@test.com',
                        'email' => $request->email,
                        'typeofroom' => $request->typeofroom_id,
                        'city'=>$request->city,
                        'price'=>$request->price,
                        'promo'=>$request->promo,
                        'description'=>$request->description,
                        'subject'=>"room updated ",
                        // 'body'=>$request->message,

                    ];
                    Mail::to( 'himarahotel@gmail.com' )->send( new Mailroomvalidate($data));
                    return redirect()->back()->with('success', "room updated successfully.");
                }


                //end condition

                /**
                * Remove the specified resource from storage.
                *
                * @param  \App\Models\Room  $room
                * @return \Illuminate\Http\Response
                */

                public function destroy( $id ) {
                    $room = Room::find($id);
                    if($room->Ptoshow ==1){
                        $room->delete();
                    }else{
                        return redirect()->back()->with('error','Impossible to delete cause the room has been not validated by admin');
                    }
                    $data = [
                        // 'recipient' => 'member@test.com',
                        'email' => $room->email,
                        'typeofroom' => $room->typeofroom_id,
                        'city'=>$room->city,
                        'price'=>$room->price,
                        'promo'=>$room->promo,
                        'description'=>$room->description,
                        'subject'=>"A Room Has Been Deleted/tried to delete",
                        // 'body'=>$request->message,

                    ];
                    Mail::to( 'himarahotel@gmail.com' )->send( new Mailroomvalidate($data));
                    return redirect('allrooms');
                }
                //Button NO to delet the room
                public function deleterom( $id ) {
                    $room = Room::find($id);
                    $room->delete();
                    return  redirect()->back();
                }

                 //hdiing the room hwi is not valiated yet
                           public function delroomnotvalidated(Request $request,$id){
                            $roomsi = Room::find($id);

                            $roomsi->Ptoshow= 0;

                            $roomsi->save();

                            return redirect()->back();

                         }

                //searche function //not used cause it is used above in index function
                public function search(Request $request){
                    // Get the search value from the request
                    $search = $request->input('search');
                    // Search in the title and body columns from the room table
                    $posts = Room::query()
                        ->where('city', 'LIKE', "%{$search}%")
                        // ->orWhere('price', 'LIKE', "%{$search}%")
                        ->orWhere('typeofroom_id', 'LIKE',"%{$search}%")
                        ->get();
                    return view('room.search', compact('posts','search'));
                }

                // //Category function
                // public function catagor(Catagor $catagor){
                //     return view('catagor.index')
                //     ->with('catagor', $catagor)
                //     ->with('posts', $catagor->posts()->paginate(3))
                //     ->with('catagors',Catagor::all());
                // }

                // //Tag function
                // public function tag(Tag $tag){
                //     return view('tag.index')
                //     ->with('tag', $tag)
                //     ->with('posts', $tag->posts()->paginate(3));
                // }
            }
