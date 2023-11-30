<?php

namespace App\Http\Controllers;

use App\Models\Property;
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
        $property = Auth::user()->properties()->create([
            'size'=>$request->size,
            'price'=>$request->price,
            'address'=>$request->address,
            ]); 
        foreach(['Gate', 'Pallow', 'Boys Quarter', 'Bed Room', 'Kitchen', 'Store', 'Toilet'] as $feature){
            $property->features()->firstOrCreate(['name'=>$feature]);
        }    
        return redirect()->route('dashboard');   
    }

    public function update(Request $request, $propertyId)
    {
        $request->validate([
            'size'=>'required',
            'price'=>'required',
            'address'=>'required',
            ]);
        Property::find($propertyId)->update([
            'size'=>$request->size,
            'price'=>$request->price,
            'address'=>$request->address,
            ]); 
            
        return redirect()->route('dashboard');   
    }

    public function delete($propertyId)
    {
        $property = Property::find($propertyId);
        foreach($property->features as $feature){
            $feature->delete();
        }
        $property->delete();
        return redirect()->route('dashboard');
    }
}
