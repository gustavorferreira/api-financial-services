<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $revenue = Status::all();
        return response()->json($revenue);
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $newRevenue = new Status([
            'status_name' => $request->get('status_name'),
            'description' => $request->get('description')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $revenue = Status::findOrFail($id);
        return response()->json($revenue);
    }

    public function update(Request $request, $id)
    {
        $revenue = Status::findOrFail($id);

        $request->validate([
            'status_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $revenue->status_name = $request->get('status_name');
        $revenue->description = $request->get('description');

        $revenue->save();

        return response()->json($revenue);
    }

    public function destroy($id)
    {
        $revenue = Status::findOrFail($id);
        $revenue->delete();

        return response()->json($revenue::all());
    }
}
