<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TenantController extends Controller
{
    public function register(Request $request)
    {
       $request->validate([
           "contact" => "required",
            "work_title" => "required",
            "work_place" => "required",
            "work_address" => "required",
            "estimated_annual_income" => "required"
            ]);

        Auth::user()->tenant()->create([
            "contact" => $request->contact,
            "work_title" => $request->work_title,
            "work_place" => $request->work_place,
            "work_address" => $request->work_address,
            "estimated_annual_income" => $request->estimated_annual_income
        ]);    
        return redirect()->route('dashboard');
    }

    public function request($propertyId)
    {
        Auth::user()->tenant->rentRequests()->firstOrCreate(['property_id'=>$propertyId]);
        
        return redirect()->route('dashboard');
    }
}
