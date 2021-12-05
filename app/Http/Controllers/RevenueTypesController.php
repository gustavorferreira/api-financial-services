<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRevenueTypeRequest;
use App\Http\Requests\UpdateRevenueTypesRequest;
use App\Models\RevenueType;

class RevenueTypesController extends Controller
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
     * @param  \App\Http\Requests\StoreRevenueTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenueTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RevenueType  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function show(RevenueType $revenuesTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRevenueTypesRequest  $request
     * @param  \App\Models\RevenueType  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenueTypesRequest $request, RevenueType $revenuesTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RevenueType  $revenuesTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevenueType $revenuesTypes)
    {
        //
    }
}
