<?php

namespace App\Http\Controllers;
use App\Models\managers;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

 

    public function entermanager(Request $request){
        $request->validate([
            'man_id'=>'required',
            'man_fname'=>'required',
            'man_lname'=>'required',
            'man_cooperative'=>'required',
            'man_district'=>'required',
            'man_sector'=>'required',
            'man_cell'=>'required',
            'man_village'=>'required',
            'man_tel'=>'required',
            'man_email'=>'required',
            'man_password'=>'required',
            'cooperatives_id'=>'required',






        ]);

     $managers =new managers;

 
     $managers->man_id=$request->input('man_id');
     $managers->man_fname=$request->input('man_fname');
     $managers->man_lname=$request->input('man_lname');

     $managers->man_cooperative=$request->input('man_cooperative');
     $managers->man_district=$request->input('man_district');
     $managers->man_sector=$request->input('man_sector');
     $managers->man_cell=$request->input('man_cell');
     $managers->man_village=$request->input('man_village');
     $managers->man_tel=$request->input('man_tel');
     $managers->man_email=$request->input('man_email');
     $managers->man_password=$request->input('man_password');
     $managers->cooperatives_id=$request->input('cooperatives_id');

     $managers->save();
    //return redirect('/view-managers');


    }

    public function delete(Request $request,$id){
        $managers = managers::find($id);
        $managers->delete();
        //return redirect('/view-managers');
    }


    public function viewall($id=null){
        return $id?managers::find($id):managers::all();

           }

           public function viewmanagers() {
            $data=Managers::all();
            return view('/admin/managers')->with('data',$data);
           } 
  

      
public function update(Request $request,$id){
    $managers=managers::find($id);
    $managers->update($request->all());
    return $managers;
    }     

}
