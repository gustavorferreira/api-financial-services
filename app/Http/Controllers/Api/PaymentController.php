<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $revenue = Payment::all();
        return response()->json($revenue);
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_type_id' => 'required|max:255',
            'payment_date' => 'required|max:255'
        ]);

        $newRevenue = new Payment([
            'expense_type_id' => $request->get('expense_type_id'),
            'payment_date' => $request->get('payment_date')
        ]);

        $newRevenue->save();

        return response()->json($newRevenue);
    }

    public function show($id)
    {
        $revenue = Payment::findOrFail($id);
        return response()->json($revenue);
    }

    public function update(Request $request, $id)
    {
        $revenue = Payment::findOrFail($id);

        $request->validate([
            'expense_type_id' => 'required|max:255',
            'payment_date' => 'required|max:255'
        ]);

        $revenue->expense_type_id = $request->get('expense_type_id');
        $revenue->payment_date = $request->get('payment_date');

        $revenue->save();

        return response()->json($revenue);
    }

    public function destroy($id)
    {
        $revenue = Payment::findOrFail($id);
        $revenue->delete();

        return response()->json($revenue::all());
    }
}
