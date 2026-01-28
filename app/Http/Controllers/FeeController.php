<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\feeType;
use App\Models\otherFee;
use App\Models\studentFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    public function Fee(){
       return view('Fee.addFee');
    }

    public function feeType(Request $request){
        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        feeType::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'status'=> 0,
            'fee_type'=>$request->fee_type,
            'stu_enrol'=>$request->has('stu_enrol') ? 1 : 0
        ]);

        return back();
    }

    public function otherFee(Request $request){

        $feeType = $request->fee_type;

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

        return view('Fee.otherFee')->with(['students'=> $students, 'feeType' => $feeType]);
    }

    public function addOtherFee(Request $request){

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        otherFee::create([
            'addedBy' => $addedBy,
            'fk_scl_id' => $fk_scl_id,
            'fk_campus_id' => $fk_campus_id,
            'fee_type'=>$request->fee_type,
            'fk_student_id'=>$request->student_id,
            'fee'=>$request->fee,
            'payDate'=>$request->pDate,
            'receiptNo'=>$request->receiptNo,
            'status'=>0
        ]);
        return back()->with('success', 'Fee added successfully');
    }
}
