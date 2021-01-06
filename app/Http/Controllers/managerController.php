<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\empRequest;
use Illuminate\Support\Facades\Http;
use App\User;
use App\EmpSal;

use Validator;

class managerController extends Controller
{
    public function index(Request $req){
     

        /*return view('manager.index', ['username'=>$req->session()->get('username')]);*/
        $username=$req->session()->get('username');
        $picture=$req->session()->get('picture');
        return view('manager.index')->with('username',$username)->with('picture',$picture);
    	
    }

     public function emplist(){

      $employees=User::where('usertype','employee')->get();
      return view('manager.emplist')->with('employees', $employees);
      /*$employees=User::all();
      return view('home.emplist')->with('employees', $employees);*/
    }

       

     public function empCreate(){
       
      return view('manager.empCreate');

    }

      public function empStore(empRequest $req){

      if($req->hasFile('myimg')){

      	$file=$req->file('myimg');

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
                return redirect('manager.empCreate');
            }
      }
       
      // return redirect('home.empCreate');

    }


    public function empEdit($id){
       
     $employees=User::find($id);
     return view ('manager.empEdit',$employees);

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
               
                $user = User::find($id);

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
                    return redirect()->route('manager.emplist');
                }

            }else{
                echo "error";
            }
      }
    }

    public function empDestroyView($id){
       
     $employees=User::find($id);
     return view ('manager.empDelete',$employees);

    }

      public function empDestroy($id){
       
     $employees=User::find($id);
     $employees->delete();
     return redirect()->route('manager.emplist');
    }


    public function profile(Request $req)
    {
         $id= $req->session()->get('id');
         $employees=User::find($id);
         //echo $id;             	 
    	return view('manager.profile', $employees);
           
    }

     public function profileView(Request $req)
    {
         $id= $req->session()->get('id');
         $employees=User::find($id);
         //echo $id;                 
        return view('manager.profileUpdate', $employees);
           
    }

      public function profileUpdate(Request $req)
    {
         if($req->hasFile('myimg')){

                $file=$req->file('myimg');

              if($file->move('upload', $file->getClientOriginalName())){
                $id= $req->session()->get('id');
                $user = User::find($id);

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
                    return redirect()->route('manager.profile');
                }

            }else{
                echo "error";
            }
      }
           
    }

    public function empDetails($id){
       
     $employees=User::find($id);
     return view ('manager.empDetails',$employees);      

    }

    public function empSearch(){
       
        return view('manager.empSearch');

    }

//Search

     public function search(Request $request){
       
        if($request->ajax()){
    
         $output="";
         $products = User::where('username','LIKE','%'.$request->search."%")
         ->orWhere('id', 'LIKE','%'.$request->search."%")
         ->orWhere('name','LIKE','%'.$request->search."%")
         ->orWhere('usertype', 'LIKE','%'.$request->search."%")
         ->orWhere('address', 'LIKE','%'.$request->search."%")
         ->orWhere('email', 'LIKE','%'.$request->search."%")
         ->orWhere('contactno', 'LIKE','%'.$request->search."%")
         ->orWhere('gender', 'LIKE','%'.$request->search."%")
         ->get();
         
         if($products){
      
            foreach ($products as  $product) {
            
             $output.='<tr>'.
             
             '<td>'.$product->id.'</td>'.

             '<td>'.$product->username.'</td>'.
             
             '<td>'.$product->name.'</td>'.
             
             '<td>'.$product->email.'</td>'.
             
             '<td>'.$product->contactno.'</td>'.

             '<td>'.$product->gender.'</td>'.

             '<td>'.$product->usertype.'</td>'.

             '<td>'.$product->address.'</td>'.
             
             '</tr>';
         
            }
            return $output;  
 
         }
   
       }

    }

   public function empSalary(){
       
        return Http::get('http://127.0.0.1:3000/Mhome/empsalaryinfolist')->body();

    }

        public function customerlist()
    {
         return Http::get('http://localhost:3000/adminhome/userlist')->body();

    }

    public function empAddSalaryView($id){
       
        $employees=User::find($id); 
        return view('manager.empAddSalaryView',$employees);
    }


     public function empAddSalary($id, Request $req)
     {
       
                $user = new EmpSal();

                $user->username     = $req->username;
                $user->salary       = $req->salary;
                $user->date         = $req->date;

                $user->save();
                return redirect()->route('manager.emplist');
    }


    //CUSTOMER
    public function custlist(){

      $employees=User::where('usertype','customer')->get();
      return view('manager.custlist')->with('employees', $employees);
      /*$employees=User::all();
      return view('home.emplist')->with('employees', $employees);*/
    }


     public function custEdit($id){
       
     $employees=User::find($id);
     return view ('manager.custEdit',$employees);

    }


public function custUpdate($id, empRequest $req)
    {
      
   
              if($req->hasFile('myimg')){

                $file=$req->file('myimg');

              if($file->move('upload', $file->getClientOriginalName())){
               
                $user = User::find($id);

                $user->username     = $req->username;
                $user->name         = $req->name;
                $user->password     = $req->password;
                $user->email        = $req->email;
                $user->contactNo    = $req->contno;
                $user->gender       = $req->gender;
                $user->usertype     = $req->type;
                $user->address      = $req->address;
                $user->picture      = $file->getClientOriginalName();

                $user->save();
                
                return redirect()->route('manager.custlist');
                

            
      }
  }
}
    
     public function custDetails($id){
       
     $employees=User::find($id);
     return view ('manager.custDetails',$employees);      

    }

      public function custDestroyView($id){
       
     $employees=User::find($id);
     return view ('manager.custDelete',$employees);

    }

    public function custDestroy($id){
       
     $employees=User::find($id);
     $employees->delete();
     return redirect()->route('manager.custlist');
    }

}
