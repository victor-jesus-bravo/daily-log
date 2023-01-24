<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDevRequest;
use App\Http\Requests\UpdateDevRequest;
use App\Models\Dev;

class DevController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDevRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDevRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function show(Dev $dev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function edit(Dev $dev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDevRequest  $request
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDevRequest $request, Dev $dev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dev $dev)
    {
        //
    }
}
