<?php

namespace App\Http\Controllers;


use App\Models\campus;
use App\Models\studentFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentsFeeController extends Controller
{
    public function StudentsFee(){

        $students = DB::table("students")
            ->join('users', 'students.fk_u_id', '=', 'users.id')
            ->join('parents', 'students.fk_parent_id', '=', 'parents.id')
            ->join('users as parUsers', 'parents.fk_u_id', '=', 'parUsers.id')
            ->join('class', 'students.fk_class_id', '=', 'class.id')
            ->select(
                'students.*',
                'users.name as student_name',
                'users.email as student_email',
                'parUsers.name as parent_name',
                'class.className'
            )
            ->get();

       return view('Student Fee.addStudentFee')->with('students', $students);
    }

    public function addStudentsFee(Request $request){

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        studentFee::create([
            'addedBy' => $addedBy,
            'fk_scl_id' => $fk_scl_id,
            'fk_campus_id' => $fk_campus_id,
            'fk_student_id'=>$request->student_id,
            'fee'=>$request->fee,
            'payDate'=>$request->pDate,
            'receiptNo'=>$request->receiptNo,
            'status'=>0
        ]);


        return back()->with(['status'=> 'successfully record has been added!']);
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
