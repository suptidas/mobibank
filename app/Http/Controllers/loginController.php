<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
    public function index(){

    	return view('login.login');
    }


    public function verify(Request $req){

    
        $user=User::where('username',$req->username)
                     ->where('password',$req->password)
                     ->first();


      if($user != NULL){

            $req->session()->put('username', $req->username);
            $req->session()->put('id', $user->id);
            $req->session()->put('usertype', $user->usertype);
            $req->session()->put('picture', $user->picture);

            if($user['usertype'] == 'Admin')
            {
                return redirect('/adminhome');
            }
            else if($user['usertype'] == 'Manager' ||'manager')
            {
                return redirect('/manager/home');   
            }
            }else{
            $req->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
            }
    
    }
}



