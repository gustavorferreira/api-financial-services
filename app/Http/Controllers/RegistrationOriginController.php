<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationOriginRequest;
use App\Http\Requests\UpdateRegistrationOriginRequest;
use App\Models\RegistrationOrigin;

class RegistrationOriginController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrationOriginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationOriginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationOrigin  $registrationOrigin
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationOrigin $registrationOrigin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationOriginRequest  $request
     * @param  \App\Models\RegistrationOrigin  $registrationOrigin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationOriginRequest $request, RegistrationOrigin $registrationOrigin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationOrigin  $registrationOrigin
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationOrigin $registrationOrigin)
    {
        //
    }
}
