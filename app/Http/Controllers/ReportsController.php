<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function TodayReport(){
       return view('Report.todayReport');
    }
    public function ReportByDate(){
       return view('Report.reportByDate');
    }
}
