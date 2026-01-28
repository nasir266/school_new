<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\package;
use App\Models\school;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    public function addSchool()
    {
        return view('School.addSchool');
    }

    public function school_data(Request $request)
    {

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/schools'), $fileName);
            $data['image'] = $fileName;
        }

        $data['status'] = 10;

        $data['scl_number'] = $request->scl_number ?? null;


        $data = User::create($data);
        $fk_u_id = $data->id;
        $addedBy = Auth::id();

        // dd($datag ->id);

        school::create([
            'fk_u_id' => $fk_u_id,
            'slogn' => $request->slogan ?? null,
            'address' => $request->address,
            'owner_name' => $request->owner_name,
            'owner_email' => $request->owner_email,
            'owner_number' => $request->owner_number,
            'owner_tel' => $request->owner_tel ?? null,
            'prin_name' => $request->prin_name ?? null,
            'prin_email' => $request->prin_email ?? null,
            'prin_number' => $request->prin_number ?? null,
            'prin_tel' => $request->prin_tel ?? null,
            'land' => $request->landLine,
            'scl_tel' => $request->scl_tel ?? null,
            'joinDate' => date('Y-m-d', strtotime($request->joinDate)),
            'addedBy' => $addedBy,
            'status' => 10

        ]);


        return back();
    }


    public function allSchool()
    {
        // $user = DB::
        $data = DB::table('users')
            ->join('schools', 'users.id', '=', 'schools.fk_u_id')
            ->select(
                'users.*',
                'schools.*',
                'users.name as user_name',
            )
            ->get();


        return view('School.allSchool')->with('data', $data);
    }


    // ===== Activation classes ==================

    public function activeSchool()
    {
        $school = DB::table('users')
            ->join('schools', 'users.id', '=', 'schools.fk_u_id')
            ->select('users.*')
            ->get();

        return view('School.actionSchool')->with('school', $school);
    }

    public function addActiveSchool(Request $request)
    {

        $request->validate([
            'duration' => 'required',
            'package' => 'required'
        ]);

        package::create([
            'fk_sh_id' => $request->fk_sh_id,
            'duration' => $request->duration,
            'package' => $request->package,
            'addedBy' => Auth::user()->id
        ]);


        $user = User::find($request->fk_sh_id);
        $user->status = 11;
        $user->save();

        return back();
    }

    public function activeSchoolList()
    {
        $activeSchoolList = package::all();

        $user = [];
        $school = [];

        foreach ($activeSchoolList as $item) {
            $user[] = User::where('id', $item->addedBy)->value('name');
            $school[] = user::where('id', $item->fk_sh_id)->value('name');
        }

        return view('School.allSchoolActive', compact('activeSchoolList', 'user', 'school'));
    }


    // ===== School Index page ============

    // public function notRegister(){

    // return "<h1>Your Email and Password are not Registered! </h1> ";

    // }

    // public function notActivate(){

    // return "<h1>Your Email and Password are not Activated! </h1> ";

    // }


    public function schoolIndex()
    {
        if (Auth::check()) {
            if (Auth::user()->status == 12) {
                return view('sindex');
            }

        }
    }


}
