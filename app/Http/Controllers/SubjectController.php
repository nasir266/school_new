<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\parents;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function Subject(){

//        $subjects = DB::table('subjects')
//            ->join('session', 'subjects.fk_session_id', '=', 'session.id')
//            ->join('class', 'subjects.fk_class_id', '=', 'class.id')
//            ->select(
//                'subjects.*',
//                'session.session',
//                'class.className',
//            )->get();

       return view('Subject.addSubject');
    }

    public function addSubject(Request $request)
    {


        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;


        foreach ($request->subjects as $subject) {

            subject::create([
                'fk_campus_id' => $fk_campus_id,
                'fk_scl_id' => $fk_scl_id,
                'addedBy' => $addedBy,
                'status' => 0,
                'department' => $request->department,
                'sub_dep' => $request->sub_dep ?? null,
                'semester' => $request->semester ?? null,
                'fk_session_id' => $request->session1,
                'fk_class_id' => $request->class,
                'subject' => $subject,
            ]);
        }


        return back()->with(['status'=> 'successfully record has been added!']);

    }

    public function allSubject()
    {
        $subjects = DB::table('subjects')
            ->join('session', 'subjects.fk_session_id', '=', 'session.id')
            ->join('class', 'subjects.fk_class_id', '=', 'class.id')
            ->select(
                'subjects.*',
                'session.session',
                'class.className',
            )->get();

        return view('Subject.allSubject')->with('subjects', $subjects);
    }
}
