<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsFeeController extends Controller
{
    public function StudentsFee(){
       return view('Student Fee.addStudentFee');
    }
    public function StudentsFeeList(){
       return view('Student Fee.studentFeeList');
    }
    public function PendingFeeByClass(){
       return view('Student Fee.pendingFeeByClass');
    }
    public function PendingFeeBySibling(){
       return view('Student Fee.pendingFeeBySibling');
    }
}
