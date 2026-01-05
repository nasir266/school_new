<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFineController extends Controller
{
    public function addFine(){
       return view('Fine.addFine');
    }
    public function StudentsFine(){
       return view('Fine.studentsFine');
    }
    public function FineListByClass(){
       return view('Fine.fineListByClass');
    }
    public function FineListBySession(){
       return view('Fine.fineListBySession');
    }
}
