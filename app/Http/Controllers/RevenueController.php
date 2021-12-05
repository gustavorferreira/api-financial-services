<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRevenueRequest;
use App\Http\Requests\UpdateRevenueRequest;
use App\Models\Revenue;

class RevenueController extends Controller
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
     * @param  \App\Http\Requests\StoreRevenueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revenue  $revenues
     * @return \Illuminate\Http\Response
     */
    public function show(Revenue $revenues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRevenueRequest  $request
     * @param  \App\Models\Revenue  $revenues
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenueRequest $request, Revenue $revenues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revenue  $revenues
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revenue $revenues)
    {
        //
    }
}
