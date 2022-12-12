<?php

namespace App\Http\Controllers;

use App\Models\agronomist;
use Illuminate\Http\Request;

class AgronomistController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'ag_id'=>'required',
            'ag_fname'=>'required',
            'ag_lname'=>'required',
            'ag_district'=>'required',
            'ag_sector'=>'required',
            'ag_cell'=>'required',
            'ag_village'=>'required',
            'ag_tel'=>'required',
            'ag_email'=>'required',
            'ag_password'=>'required',
            
            
    
        ]);
    
        $agronomist =new agronomist;
        $agronomist->ag_id=$request->ag_id;
        $agronomist->ag_fname=$request->ag_fname;
        $agronomist->ag_lname=$request->ag_lname;
        $agronomist->ag_district=$request->ag_district;
        $agronomist->ag_sector=$request->ag_sector;
        $agronomist->ag_sector=$request->ag_sector;
        $agronomist->ag_cell=$request->ag_cell;
        $agronomist->ag_village=$request->ag_village;
        $agronomist->ag_tel=$request->ag_tel;
        $agronomist->ag_email=$request->ag_email;
        $agronomist->ag_password=$request->ag_password;
     
    
        $agronomist->save();
        return response()->json(['message'=>'Agronomist Added'],200);
    
    
       }

       public function delete(Request $request,$id){
        $agronomist = agronomist::find($id);
        $agronomist->delete();
        return response()->json($agronomist);
    }

    public function viewall($id=null){
        return $id?agronomist::find($id):agronomist::all();
           }

           public function update(Request $request,$id){
            $agronomist=agronomist::find($id);
            $agronomist->update($request->all());
            return $agronomist;
            }


}
