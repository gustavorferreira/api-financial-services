<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index()
    {
        $revenue = Revenue::all();
        return response()->json($revenue);
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_type_id' => 'required',
            'value' => 'required',
            'revenue_date' => 'required',
            'reference_date' => 'required'
        ]);

        $newRevenue = new Revenue([
            'expense_type_id' => $request->get('expense_type_id'),
            'value' => $request->get('value'),
            'revenue_date' => $request->get('revenue_date'),
            'reference_date' => $request->get('reference_date')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $revenue = Revenue::findOrFail($id);
        return response()->json($revenue);
    }

    public function update(Request $request, $id)
    {
        $revenue = Revenue::findOrFail($id);

        $request->validate([
            'expense_type_id' => 'required',
            'value' => 'required',
            'revenue_date' => 'required',
            'reference_date' => 'required',
        ]);

        $revenue->expense_type_id = $request->get('expense_type_id');
        $revenue->value = $request->get('value');
        $revenue->revenue_date = $request->get('revenue_date');
        $revenue->reference_date = $request->get('reference_date');

        $revenue->save();

        return response()->json($revenue);
    }

    public function destroy($id)
    {
        $revenue = Revenue::findOrFail($id);
        $revenue->delete();

        return response()->json($revenue::all());
    }
}
