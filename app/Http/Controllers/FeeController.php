<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\feeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
