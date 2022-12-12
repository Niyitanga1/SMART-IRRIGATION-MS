<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Http\Controllers\Controller;
use App\Models\users;
use App\Providers\RouteServiceProvider;


use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request)
    {
      $request->validate(
        [
            'email'=>'required|email',
            'password'=>'required',
           
        ]
       );
       $user=user::where('email','=',$request->email )->first();
       $user2=user::where('password','=',$request->password)->first();
       if($user && $user2){
  
        if($request->password=$user->password){
          

            return redirect('/view-records');
          
          $request->session()->put('loginId',$user->id);  
        }else{
          return back()->with('fail','Password Mismatch');
        }
  
       }else{
        return view( '/admin');
       }
  
  
    }


    public function viewusers() {
        $data1=users::all();
        return view('/admin/cooperatives')->with('data1',$data1);
       } 


       public function logout(Request $request) {

        Auth::guard('web')->logout();
	
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        return redirect('/');
       } 
}