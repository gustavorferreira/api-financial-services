<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return response()->json($status);
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
        $status = Status::findOrFail($id);
        return response()->json($status);
    }

    public function update(Request $request, $id)
    {
        $status = Status::findOrFail($id);

        $request->validate([
            'status_name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $status->status_name = $request->get('status_name');
        $status->description = $request->get('description');

        $status->save();

        return response()->json($status);
    }

    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();

        return response()->json($status::all());
    }
}
