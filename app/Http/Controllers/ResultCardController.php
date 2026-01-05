<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultCardController extends Controller
{
    public function AddTerm(){
       return view('Result Card.addTerm');
    }
    public function AddResultCard(){
       return view('Result Card.addResultCard');
    }
    public function ReasultBySingleSubject(){
       return view('Result Card.resultBySingleSubject');
    }
    public function ReasultBySingleTerm(){
       return view('Result Card.resultBySingleTerm');
    }
    public function ReasultByAllTerm(){
       return view('Result Card.resultByAllTerm');
    }
    public function ReasultBySection(){
       return view('Result Card.resultBySection');
    }
}
