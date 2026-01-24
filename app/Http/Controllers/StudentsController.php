<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\classFee;
use App\Models\feeType;
use App\Models\myClass;
use App\Models\session;
use App\Models\parents;
use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function Students(){
        $feeType = feeType::all();
        $session = session::all();
        $class = myClass::all();
        $parents = DB::table('parents')
            ->join('users', 'parents.fk_u_id', '=', 'users.id')
            ->select(
                'parents.id as p_id',
                'parents.*',
                'users.*'
            )
            ->get();
        $students = DB::table('students')
            ->join('users AS student_user', 'students.fk_u_id', '=', 'student_user.id')
            ->join('class', 'students.fk_class_id', '=', 'class.id')
            ->join('session', 'students.fk_session_id', '=', 'session.id')
            ->join('section', 'students.fk_sec_id', '=', 'section.id')
            ->join('parents', 'students.fk_parent_id', '=', 'parents.id')
            ->join('users AS parent_user', 'parents.fk_u_id', '=', 'parent_user.id') // <--- important
            ->select(
                'student_user.*',
                'students.*',
                'class.className',
                'session.session',
                'section.section',
//                'student_user.name AS student_name.',
                'parent_user.name AS parent_name'
            )
            ->get();
        $feeArray = [];
        foreach ($students as $student) {

            $ids = explode('#', $student->fee_type_id);
            $values = explode('#', $student->fee_type_value);

            $types = DB::table('fee_type')
                ->whereIn('id', $ids)
                ->pluck('fee_type', 'id');

            $singleStudentFees = [];

            // build array ➜ ['Admission Fee' => 2000, 'Computer Fee' => 3000]
            foreach ($ids as $i => $id) {
                $typeName = $types[$id];
                $singleStudentFees[$typeName] = $values[$i];
            }

            // push into main array
            $feeArray[] = $singleStudentFees;

        }


       return view('Students.addStudents')->with(['parents' => $parents, 'feeType' => $feeType, 'session' => $session, 'class' => $class, 'students' => $students , 'fees'=>$feeArray]);
    }

    public function addStudents(Request $request){
        $fields = $request->parent;   // This is an array
//
//        $joinedValues = implode('#', $request->feeType);
//        $joinedValuesid = implode('#', $request->feeTypeId);

//        dd($joinedValues, $joinedValuesid);
//        dd($fields);

            $data = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);


            // If user uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images/students', 'public');
            $data['image'] = $file;
        } else {
            // Use default image
            $data['image'] = 'images/students/AbznCHQHkQFdlWabExWoIAJX4OZmaprSPwWwltBw.png';
        }
            $data['status'] = 15;


            $data = User::create($data);
            $fk_u_id = $data->id;

            $addedBy = Auth::user()->id;
            $campus = campus::where('fk_u_id', $addedBy)->first();
            $fk_campus_id = $campus->id;
            $fk_scl_id = $campus->fk_scl_id;

            $student = student::create([
                'fk_campus_id' => $fk_campus_id,
                'fk_scl_id' => $fk_scl_id,
                'addedBy'=> $addedBy,
                'fk_u_id'=> $fk_u_id,
                'status'=> 0,
                'fk_parent_id'=>$request->parent,
                'religion'=>$request->religion,
                'phone'=>$request->phone,
                'phone2'=>$request->phone2,
                'cnic'=>$request->cnic,
                'date_of_birth'=>$request->DOB,
                'gender'=>$request->gender,
                'join_date'=>$request->j_date,
                'referance'=>$request->referance,
                'department'=>$request->department,
                'fk_session_id'=>$request->session,
                'fk_class_id'=>$request->class,
                'fk_sec_id'=>$request->section,
                'classFee'=>$request->class_fee,
                'discount'=>$request->cls_fee_dsc,
                'fee_start_date'=>$request->fee_start_date,
                't_fee'=>$request->t_fee,
                'fee_type_id'=>implode('#', $request->feeTypeId),
                'fee_type_value'=>implode('#', $request->feeType),
                'prev_class'=>$request->prev_class,
                'passing_year'=>$request->pass_year,
                'total_marks'=>$request->t_mark,
                'obtn_marks'=>$request->o_mark,
                'school_board'=>$request->board,
                'address'=>$request->address,
            ]);




        return back()->with(['status'=> 'successfully record has been added!','student'=>$student]);

        }


    public function SelectClass(){
        $classes = myClass::all();
        return view('Students.listByClass', compact('classes'));
    }
    public function ShowStudentsByClass(Request $request){
        $class_id = $request->department; // blade me select name="department"

        $students = DB::table('students')
            ->join('users AS student_user', 'students.fk_u_id', '=', 'student_user.id')
            ->join('class', 'students.fk_class_id', '=', 'class.id')
            ->join('session', 'students.fk_session_id', '=', 'session.id')
            ->join('section', 'students.fk_sec_id', '=', 'section.id')
            ->join('parents', 'students.fk_parent_id', '=', 'parents.id')
            ->join('users AS parent_user', 'parents.fk_u_id', '=', 'parent_user.id')
            ->select(
                'student_user.name AS student_name',
                'student_user.email',
                'student_user.image AS student_image', // <--- alias for image
                'students.phone',
                'students.phone2',
                'students.religion',
                'students.cnic',
                'students.date_of_birth',
                'students.gender',
                'students.join_date',
                'students.referance',
                'students.department',
                'students.classFee',
                'students.discount',
                'students.t_fee',
                'students.fee_start_date',
                'students.prev_class',
                'students.passing_year',
                'students.total_marks',
                'students.obtn_marks',
                'students.school_board',
                'students.address',
                'class.className',
                'session.session',
                'section.section',
                'parent_user.name AS parent_name'
            )
            ->where('students.fk_class_id', $class_id)
            ->get();

        // Fee array logic agar required ho
        $feeArray = [];
        foreach ($students as $student) {
            $ids = explode('#', $student->fee_type_id ?? '');
            $values = explode('#', $student->fee_type_value ?? '');

            $types = DB::table('fee_type')
                ->whereIn('id', $ids)
                ->pluck('fee_type','id');

            $singleStudentFees = [];
            foreach($ids as $i => $id){
                $typeName = $types[$id] ?? null;
                if($typeName){
                    $singleStudentFees[$typeName] = $values[$i] ?? 0;
                }
            }

            $feeArray[] = $singleStudentFees;
        }

        return view('Students.studentsListByClass', [
            'students' => $students,
            'fees' => $feeArray
        ]);
    }


    public function SelectSession(){
        $classes = myClass::all();
        $sessions = session::all();

        return view('Students.listBySession', compact('classes', 'sessions'));
    }
    public function ShowStudentsBySession(Request $request)
    {
        // Form me select names: class_id aur session_id
        $class_id   = $request->class_id;
        $session_id = $request->session_id;

        $students = DB::table('students')
            ->join('users AS student_user', 'students.fk_u_id', '=', 'student_user.id')
            ->join('class', 'students.fk_class_id', '=', 'class.id')
            ->join('session', 'students.fk_session_id', '=', 'session.id')
            ->join('section', 'students.fk_sec_id', '=', 'section.id')
            ->join('parents', 'students.fk_parent_id', '=', 'parents.id')
            ->join('users AS parent_user', 'parents.fk_u_id', '=', 'parent_user.id')
            ->select(
                'student_user.name AS student_name',
                'student_user.email',
                'student_user.image AS student_image',

                'students.phone',
                'students.phone2',
                'students.religion',
                'students.cnic',
                'students.date_of_birth',
                'students.gender',
                'students.join_date',
                'students.referance',
                'students.department',
                'students.classFee',
                'students.discount',
                'students.t_fee',
                'students.fee_start_date',
                'students.prev_class',
                'students.passing_year',
                'students.total_marks',
                'students.obtn_marks',
                'students.school_board',
                'students.address',

                // For fee array
                'students.fee_type_id',
                'students.fee_type_value',

                'class.className',
                'session.session',
                'section.section',
                'parent_user.name AS parent_name'
            )
            ->where('students.fk_session_id', $session_id)
            ->when($class_id, function ($query) use ($class_id) {
                $query->where('students.fk_class_id', $class_id);
            })

            ->get();

        // ===== Fee Array logic =====
        $feeArray = [];

        foreach ($students as $student) {

            $ids    = explode('#', $student->fee_type_id ?? '');
            $values = explode('#', $student->fee_type_value ?? '');

            $types = DB::table('fee_type')
                ->whereIn('id', $ids)
                ->pluck('fee_type', 'id');

            $singleStudentFees = [];

            foreach ($ids as $i => $id) {
                if (isset($types[$id])) {
                    $singleStudentFees[$types[$id]] = $values[$i] ?? 0;
                }
            }

            $feeArray[] = $singleStudentFees;
        }

        // 👇 SAME VIEW reuse kar rahe hain jaise List by Class

        return view('Students.studentsListBySession',[
            'students' => $students,
            'feeArray' => $feeArray
        ]);
    }
    public function SelectSection(Request $request) {
        $classes = myClass::all();

        // Agar form submit ho gaya hai aur class select ki gayi hai
        $sections = DB::table('section')
            ->when($request->class_id, function($q) use ($request){
                $q->where('fk_class_id', $request->class_id);
            })
            ->get();

        return view('Students.listBySection', compact('classes','sections'));
    }

    public function ShowStudentsBySection(Request $request) {
        $class_id   = $request->class_id;
        $section_id = $request->section_id;

        $students = DB::table('students')
            ->join('users AS student_user', 'students.fk_u_id', '=', 'student_user.id')
            ->join('class', 'students.fk_class_id', '=', 'class.id')
            ->join('section', 'students.fk_sec_id', '=', 'section.id')
            ->join('parents', 'students.fk_parent_id', '=', 'parents.id')
            ->join('users AS parent_user', 'parents.fk_u_id', '=', 'parent_user.id')
            ->select(
                'student_user.name AS student_name',
                'student_user.email',
                'student_user.image AS student_image',
                'students.*',
                'class.className',
                'section.section',
                'parent_user.name AS parent_name'
            )
            ->where('students.fk_class_id', $class_id)
            ->where('students.fk_sec_id', $section_id)
            ->get();

        // Fee array same as before
        $feeArray = [];
        foreach ($students as $student) {
            $ids = explode('#', $student->fee_type_id ?? '');
            $values = explode('#', $student->fee_type_value ?? '');

            $types = DB::table('fee_type')
                ->whereIn('id', $ids)
                ->pluck('fee_type','id');

            $singleStudentFees = [];
            foreach($ids as $i => $id){
                if(isset($types[$id])){
                    $singleStudentFees[$types[$id]] = $values[$i] ?? 0;
                }
            }

            $feeArray[] = $singleStudentFees;
        }

        return view('Students.studentListBySection', [ // same view reuse kar rahe
            'students' => $students,
            'feeArray' => $feeArray
        ]);
    }


    public function getSections($class_id)
    {
        $sections = DB::table('section') // ✅ singular
        ->where('fk_class_id', $class_id) // ✅ correct FK
        ->get();

        return response()->json($sections);
    }


}
