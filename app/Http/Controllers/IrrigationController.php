<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\irrigation;

class IrrigationController extends Controller
{
    public function store(Request $request){

        $request->validate([
            
            'soil_moisture'=>'required',
            'soil_temperature'=>'required',
            'irr_district'=>'required',
            'irr_sector'=>'required',
            'irr_cell'=>'required',
            'irr_village'=>'required',
            'amount_of_water'=>'required',
            'irr_coop'=>'required',
            'time_happened'=>'required',
           
            
    
        ]);
    
        $irrigation =new irrigation;
        $irrigation->soil_moisture=$request->soil_moisture;
        $irrigation->soil_temperature=$request->soil_temperature;
        $irrigation->irr_district=$request->irr_district;
        $irrigation->irr_sector=$request->irr_sector;
        $irrigation->irr_cell=$request->irr_cell;
        $irrigation->irr_village=$request->irr_village;
        $irrigation->amount_of_water=$request->amount_of_water;
        $irrigation->irr_coop=$request->irr_coop;
        $irrigation->time_happened=$request->time_happened;
        
        
    
        $irrigation->save();
        return response()->json(['message'=>'data Added'],200);
    
    
       }

       
   public function delete(Request $request,$id){
    $irrigation = irrigation::find($id);
    $irrigation->delete();
    return response()->json($irrigation);
}

public function viewall($id=null){
    return $id?irrigation::find($id):irrigation::all();
       }

       public function update(Request $request,$id){
        $irrigation=irrigation::find($id);
        $irrigation->update($request->all());
        return $irrigation;
        }     
    
}
