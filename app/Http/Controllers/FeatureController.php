<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Feature;
use App\Upload\FileUpload as upload;

class FeatureController extends Controller
{
    use upload;

    public function index($propertyId)
    {
        return view('property.feature.index',['property'=>Property::find($propertyId)]);
    }

    public function update(Request $request, $featureId)
    {
        $request->validate(['name'=>'required', 'image'=>'required']);

        $feature = Feature::find($featureId);
        if($feature->link){
            $this->updateFile($feature, 'link',$request->image,'Features/'.$feature->property->id.'/');
        }else{
            $this->storeFile($feature, 'link',$request->image,'Features/'.$feature->property->id.'/');
        }
        
        return redirect()->route('property.feature.index',$feature->property->id);
    }
}
