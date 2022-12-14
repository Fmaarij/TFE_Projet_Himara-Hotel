<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Himaragallery;
use App\Models\Himararestaurant;
use App\Models\Himaraservice;
use App\Models\Homepagephotovideo;
use App\Models\Latestnew;
use App\Models\Room;
use App\Models\Roomreview;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        $abouts = About::all();
        $roomz = Room::all();
        $rooms=Room::orderBy('id','desc')->take(3)->get();
        $himaraservices = Himaraservice::all();
        $himaraservicetitle = Himaraservice::where('id','=',1)->get();
        $gallery = Gallery::all();
        $gallerytitle = Gallery::where('id','=',1)->get();
        $himaragallery = Himaragallery::all();
        $homepagephotovideos = Homepagephotovideo::all();
        // $himararestaurants =Himararestaurant::all();
        $himararestaurants =Himararestaurant::paginate(4);
        $himararestauranttitle =  Himararestaurant::where('id','=',1)->get();
        $homepagephotovideos =  Homepagephotovideo::where('id','=',1)->get();
        $homepagephotrestau =  Homepagephotovideo::where('id','=',1)->get();
        $latestnews = Latestnew::paginate(3);
        // $sliders = Slider::where('waar','=','first')->get();
        // $slidersothers = Slider::where('waar','=','others')->get();
        $slidersothers = Slider::orderBy('waar')->get();
        // dd($slidersothers);
        // $sliders = Slider::where('waar','=','first')->orderBy('waar');

        // dd($sliders);
        $roomreviews = Roomreview::all();

        return view ('home.index',compact('homes','abouts','rooms','himaraservices','himaraservicetitle','gallery','gallerytitle','himaragallery','homepagephotovideos','himararestaurants','himararestauranttitle','homepagephotovideos','homepagephotrestau','latestnews','slidersothers','roomreviews','roomz'));
    }
    public function allHtitles(){
        $homes = Home::all();
        return view ('home.allHtitles',compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homes = new Home;
        $homes->title = $request->title;
        $homes->subtitle = $request->subtitle;
        $homes->save();
        return redirect()->back()->with('message','Titles added successfull' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homes = Home::find($id);
        return view('home.show',compact('homes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homes = Home::find($id);
        return view('home.edit',compact('homes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homes =Home::find($id);

        // $homes->title = Str::of($request->title)->replaceArray('*', ['<span class="text-himara">','</span>'],$request->title);
        $homes->title = $request->title;
        $homes->subtitle = $request->subtitle;
        $homes->save();
        return redirect()->back()->with('message','Titles updated successfull' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homes = Home::find($id);
        $homes->delete();
        return redirect('allHtitles');
    }
}
