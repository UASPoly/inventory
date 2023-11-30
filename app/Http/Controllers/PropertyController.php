<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PropertyController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'size'=>'required',
            'price'=>'required',
            'address'=>'required',
            ]);
        Auth::user()->properties()->create([
            'size'=>$request->size,
            'price'=>$request->price,
            'address'=>$request->address,
            ]); 
            
        return redirect()->route('dashboard');   
    }
}
