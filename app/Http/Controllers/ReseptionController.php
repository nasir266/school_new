<?php

namespace App\Http\Controllers;
use App\Models\campus;
use App\Models\myClass;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use Illuminate\Support\Facades\Auth;


class ReseptionController extends Controller
{
    public function ApplicationForm(){
        return view('Application Form.applicationForm');
    }
    public function store(Request $request)
    {

        $addedBy = Auth::user()->id;
        $campus = campus::where('fk_u_id', $addedBy)->first();
        $fk_campus_id = $campus->id;
        $fk_scl_id = $campus->fk_scl_id;

//dd($fk_campus_id);

        ApplicationForm::create([
            'fk_campus_id' => $fk_campus_id,
            'fk_scl_id' => $fk_scl_id,
            'addedBy'=> $addedBy,
            'status' => 0,
            'name'      => $request->name,
            'contact'   => $request->contact,
            'address'   => $request->address,
            'reference' => $request->reference,
            'purpose'   => $request->purpose,
        ]);

        return redirect()->back()->with('success', 'Data Inserted Successfully');
    }
    public function list_ApplicationForm()
    {
        $applications = ApplicationForm::all(); // data fetch

        return view('Application Form.list_applicationForm', compact('applications'));
    }
    public function edit($id)
    {
        $application = ApplicationForm::findOrFail($id);


        return view('Application Form.edit_list', compact('application'));
    }
    public function update(Request $request, $id)
    {
        $application = ApplicationForm::findOrFail($id);

        $application->update([
            'name'      => $request->name,
            'contact'   => $request->contact,
            'address'   => $request->address,
            'reference' => $request->reference,
            'purpose'   => $request->purpose,
        ]);

        return redirect()->route('list_ApplicationForm')
            ->with('success', 'Application updated successfully');
    }


}
