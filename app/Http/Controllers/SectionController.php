<?php

namespace App\Http\Controllers;

use App\Models\campus;
use Illuminate\Http\Request;
use App\Models\school;
use App\Models\User;
use App\Models\session;
use App\Models\myClass;
use App\Models\section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    public function section() {
        $class = myClass::all();
        $section = DB::table('section')
        ->join('class', 'section.fk_class_id', '=', 'class.id')
        ->get();

        return view('Section.addSection')->with(['class'=> $class , 'section'=>$section ]);
    }

    public function addSection(Request $request){
         $request->validate([
            'section'=>'required',
            'fk_class_id'=>'required',
        ]);

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        section::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'section'=> $request->section,
            'fk_class_id'=> $request->fk_class_id,
            'status'=> 0,
        ]);



        return back()->with('status', 'successfully record has been added!');
    }

    public function delete($id){
        // dd('helo');
        DB::table('section')->where('id', $id)->delete();

        return back();
    }
}
