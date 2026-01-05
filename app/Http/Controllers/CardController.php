<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function StudentCardByClass(){
       return view('Card.studentCardByClass');
    }
    public function SingleStudentCard(){
       return view('Card.singleStudentCard');
    }
    public function AllStaffCard(){
       return view('Card.allStaffCard');
    }
    public function SingleStaffCard(){
       return view('Card.singleStaffCard');
    }
}
