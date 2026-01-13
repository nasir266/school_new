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
// depart to classes
    public function getClasses($deptId)
    {
        $classes = DB::table('class')
            ->where('department', $deptId)
            ->orderBy('id', 'ASC')
            ->get();

        return response()->json($classes);
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
