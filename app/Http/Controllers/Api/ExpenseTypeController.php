<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    public function index()
    {
        $revenue = ExpenseType::all();
        return response()->json($revenue);
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
        $revenue = ExpenseType::findOrFail($id);
        return response()->json($revenue);
    }

    public function update(Request $request, $id)
    {
        $revenue = ExpenseType::findOrFail($id);

        $request->validate([
            'expense_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $revenue->expense_name = $request->get('expense_name');
        $revenue->description = $request->get('description');

        $revenue->save();

        return response()->json($revenue);
    }

    public function destroy($id)
    {
        $revenue = ExpenseType::findOrFail($id);
        $revenue->delete();

        return response()->json($revenue::all());
    }
}
