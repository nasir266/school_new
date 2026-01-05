<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function sAdmin(){
        if(Auth::check()){
            return view('superAdmin');
        }else{
            return redirect()->route('login');
        }
    }
}
