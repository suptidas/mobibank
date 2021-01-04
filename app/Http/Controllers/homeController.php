<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\empRequest;
use App\Manager;

use Validator;

class homeController extends Controller
{
     public function index(Request $req){
     
      /* if($req->session()->has('username')){
          
            return view('home.index', ['username'=>$req->session()->get('username')]);
        }else{
            $req->session()->flash('msg', 'invalid request...');
            return redirect('/login');
        }*/

        return view('home.index', ['username'=>$req->session()->get('UserName')]);
    	
    }

     public function emplist(){
      /*$user="Employee";
     	$employees=Manager::where('UserType','LIKE','%'.$user."%")->get();
      return view('home.emplist')->with('employees', $employees);
*/

      $employees=Manager::where('UserType','Employee')->get();
      return view('home.emplist')->with('employees', $employees);
    }

       

     public function empCreate(){
       
      return view('home.empCreate');

    }

      public function empStore(empRequest $req){

      if($req->hasFile('myimg')){

      	$file=$req->file('myimg');

      	     if($file->move('upload', $file->getClientOriginalName())){
               
                $user = new Manager();

                $user->UserName     = $req->username;
                $user->Name         = $req->name;
                $user->Password     = $req->password;
                $user->Email        = $req->email;
                $user->ContactNo    = $req->contno;
                $user->Gender       = $req->gender;
                $user->UserType     = $req->type;
                $user->Address      = $req->address;
                $user->Propic       = $file->getClientOriginalName();

                if($user->save())
                {
                    return redirect()->route('home.emplist');
                }

            }else{
                echo "error";
            }
      }
       
      return redirect('home.empCreate');

    }


    public function empEdit($id){
       
     $employees=Manager::find($id);
     return view ('home.empEdit',$employees);

    }

      public function empUpdate($id, Request $req)
    {
      
             /*  $employees = Manager::find($id);
      
               
                $employees->UserName     = $req->username;
                $employees->Name         = $req->name;
                $employees->Password     = $req->password;
                $employees->Email        = $req->email;
                $employees->ContactNo    = $req->contno;
                $employees->Gender       = $req->gender;
                $employees->UserType     = $req->type;
                $employees->Address      = $req->address;
                //$user->Propic       = $file->getClientOriginalName();

                

                $employees->save();
                return redirect()->route('home.emplist');
*/
              if($req->hasFile('myimg')){

                $file=$req->file('myimg');

              if($file->move('upload', $file->getClientOriginalName())){
               
                $user = Manager::find($id);

                $user->UserName     = $req->username;
                $user->Name         = $req->name;
                $user->Password     = $req->password;
                $user->Email        = $req->email;
                $user->ContactNo    = $req->contno;
                $user->Gender       = $req->gender;
                $user->UserType     = $req->type;
                $user->Address      = $req->address;
                $user->Propic       = $file->getClientOriginalName();

                if($user->save())
                {
                    return redirect()->route('home.emplist');
                }

            }else{
                echo "error";
            }
      }
    }

    public function empDestroyView($id){
       
     $employees=Manager::find($id);
     return view ('home.empDelete',$employees);

    }

      public function empDestroy($id){
       
     $employees=Manager::find($id);
     $employees->delete();
     return redirect()->route('home.emplist');

    }


    public function profile(Request $req)
    {
         $user= $req->session()->get('UserName');
         $employees=Manager::where('UserName', $user)->get();
         //echo $employees;             	 
    	   return view('home.profile')->with('employees', $employees);
         


    	  
    }

    public function empPasswords($id){
       
     $employees=Manager::find($id);
     return view ('home.empPasswords',$employees);      

    }

}
