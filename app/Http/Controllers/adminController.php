<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\empRequest;
use Illuminate\Support\Facades\Http;
use App\Admin;
use App\User;

class adminController extends Controller
{
    public function adminhome(){
        if(session('usertype')=='Admin')
        {
            return view('admin.home');     
        }
        else
        {
            return redirect('/login');
        }
    } 

     public function employeelist(){
        if(session('usertype')=='Admin')
        {
            $employee = User::all();
            return view('admin.employeelist')->with('employees', $employee);     
        }
        else
        {
            return redirect('/login');
        }
    } 

     public function create(){
        if(session('usertype')=='Admin')
        {
           return view('admin.create');    
        }
        else
        {
            return redirect('/login');
        }
    }



public function store(empRequest $req){

      if($req->hasFile('img')){

        $file=$req->file('img');

             if($file->move('upload', $file->getClientOriginalName())){
               
                $user = new User();

                $user->username     = $req->username;
                $user->name         = $req->name;
                $user->password     = $req->password;
                $user->email        = $req->email;
                $user->contactNo    = $req->contno;
                $user->gender       = $req->gender;
                $user->usertype     = $req->type;
                $user->address      = $req->address;
                $user->picture      = $file->getClientOriginalName();

                if($user->save())
                {
                    return redirect()->route('admin.employeelist');
                }

            }else{
                return redirect('/login');
            }
      }        else
        {
            return redirect('/admin.home');
        } 
  }

    public function edit($id){
        if(session('usertype')=='Admin')
        {
           $employee = User::find($id);
           return view('admin.edit', $employee);
        }
        else
        {
            return redirect('/admin.home');
        } 
    }

    public function update($id, empRequest $req){
        if(session('usertype')=='Admin')
        {
            $employee = User::find($id);

            $employee->name         = $req->name;
            $employee->address      = $req->address;
            $employee->contactno    = $req->contactno;
            $employee->username     = $req->username;
            $employee->password     = $req->password;
            $employee->email        = $req->email;
            $employee->usertype     = $req->type;
            $employee->save();

            if($employee->save()){
                return redirect()->route('admin.employeelist');
            }  
        }
        else
        {
            return redirect('/login');
        } 
        
    }

     public function show($id){
        if(session('usertype')=='Admin')
        {
           $employee = User::find($id);
           return view('admin.show', $employee);
        }
        else
        {
            return redirect('/login');
        } 
        
    }

    public function info(Request $req){

        $id= $req->session()->get('id');

           $value = User::find($id);
           return view('admin.personalinfo', $value);

       // return $value;
        
    }
    

     public function personalupdate(empRequest $req){

            $id= $req->session()->get('id');
        
            $employee = User::find($id);

            $employee->name         = $req->name;
            $employee->address      = $req->address;
            $employee->contactno    = $req->contactno;
            $employee->username     = $req->username;
            $employee->password     = $req->password;
            $employee->email        = $req->email;
            $employee->usertype     = $req->type;
            $employee->save();

            if($employee->save()){
                return redirect()->route('admin.employeelist');
            }  
        
        else
        {
            return redirect('/login');
        } 
        
    }


     public function delete($id){
        if(session('usertype')=='Admin')
        {
           $employee = User::find($id);
           return view('admin.delete', $employee);
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function destroy($id){
        if(session('usertype')=='Admin')
        {
            $employee = User::find($id);
            if($employee->delete()){
                return redirect()->route('admin.employeelist');
            }
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function index2()
    {
     return view('admin.users');
    }

    public function search(Request $request)
    {
      
       if($request->ajax()){
    
         $output="";
         $employees = User::where('username','LIKE','%'.$request->search."%")->get();
         
         if($employees){
      
            foreach ($employees as  $employee) {
            
             $output.='<tr>'.
             
             '<td>'.$employee->id.'</td>'.

             '<td>'.$employee->name.'</td>'.
             
             '<td>'.$employee->username.'</td>'.
             
             '<td>'.$employee->address.'</td>'.
             
             
             
             '</tr>';
         
            }
            return $output;  
 
         }
   
       }
 
    }
}
