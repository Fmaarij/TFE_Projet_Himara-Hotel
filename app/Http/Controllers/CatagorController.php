<?php

namespace App\Http\Controllers;

use App\Models\Catagor;
use App\Http\Requests\StoreCatagorRequest;
use App\Http\Requests\UpdateCatagorRequest;

class CatagorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatagorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatagorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagor  $catagor
     * @return \Illuminate\Http\Response
     */
    public function show(Catagor $catagor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagor  $catagor
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagor $catagor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatagorRequest  $request
     * @param  \App\Models\Catagor  $catagor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatagorRequest $request, Catagor $catagor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagor  $catagor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagor $catagor)
    {
        //
    }


}
