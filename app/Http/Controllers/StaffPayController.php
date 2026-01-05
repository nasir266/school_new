<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffPayController extends Controller
{
    public function AddStaffPay(){
       return view('Staff Pay.addStaffPay');
    }
    public function StaffPayList(){
       return view('Staff Pay.staffPayList');
    }
    public function SingleStaffList(){
       return view('Staff Pay.singleStaffList');
    }
}
