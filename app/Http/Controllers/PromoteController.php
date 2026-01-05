<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function PromoteStudent(){
       return view('Promote Student.promoteStudent');
    }
}
