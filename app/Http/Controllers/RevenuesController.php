<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRevenuesRequest;
use App\Http\Requests\UpdateRevenuesRequest;
use App\Models\Revenues;

class RevenuesController extends Controller
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
     * @param  \App\Http\Requests\StoreRevenuesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenuesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revenues  $revenues
     * @return \Illuminate\Http\Response
     */
    public function show(Revenues $revenues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRevenuesRequest  $request
     * @param  \App\Models\Revenues  $revenues
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenuesRequest $request, Revenues $revenues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revenues  $revenues
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revenues $revenues)
    {
        //
    }
}
