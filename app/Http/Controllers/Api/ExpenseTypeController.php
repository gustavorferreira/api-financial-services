<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    public function index()
    {
        $expense = ExpenseType::all();
        return response()->json($expense);
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $newRevenue = new ExpenseType([
            'expense_name' => $request->get('expense_name'),
            'description' => $request->get('description')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $expense = ExpenseType::findOrFail($id);
        return response()->json($expense);
    }

    public function update(Request $request, $id)
    {
        $expense = ExpenseType::findOrFail($id);

        $request->validate([
            'expense_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $expense->expense_name = $request->get('expense_name');
        $expense->description = $request->get('description');

        $expense->save();

        return response()->json($expense);
    }

    public function destroy($id)
    {
        $expense = ExpenseType::findOrFail($id);
        $expense->delete();

        return response()->json($expense::all());
    }
}
