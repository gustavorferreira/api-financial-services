<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RegistrationOrigin;
use Illuminate\Http\Request;

class RegistrationOriginController extends Controller
{
    public function index()
    {
        $origin = RegistrationOrigin::all();
        return response()->json($origin);
    }

    public function store(Request $request)
    {
        $request->validate([
            'system_name' => 'required|max:255',
            'description' => 'required'
        ]);

        $newOrigin = new RegistrationOrigin([
            'system_name' => $request->get('system_name'),
            'description' => $request->get('description')
        ]);

        $newOrigin->save();

        return response()->json($newOrigin);
    }

    public function show($id)
    {
        $origin = RegistrationOrigin::findOrFail($id);
        return response()->json($origin);
    }

    public function update(Request $request, $id)
    {
        $origin = RegistrationOrigin::findOrFail($id);

        $request->validate([
            'system_name' => 'required|max:255',
            'description' => 'required'
        ]);

        $origin->system_name = $request->get('system_name');
        $origin->description = $request->get('description');

        $origin->save();

        return response()->json($origin);
    }

    public function destroy($id)
    {
        $origin = RegistrationOrigin::findOrFail($id);
        $origin->delete();

        return response()->json($origin::all());
    }
}
