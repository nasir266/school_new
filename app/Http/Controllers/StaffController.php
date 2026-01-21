<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\staff;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function staff(){

        $staff = DB::table('staff')
            ->join('users', 'staff.fk_u_id', '=', 'users.id')
            ->get();
        return view('Staff.addStaff')->with('staff',$staff);
    }

    public function addStaff(Request $request)
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
            $file = $request->file('image')->store('images/staff', 'public');
            $data['image'] = $file;
        } else {
            // Use default image
            $data['image'] = 'images/staff/zGJdPsLgY6EhXHj6bxPb8EKXQcOUonzYVihGy5jj.png';
        }
        $data['status'] = 18;
        // $data['image'] = $file ?? null;


        $data = User::create($data);
        $fk_u_id = $data->id;

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

        staff::create([
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
            'user_type'=>$request->user_type,
            'salary'=>$request->salary,
            'designation'=>$request->designation,
            'address'=>$request->address,
        ]);



        return back()->with(['status'=> 'successfully record has been added!']);

    }
}
