<?php

namespace App\Http\Controllers;

use App\Models\Contactinformation;
use App\Http\Requests\StoreContactinformationRequest;
use App\Http\Requests\UpdateContactinformationRequest;
use Illuminate\Http\Request;

class ContactinformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactinformation = Contactinformation::all();
        return view('contactinformation.index',compact('contactinformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactinformation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactinformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactinformation = new Contactinformation;
        $contactinformation->adress = $request->adress;
        $contactinformation->email = $request->email;
        $contactinformation->gsm = $request->gsm;
        $contactinformation->phone = $request->phone;
        $contactinformation->website = $request->website;
        $contactinformation->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactinformation  $contactinformation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactinformation = Contactinformation::find($id);
        return view('contactinformation.show', compact('contactinformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactinformation  $contactinformation
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contactinformation = Contactinformation::all();
        return view('contactinformation.edit',compact('contactinformation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactinformationRequest  $request
     * @param  \App\Models\Contactinformation  $contactinformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactinformation = Contactinformation::find($id);
        $contactinformation->adress = $request->adress;
        $contactinformation->email = $request->email;
        $contactinformation->gsm = $request->gsm;
        $contactinformation->phone = $request->phone;
        $contactinformation->website = $request->website;
        $contactinformation->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactinformation  $contactinformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactinformation = Contactinformation::find($id);
        $contactinformation->delete();
        return redirect('contactinformation');
    }
}
