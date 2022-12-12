<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Cooperatives;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class CooperativesController extends Controller
{
    public function store(Request $request){


$request ->validate([
   // 'coop_id'=>'required',
    'coop_name'=>'required',
    'coop_district'=>'required',
    'coop_sector'=>'required',
    'coop_cell'=>'required',
    'coop_village'=>'required',
    'coop_tel'=>'required',
    'coop_email'=>'required',
    'coop_tin'=>'required',
]);


  $cooperatives = new Cooperatives;
 // $cooperatives->coop_id=$request->coop_id;
  $cooperatives->coop_name=$request->input('coop_name');
  $cooperatives->coop_district=$request->input('coop_district');
  $cooperatives->coop_sector=$request->input('coop_sector');
  $cooperatives->coop_cell=$request->input('coop_cell');
  $cooperatives->coop_village=$request->input('coop_village');
  $cooperatives->coop_tel=$request->input('coop_tel');
  $cooperatives->coop_email=$request->input('coop_email');
  $cooperatives->coop_tin=$request->input('coop_tin');
  $cooperatives->save();
  return redirect('/view-records');

  
  
    }

    public function delete(Request $request,$id){
        $cooperatives = Cooperatives::find($id);
        $cooperatives->delete();


        return redirect('/view-records');
    }



    public function viewall($id=null){
        return    $id?Cooperatives::find($id):Cooperatives::all();

           }

          //// public function viewcooperatives(){
          //  $data =DB::select('select * from cooperatives');
           // return view('/admin/cooperatives',['users'=>$data]);
          //  }

          public function viewcooperatives() {
            $data=Cooperatives::all();
            return view('/admin/cooperatives')->with('data',$data);
           } 
  
      
           public function update(Request $request,$id){
            $cooperatives=cooperatives::find($id);
            $cooperatives->update($request->all());
            return $cooperatives;
            }   
            
      
            public function role(){
	
                $Admin_role=Role::create(['name' => 'Admin']);
                $coop_manager=Role::create(['name' => 'coop_manager']);
                $agronomist_role=Role::create(['name' => 'agronomist']);
                
                Permission::create(['name' => 'create-cooperative']);
                Permission::create(['name' => 'create-manager']);
                Permission::create(['name' => 'create-agronomist']);
                Permission::create(['name' => 'view-irrigation-data']);
                Permission::create(['name' => 'view-cooperative']);
                Permission::create(['name' => 'view-manager']);
                Permission::create(['name' => 'view-agronomist']);
                Permission::create(['name' => 'delete-cooperative']);
                Permission::create(['name' => 'delete-manager']);
                Permission::create(['name' => 'delete-agronomist']);
                Permission::create(['name' => 'update-cooperative']);
                Permission::create(['name' => 'update-manager']);
                Permission::create(['name' => 'update-agronomist']);
                
                
                        $Admin_role->givePermissionTo([
                           'create-cooperative',
                           'delete-cooperative',
                           'view-cooperative',
                           'update-cooperative',
                           'create-manager',
                           'view-manager',
                           'delete-manager',
                           'update-manager',
                           'create-agronomist',
                           'delete-agronomist',
                          'view-agronomist',
                          'update-agronomist',
                           'view-irrigation-data'
                     
                        ]);
                
                        $coop_manager->givePermissionTo([
                              'create-agronomist',
                              'view-agronomist',
                              'delete-agronomist',
                              'update-agronomist',
                              'view-irrigation-data'
                              
                              
                              
                        ]);
                        $agronomist_role->givePermissionTo([
                             'view-irrigation-data',
                             
                        ]);
                     
                }


                public function index(){
                    $cooperatives = DB::select('select * from cooperatives');
                    return view('cooperatives',['cooperatives'=>$cooperatives]);
                    }
                    




                public function show($id) {
                    $cooperatives = DB::select('select * from cooperatives where id = ?',[$id]);
                    return view('updatecoop',['cooperatives'=>$cooperatives]);
                }
                    public function edit(Request $request,$id) {
                        $coop_name=$request->input('coop_name');
                        $coop_district=$request->input('coop_district');
                        $coop_sector=$request->input('coop_sector');
                        $coop_cell=$request->input('coop_cell');
                        $coop_village=$request->input('coop_village');
                        $coop_tel=$request->input('coop_tel');
                        $coop_email=$request->input('coop_email');
                        $coop_tin=$request->input('coop_tin');
                    /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
                    /*DB::table('student')->update($data);*/
                    /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
                    DB::update('update cooperatives set coop_name= ?,coop_district=?,coop_sector=?,coop_cell=? ,coop_village=? ,coop_tel=? ,coop_email=? ,coop_tin=?   where id = ?',
                    [$coop_name,$coop_district,$coop_sector,$coop_cell,$coop_village,$coop_tel,$coop_email,$coop_tin,$id]);
                    return redirect('/view-records');
                    }         

                   
 
}
