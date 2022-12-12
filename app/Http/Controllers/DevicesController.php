<?php

namespace App\Http\Controllers;

use App\Models\devices;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class DevicesController extends Controller
{
   public function insertdevice(Request $request){

    $request->validate([
        'dev_id'=>'required',
        'dev_name'=>'required',
        'dev_holder'=>'required',
        'dev_district'=>'required',
        'dev_sector'=>'required',
        'dev_cell'=>'required',
        'dev_village'=>'required',
        

    ]);

    $devices =new devices;
    $devices->dev_id=$request->input('dev_id');
    $devices->dev_name=$request->input('dev_name');
    $devices->dev_holder=$request->input('dev_holder');
    $devices->dev_district=$request->input('dev_district');
    $devices->dev_sector=$request->input('dev_sector');
    $devices->dev_cell=$request->input('dev_cell');
    $devices->dev_village=$request->input('dev_village');
    $devices->cooperatives_id=$request->input('cooperatives_id');

    $devices->save();
    return redirect('/view-devices');


   }


   public function viewdevices() {
    $data=devices::all();
    return view('/admin/devices')->with('data',$data);
   } 
   public function deletedevice(Request $request,$id){
    $devices = devices::find($id);
    $devices->delete();


    return redirect('/view-devices');
}






   public function delete(Request $request,$id){
    $devices = devices::find($id);
    $devices->delete();
    return response()->json($devices);
}

public function index(){
    $devices = DB::select('select * from devices');
    return view('devices',['devices'=>$devices]);
    }
    

    public function viewall($id=null){
        return $id?devices::find($id):devices::all();
           }


public function update(Request $request,$id){
            $devices=devices::find($id);
            $devices->update($request->all());
            return $devices;
            }

            public function show($id) {
                $devices= DB::select('select * from devices where id = ?',[$id]);
                return view('updatedevice',['devices'=>$devices]);
            }
                public function editdevice(Request $request,$id) {
                    $dev_name=$request->input('dev_name');
                    $dev_name=$request->input('dev_holder');
                    $dev_district=$request->input('dev_district');
                    $dev_sector=$request->input('dev_sector');
                    $dev_cell=$request->input('dev_cell');
                    $dev_village=$request->input('dev_village');
                   
             

                    
                DB::update('update devices set dev_name= ?,dev_holder= ?,dev_district=?,dev_sector=?,dev_cell=? ,dev_village=?    where id = ?',
                [$dev_name,$dev_name,$dev_district,$dev_sector,$dev_cell,$dev_village,$id]);
                return redirect('/view-devices');
                }         

               
}
