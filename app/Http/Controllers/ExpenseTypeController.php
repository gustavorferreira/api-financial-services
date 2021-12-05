<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseTypeRequest;
use App\Http\Requests\UpdateExpenseTypeRequest;
use App\Models\ExpenseType;

class ExpenseTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreExpenseTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseType  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseType $expensesTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseTypeRequest  $request
     * @param  \App\Models\ExpenseType  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseTypeRequest $request, ExpenseType $expensesTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseType  $expensesTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseType $expensesTypes)
    {
        //
    }
}
