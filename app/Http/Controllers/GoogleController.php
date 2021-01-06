<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\User;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {   
        $user = Socialite::driver('google')->user();
    
        $finduser = User::where('google_id', $user->id)->first();

        if($finduser){
            session()->put('user', $finduser);
        } else{
            $newUser = new User();
            $newUser->username = '';
            $newUser->password = '';
            $newUser->name = $user->name;
            $newUser->cell = '';
            $newUser->type = '';
            $newUser->google_id = $user->id;
            
            $newUser->save();

            session()->put('user', $newUser);
        }
        
        return redirect()->route('employees.index');
    }
}