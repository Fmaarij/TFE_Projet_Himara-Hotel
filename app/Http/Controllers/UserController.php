<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

// use App\Mail\MailNotify as MailMailNotify;
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('users.index', compact('users' ));
    }


    // public function __construct(){
    //     // $users = User::all();
    //     if(Auth::user()->role_id==1){

    //         $this->middleware('roleadmin');
    //     }elseif(Auth::user()->role_id==2){

    //         $this->middleware('rolemoderator')->except(['create','store','show','edit','update','destroy']);
    //     }

    //     $this->middleware('roleadmin') && $this->middleware('rolemoderator')->only('index');
// }
// public function __construct1(){
//     $this->middleware('roleadmin');
// }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.create',compact('users',"roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            "city" => ["required"],
            "country" => ["required",],
            "age" => ["required"],
            // "maxguests" => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "password" => ["required"],
            'img'=> ['required'],

            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $users=new User;
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
            $request->file('img')->storeAs('public/user_images', $filenametostore);
            $request->file('img')->storeAs('public/user_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/user_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $users->img = $filenametostore;
        }
        // dd($request);
            $users->name = $request->name;
            $users->lastname = $request->lastname;
            $users->city = $request->city;
            $users->country = $request->country;
            $users->age = $request->age;
            // $users->latestnews_id = 1;
            // $users->role_id = 4;
            // $users->room_id ='0';
            $users->email = $request->email;
            $users->password= Hash::make($request->password);
        $users->save();
        $data = [
            // 'recipient' => 'member@test.com',
            'email' => $request->email,
            'name' => $request->name,
            'lastname'=>$request->lastname,
            'age'=>$request->age,
            'subject'=>"New user has been added",
            // 'body'=>$request->message,

        ];
        Mail::to( 'himarahotel@gmail.com' )->send( new MailNotify($data));
        return redirect()->back()->with('success', 'User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::find($id);
        return view('users.edit', compact('users','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'lastname' => ['required', 'string', 'max:255'],
        //     "city" => ["required"],
        //     "country" => ["required",],
        //     "age" => ["required"],
            // "maxguests" => ['required'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // "password" => ["required"],
            // 'img'=> ['required'],

            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);


        $users= User::find($id);
        if($request->hasFile('img')) {
            Storage::delete('public/user_images/thumbnail/'.$users->img);
            Storage::delete('public/user_images/'.$users->img);
            //get filename with extension
            $filenamewithextension = $request->file('img')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('img')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('img')->storeAs('public/user_images', $filenametostore);
            $request->file('img')->storeAs('public/user_images/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/user_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800, function($constraint) {
                // $constraint->aspectRatio();
            });
            $img->save();
            $users->img = $filenametostore;
        }

            $users->name = $request->name;
            $users->lastname = $request->lastname;
            $users->city = $request->city;
            $users->country = $request->country;
            $users->age = $request->age;

            $users->email = $request->email;
            $users->password= Hash::make($request->password);
            $users->role_id = $request->role_id;
               $users->save();
        $data = [
            // 'recipient' => 'member@test.com',
            'email' => $request->email,
            'name' => $request->name,
            'lastname'=>$request->lastname,
            'age'=>$request->age,
            'subject'=>"New user has been modified",
            // 'body'=>$request->message,

        ];
        Mail::to( 'himarahotel@gmail.com' )->send( new MailNotify($data));
        return redirect()->back()->with('success', 'User updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('users');
    }

}
