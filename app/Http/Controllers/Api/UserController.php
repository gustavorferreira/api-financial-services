<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $expense = User::all();
        return response()->json($expense);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nick_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $newRevenue = new User([
            'nick_name' => $request->get('nick_name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $expense = User::findOrFail($id);
        return response()->json($expense);
    }

    public function update(Request $request, $id)
    {
        $expense = User::findOrFail($id);

        $request->validate([
            'nick_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $expense->nick_name = $request->get('nick_name');
        $expense->email = $request->get('email');
        $expense->password = $request->get('password');

        $expense->save();

        return response()->json($expense);
    }

    public function destroy($id)
    {
        $expense = User::findOrFail($id);
        $expense->delete();

        return response()->json($expense::all());
    }
}
