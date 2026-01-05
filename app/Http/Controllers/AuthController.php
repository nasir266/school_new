<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
use App\Models\User;

class AuthController extends Controller
{

     public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required'
        ]);

        $data['status'] = 10;
         $data['image']= null;
         $data['scl_number']= null;



        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }


    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);



        if(Auth::attempt($credentials)){
           if(Auth::user()->status == 2){
                return redirect()->intended(route('sAdmin'));

           }elseif(Auth::user()->status == 10){
               return back()->with('notActivate', 'Your Email and Password are not Activated! ');

           }elseif(Auth::user()->status == 11){
               return redirect()->intended(route('cIndex'));

           }elseif(Auth::user()->status == 12) {
               return redirect()->intended(route('sindex'));
           }
           else {
               return back()->with('notRegister', 'Your Email and Password are not Registered!');
           }
        }

        return redirect(route('login'))->with('error','Invalid Email and Passowrd');


    }

    public function logout(){

        Auth::logout();
        return redirect(route('login'));
    }

}
