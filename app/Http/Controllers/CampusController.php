<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\school;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CampusController extends Controller
{

    public function campusIndex(){
        if(Auth::check()){
            if(Auth::user()->status == 11){
                return view('cIndex');
            }

        }
    }
    public function addCampus(){
        return view('Campus.addCampus');
    }
    public function campusList(){

        $campus = DB::table('users')
            ->join( 'campus', 'campus.fk_u_id', '=', 'users.id')
            ->get();
//        return $campus;
        $user = [];
        foreach($campus as $item){
            $user[] = User::where('id', $item->addedBy)->value('name');

        }

        return view('Campus.campusList')->with(['campus'=>$campus,'user'=>$user]);
    }

    public function addNewCampus(Request $request){
//        return $request;
        $validate = $request->validate([
            'cam_name'=>'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'confirmed'
            ],
        ]);
         $data = user::create([
            'name' => $validate['cam_name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
            'status' => 12,
        ]);
//        return $data->id;
        $addedBy = Auth::user()->id;
        $fk_scl_id = school::where('fk_u_id',$addedBy)->first()->id;

        $insert = campus::create([
            'campus_name'=> $request->cam_name ,
            'principal'=> $request->principal,
            'location'=> $request->location,
            'phone'=> $request->cam_phone,
            'fk_u_id'=> $data->id,
            'fk_scl_id'=> $fk_scl_id,
            'addedBy'=> $addedBy,
            'status'=> 0

        ]);

        if($insert){
            return redirect()->route('addCampus');
        }
    }
}
