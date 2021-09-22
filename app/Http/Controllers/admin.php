<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admin extends Controller
{
    public function logfun(Request $re){

        $uname=$re->n1;
        $pwd=$re->n2;
       $var= DB::table('admin')->where('username',$uname)->first();
       if(is_null($var)){
         //   echo "Incorrect Username";
         return redirect('log')->with('errmsg','Incorrect Username or Password!');
       }
       elseif(($var->username==$uname)&&($var->password==$pwd)){
 
         //   echo "Login Success!";
         $re->session()->put('login',$var->id);
 
         return redirect('adminhome');
       }
       else{
         //   echo "Incorrect Password";
         return redirect('log')->with('errmsg','Incorrect Username or Password!');
 
       }

     }
      ////ge  the homepage///
     public function getfun(){
        return view('loginform');
    }
    ////display adminhome////
public function dispfun(){

  if(session()->has('login')){
    $logid=session()->get('login');
    $var=DB::table('admin')->where('id',$logid)->first();
  return view('adminhome',['user'=>$var]);
}
else{
  echo "Please login Ur Account!";
}
}
  ///logout////
  public function logoutfun(){
    session()->forget('login');
    session()->flush();
    return redirect('log');
  }
/////student/////
public function regfun(Request $request){
    $name=$request->n1;
    $conatct=$request->n2;
    $email=$request->n3;
    $username=$request->n4;
    $password=$request->n5;
    $confirm=$request->n6;
    $var=DB::table('student')->insert([
         'name'=>$name,
         'contact'=>$conatct,
         'email'=>$email,
         'username'=>$username,
         'password'=>$password,
         'confirmpwd'=>$confirm

    ]);
    if($var){
      echo "success!";
      return redirect('student')->with('message','Registration Success!');

    }else
    {
      alert("Registration Failed!");
    }
    
    

}

public function postfun(Request $req){
  $un=$req->n4;
  $pw=$req->n5;
 $va=DB::table('student')->where('username',$un)->first();
 if(is_null($va)){
   
   return redirect('log')->with('errmsg','Incorrect Username or Password!');
 }
 elseif(($va->username==$un)&&($va->password==$pw)){

   $re->session()->put('login',$va->id);

   return redirect('view');
 }
 else{
  
   return redirect('log')->with('errmsg','Incorrect Username or Password!');

 }
}

public function disp(){
  return view('studenthom');
}

public function act(){
$data=DB::table('student')->get();
return view('activestudent',['user'=>$data]);


}

public function inactivate(){
  $da=DB::table('student')->get();
  return view('inactive',['data'=>$da]);   
}
}
