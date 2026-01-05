<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function admin(){
        if(Auth::check()){
            return view('index');
        }else{
            return redirect()->route('login');
        }
        
    }

}
