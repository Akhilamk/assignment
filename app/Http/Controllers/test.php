<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class test extends Controller
{
   
    // public function postfun(Request $re){
    //     $uname=$re->n4;
    //     $pwd=$re->n5;
    //    $var= DB::table('student')->where('username',$uname)->first();
    //    if(is_null($var)){
    //      //   echo "Incorrect Username";
    //      return redirect('log')->with('errmsg','Incorrect Username');
    //    }
    //    elseif(($var->username==$uname)&&($var->password==$pwd)){
 
    //      //   echo "Login Success!";
    //      $re->session()->put('login',$var->id);
 
    //      return redirect('view');
    //    }
    //    else{
    //      //   echo "Incorrect Password";
    //      return redirect('log')->with('errmsg','Incorrect  Password!');
 
    //    }

    //  }
    //  public function disp(){
    //      return view('studenthom');
    //  }

    
}
