<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RevenueType;
use Illuminate\Http\Request;

class RevenueTypesController extends Controller
{
    public function index()
    {
        $revenue = RevenueType::all();
        return response()->json($revenue);
    }

    public function store(Request $request)
    {
        $request->validate([
            'revenue_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $newRevenue = new RevenueType([
            'revenue_name' => $request->get('revenue_name'),
            'description' => $request->get('description')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $revenue = RevenueType::findOrFail($id);
        return response()->json($revenue);
    }

    public function update(Request $request, $id)
    {
        $revenue = RevenueType::findOrFail($id);

        $request->validate([
            'revenue_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $revenue->revenue_name = $request->get('revenue_name');
        $revenue->description = $request->get('description');

        $revenue->save();

        return response()->json($revenue);
    }

    public function destroy($id)
    {
        $revenue = RevenueType::findOrFail($id);
        $revenue->delete();

        return response()->json($revenue::all());
    }
}
