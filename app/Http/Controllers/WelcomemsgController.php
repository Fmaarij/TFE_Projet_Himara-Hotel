<?php

namespace App\Http\Controllers;

use App\Models\Welcomemsg;
use App\Http\Requests\StoreWelcomemsgRequest;
use App\Http\Requests\UpdateWelcomemsgRequest;
use App\Models\Contactinformation;
use Illuminate\Http\Request;

class WelcomemsgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wlcmsg = Welcomemsg::all();
        $contactinformation = Contactinformation::all();
        return view ('welcomemsg.index',compact('wlcmsg','contactinformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomemsgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wlcmsg = new Welcomemsg;
        $wlcmsg->wlcmsg = $request->wlcmsg;
        $wlcmsg ->save();
        return redirect()->back()->with('success', "Welcome Message added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcomemsg  $welcomemsg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wlcmsg = Welcomemsg::find($id);
        return view('welcomemsg.show',compact('wlcmsg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcomemsg  $welcomemsg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wlcmsg = Welcomemsg::find($id);
        return view('welcomemsg.edit',compact('wlcmsg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomemsgRequest  $request
     * @param  \App\Models\Welcomemsg  $welcomemsg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wlcmsg = Welcomemsg::find($id);
        $wlcmsg->wlcmsg = $request->wlcmsg;
        $wlcmsg ->save();
        return redirect()->back()->with('success', "Welcome Message updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcomemsg  $welcomemsg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wlcmsg = Welcomemsg::find($id);
        $wlcmsg->delete();
        return redirect('welcomemsg');
    }
}
