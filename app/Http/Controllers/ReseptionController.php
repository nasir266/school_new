<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseptionController extends Controller
{
    public function ApplicationForm(){
        return view('Application Form.applicationForm');
    }
}
