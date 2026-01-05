<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function BarcodeAttendance(){
       return view('Attendance.barcodeAttendance');
    }
    public function TeacherAttendance(){
       return view('Attendance.teacherAttendance');
    }
    public function StudentAttendance(){
       return view('Attendance.studentAttendance');
    }
    public function AttendanceListBySection(){
       return view('Attendance.attendanceListBySection');
    }
}
