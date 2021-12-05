<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        return response()->json($payment);
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
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $request->validate([
            'expense_type_id' => 'required|max:255',
            'payment_date' => 'required|max:255'
        ]);

        $payment->expense_type_id = $request->get('expense_type_id');
        $payment->payment_date = $request->get('payment_date');

        $payment->save();

        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return response()->json($payment::all());
    }
}
