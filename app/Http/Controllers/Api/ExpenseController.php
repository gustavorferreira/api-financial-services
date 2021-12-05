<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense = Expense::all();
        return response()->json($expense);
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_type_id' => 'required',
            'value' => 'required',
            'expense_date' => 'required',
            'reference_date' => 'required'
        ]);

        $newRevenue = new Expense([
            'expense_type_id' => $request->get('expense_type_id'),
            'value' => $request->get('value'),
            'expense_date' => $request->get('expense_date'),
            'reference_date' => $request->get('reference_date')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $expense = Expense::findOrFail($id);
        return response()->json($expense);
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);

        $request->validate([
            'expense_type_id' => 'required',
            'value' => 'required',
            'expense_date' => 'required',
            'reference_date' => 'required',
        ]);

        $expense->expense_type_id = $request->get('expense_type_id');
        $expense->value = $request->get('value');
        $expense->expense_date = $request->get('expense_date');
        $expense->reference_date = $request->get('reference_date');

        $expense->save();

        return response()->json($expense);
    }

    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return response()->json($expense::all());
    }
}
