<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\classFee;
use Illuminate\Http\Request;
use App\Models\school;
use App\Models\User;
use App\Models\session;
use App\Models\myClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function Class(){
        $class = myClass::all();
        return view('Class.addClass')->with(['class'=> $class]);
    }

    public function addClass(Request $request){
         $request->validate([
            'class'=>'required',
            'department'=>'required',
        ]);

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        myClass::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'className'=> $request->class,
            'fee'=> $request->fee,
            'fee_type'=> $request->fee_type?? null,
            'department'=> $request->department,
            'status'=> 0,
        ]);



        return back()->with('status', 'successfully record has been added!');
    }

    public function delete($id){

        DB::table('class')->where('id', $id)->delete();

        return back();
    }

    public function edit($id){

      $record =   DB::table('class')->where('id', $id)->first();
//        return $record;
        classFee::create([
            'fk_campus_id' => $record->fk_campus_id,
            'fk_scl_id' => $record->fk_scl_id,
            'addedBy'=> $record->addedBy,
            'fee'=> $record->fee,
            'fk_class_id'=> $record->id,
            'status'=> 0,
        ]);
        return view('Class.editAddClass')->with('record',$record);

    }

    public function editClass(Request $request , $id){

        DB::table('class')
        ->where('id',$id)
        ->update([
            'className'=>  $request->input('class'),
            'fee'=>  $request->input('fee'),
            'department'=>  $request->input('department'),
        ]);

        return redirect()->route('class');

    }
}
