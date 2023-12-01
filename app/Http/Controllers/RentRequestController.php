<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentRequest;
use App\Models\LeaseAgreement;

class RentRequestController extends Controller
{
    public function index()
    {
        return view('property.request.index');
    }

    public function update(Request $request,$requestId)
    {
        $request->validate([
            "amount" => "required",
            "security_deposite" => "required",
            "duration" => "required",
            "start_at" => "required",
            "end_at" => "required"
        ]);
        $rentRequest = RentRequest::find($requestId);
        $rentRequest->update(['status'=>'approved']);
        $rentRequest->leaseAgreements()->firstOrCreate([
            "amount" => $request->amount,
            "security_deposit" => $request->security_deposite,
            "duration" => $request->duration,
            "start_at" => $request->start_at,
            "end_at" => $request->end_at
        ]);
        return redirect()->route('property.request.index');
    }
}
