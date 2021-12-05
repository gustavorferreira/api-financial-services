<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRevenuesTypesRequest;
use App\Http\Requests\UpdateRevenuesTypesRequest;
use App\Models\RevenuesTypes;

class RevenuesTypesController extends Controller
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
     * @param  \App\Http\Requests\StoreRevenuesTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenuesTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RevenuesTypes  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function show(RevenuesTypes $revenuesTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRevenuesTypesRequest  $request
     * @param  \App\Models\RevenuesTypes  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenuesTypesRequest $request, RevenuesTypes $revenuesTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RevenuesTypes  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevenuesTypes $revenuesTypes)
    {
        //
    }
}
