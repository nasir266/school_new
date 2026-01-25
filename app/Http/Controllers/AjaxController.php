<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
  //  class to class fee
    public function getClassFee($id)
    {
        $class = DB::table('class')->where('id', $id)->first();

        return response()->json([
            'fee' => $class->fee
        ]);
    }
// depart to sessions
    public function getSessions($deptId)
    {
        $sessions = DB::table('session')
            ->where('department', $deptId)
            ->orderBy('id', 'DESC')
            ->get();

        return response()->json($sessions);
    }


    public function getClasses(Request $request)
    {
        $department = $request->department;
//        $sub_dep    = $request->sub_dep;
//        $semester   = $request->semester;

        $classes = DB::table('class')
            ->where('department', $department)
            ->orderBy('id', 'ASC')
            ->get();


        return response()->json($classes);
    }
    public function getClass(Request $request)
    {
        $department = $request->department;
        $sub_dep    = $request->sub_dep;
        $semester   = $request->semester;

        $query = DB::table('class')
            ->where('department', $department)
            ->where('sub_dep', $sub_dep);

        if ($semester) {    // only add this condition if semester is not empty
            $query->where('semester', $semester);
        }

        $class = $query->orderBy('id', 'ASC')->get();

        return response()->json($class);
    }
// classes to sections
    public function getSections($classId)
    {
        $sections = DB::table('section')
            ->where('fk_class_id', $classId)
            ->orderBy('id', 'ASC')
            ->get();

        return response()->json($sections);
    }

}
