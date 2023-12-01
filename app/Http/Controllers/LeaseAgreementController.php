<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaseAgreement;

class LeaseAgreementController extends Controller
{
    public function index()
    {
        return view('property.lease.index');
    }

    public function pay(Request $request, $leaseId)
    {
        $lease = LeaseAgreement::find($leaseId);
        $lease->financialTransactions()->create([
            'amount'=>$request->amount,
            'date'=>$request->date,
            'payment_type_id'=>$request->payment_type_id,
            'payment_mode'=>$request->payment_mode,
            ]);
            return redirect()->route('property.lease.index');
    }
}
