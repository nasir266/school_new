<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\parents;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    public function Teachers(){

        $teachers = DB::table('teachers')
            ->join('users', 'teachers.fk_u_id', '=', 'users.id')
            ->get();
//        return $teachers;
       return view('Teachers.addTeachers')->with('teachers', $teachers);
    }

    public function addTeachers(Request $request)
    {

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // $file = $request->file('image')->store('images/parents', 'public');
        // If user uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images/teachers', 'public');
            $data['image'] = $file;
        } else {
            // Use default image
            $data['image'] = 'images/teachers/zGJdPsLgY6EhXHj6bxPb8EKXQcOUonzYVihGy5jj.png';
        }
        $data['status'] = 17;
        // $data['image'] = $file ?? null;


        $data = User::create($data);
        $fk_u_id = $data->id;

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

         teacher::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'fk_u_id'=> $fk_u_id,
            'status'=> 0,
            'cnic'=>$request->cnic,
            'phone'=>$request->phone,
            'date_of_birth'=>$request->DOB,
            'last_degree'=>$request->l_degree,
            'join_date'=>$request->j_date,
            'salary'=>$request->salary,
            'subject'=>$request->subject,
            'address'=>$request->address,
        ]);



        return back()->with(['success'=> 'successfully record has been added!']);

    }
}
