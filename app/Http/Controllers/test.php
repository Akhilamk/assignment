<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class test extends Controller
{
    public function adfun(Request $re){
        $user=$re->n1;
        $pwd=$re->n2;
        if(($user=="admin")&&($pwd=="admin123")){
            return view('adminhome');
        }else
        {
            // echo "Incorrect Username Or Password!";
            return redirect('login')->with('errmsg','Incorrect Username Or Password!');
        }

    }
    public function loginform(){
        return redirect('login');
    }
    public function postfun(Request $request){
        $name=$request->n1;
        $contact=$request->n2;
        $email=$request->n3;
        $user=$request->n4;
        $password=$request->n5;
        $cnf=$request->n6;
        $vara=DB::table('student')->insert([
              'name'=>$name,
              'contact'=>$contact,
              'email'=>$email,
              'username'=>$user,
              'password'=>$password,
              'confirmpwd'=>$cnf
        ]);
        if($vara){
            return redirect('studreg')->with('msg','Registration Successful!');
        }else{
            return redirect('studreg')->with('msg','Registration Failed!');
            
        }
    }
    public function regfun(){
        return view('student');
    }
    ///login data///
    public function studlogin(Request $req){
        $user=$req->n4;
        $pwd=$req->n5;
        $store=DB::table('student')->where('username',$user)->first();
        if(is_null($store)){
            //   echo "Incorrect Username";
            return redirect('viewstud')->with('errmsg','Incorrect Username ');

          }elseif(($store->username==$user)&&($store->password==$pwd)){
 
            //   echo "Login Success!";
            $re->session()->put('log',$store->id);
    
            return redirect('studbutton');
          }else{
            //   echo "Incorrect Password";
            return redirect('viewstud')->with('errmsg','Incorrect  Password!');
    
          }
    }
    public function studview(){
        return view('studenthom');
    }


    public function tableview(){
        $store=DB::table('student')->get();
        return view('studenthom',['my'=>$store]);
    }

    ///logout////
  public function logoutfun(){
    session()->forget('log');
    session()->flush();
    return redirect('login');
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