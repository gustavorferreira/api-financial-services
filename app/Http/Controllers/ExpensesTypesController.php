<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpensesTypesRequest;
use App\Http\Requests\UpdateExpensesTypesRequest;
use App\Models\ExpensesTypes;

class ExpensesTypesController extends Controller
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
     * @param  \App\Http\Requests\StoreExpensesTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpensesTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpensesTypes  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function show(ExpensesTypes $expensesTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpensesTypesRequest  $request
     * @param  \App\Models\ExpensesTypes  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpensesTypesRequest $request, ExpensesTypes $expensesTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpensesTypes  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpensesTypes $expensesTypes)
    {
        //
    }
}
