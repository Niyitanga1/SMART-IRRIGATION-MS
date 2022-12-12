<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class authenticationController extends Controller
{
   public function login(){
    return view( 'auth.login');
   }


  

   public function registration(){
    return view( 'auth.registration');

   }





   public function registerUser(Request $request){
       $request->validate(
        [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]
       );

       $user=new user();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=$request->password;

       $res= $user->save();
       if($res){
         return back()->with('success','you have success fully registered');

       }else{
 return back()->with('success','Something went Wrong');
       }


   }


   public function loginAdmin(Request $request)
   {
     $request->validate(
       [
           'email'=>'required|email',
           'password'=>'required',
          
       ]
      );
      $user=user::where('email','=',$request->email)->first();
      if($user){
 
       if(Hash::che($request->password,$user->password)){
         $request->session()->put('loginId',$user->id);  
       }else{
         return back()->with('fail','Password Mismatch');
       }
 
      }else{
       return view( 'auth.login');
      }
 
 
   }
}
