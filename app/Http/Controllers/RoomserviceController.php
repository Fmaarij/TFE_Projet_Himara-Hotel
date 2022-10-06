<?php

namespace App\Http\Controllers;

use App\Models\Roomservice;
use App\Http\Requests\StoreRoomserviceRequest;
use App\Http\Requests\UpdateRoomserviceRequest;
use Illuminate\Http\Request;

class RoomserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomservices = Roomservice::all();
        return view('roomservices.index',compact('roomservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomservices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roomservices = new Roomservice;
        $roomservices ->service=json_encode($request->service);
        $roomservices->save();
        return redirect()->back()->with('success', "services uploaded successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function show(Roomservice $roomservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomservice $roomservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomserviceRequest  $request
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomserviceRequest $request, Roomservice $roomservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomservice $roomservice)
    {
        //
    }
}
