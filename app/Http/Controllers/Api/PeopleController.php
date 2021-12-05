<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'registration_origin_id' => 'required',
            'status_id' => 'required'
        ]);

        $newRevenue = new People([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'registration_origin_id' => $request->get('registration_origin_id'),
            'status_id' => $request->get('status_id')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $people = People::findOrFail($id);
        return response()->json($people);
    }

    public function update(Request $request, $id)
    {
        $people = People::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'registration_origin_id' => 'required',
            'status_id' => 'required',
        ]);

        $people->first_name = $request->get('first_name');
        $people->last_name = $request->get('last_name');
        $people->registration_origin_id = $request->get('registration_origin_id');
        $people->status_id = $request->get('status_id');

        $people->save();

        return response()->json($people);
    }

    public function destroy($id)
    {
        $people = People::findOrFail($id);
        $people->delete();

        return response()->json($people::all());
    }
}
