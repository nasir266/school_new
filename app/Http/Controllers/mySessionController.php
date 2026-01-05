<?php

namespace App\Http\Controllers;

use App\Models\campus;
use Illuminate\Http\Request;
use App\Models\school;
use App\Models\User;
use App\Models\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class mySessionController extends Controller
{
    public function Session(){
        $session = session::all();
        return view('Session.addSession')->with(['session'=> $session]);
    }

    public function addSession(Request $request){
        $request->validate([
            'session'=>'required',
            'department'=>'required',
        ]);

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        session::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'session'=> $request->session,
            'department'=> $request->department,
            'status'=>0
        ]);



        return back()->with('status', 'successfully record has been added!');

    }

    public function delete($id){

        DB::table('session')->where('id', $id)->delete();

        return back();
    }

    public function edit($id){


      $record =   DB::table('session')->where('id', $id)->first();

        return view('Session.editAddSession')->with('record',$record);
    }

    public function editSession(Request $request , $id){

        DB::table('session')
        ->where('id',$id)
        ->update([
            'session'=>  $request->input('session'),
            'department'=>  $request->input('department'),
        ]);

        return redirect('session');

    }

}
