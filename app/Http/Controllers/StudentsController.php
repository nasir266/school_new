<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function Students(){
       return view('Students.addStudents');
    }
    public function SelectClass(){
       return view('Students.listByClass');
    }
    public function SelectSession(){
       return view('Students.listBySession');
    }
}
