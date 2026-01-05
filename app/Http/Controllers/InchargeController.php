<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InchargeController extends Controller
{
    public function Incharge(){
       return view('Incharge.addIncharge');
    }
}
