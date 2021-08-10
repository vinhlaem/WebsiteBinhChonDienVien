<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class logincontroller extends Controller
{
    public function getlogin(){
    	return view ('login');
    }
    public function postlogin(Request $Request){
    	$phone = $Request->name;
    	$password = $Request->password;
    	$infologin=[
    		'id'=>$phone,
    		'password'=>$password
    	];
    	$inforeg = [
    		'id'=>$phone,
    		'password'=>bcrypt($password)
    	];
    	if($user=DB::table('users')->find($phone)){
    		if(Auth::attempt($infologin)){
          if(Auth::user()->id=='0769980620'){
            return redirect('/admin');
          }else{
              return redirect('/');
          }
    	
      }else{
    			return redirect('/login')->with('saimatkhau','bạn nhập sai mật khẩu');
    		}
    		
   		 }else{
   		 	DB::table('users')->insert($inforeg);
   		 	if(Auth::attempt($infologin)){
   		 		return redirect('/');
   		 	}
   		 	
   		 }
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }

}
