<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ParentsController extends Controller
{
    public function Parents(){
        $parents = DB::table('parents')
            ->join('users', 'parents.fk_u_id', '=', 'users.id')
            ->get();

       return view("Parents.addParents")->with(['parents'=>$parents]);
    }

    public function addParents(Request $request)
    {

        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $file = $request->file('image')->store('images/parents', 'public');

        $data['status'] = 14;
        $data['image'] = $file ?? null;


        $data = User::create($data);
        $fk_u_id = $data->id;

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

         $parent = parents::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'fk_u_id'=> $fk_u_id,
            'status'=> 0,
            'cnic'=>$request->cnic,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'phone_whatsapp'=>$request->phoneWhatsApp,
            'relationship'=>$request->relationship,
            'occupation'=>$request->occupation,
            'address'=>$request->address,
        ]);



        return back()->with(['status'=> 'successfully record has been added!']);

    }
}
