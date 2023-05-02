<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investigation;
use App\Models\CaseTable;
use Illuminate\Validation\Rule;


class InvestigationController extends Controller
{
    //Case Assignment form

     public function assignCase($case)
    {
        $caseID=$case;
       
       // This query will return only users/staff whose role is cid
        $users= User::where('role_id', 'cid')->get();
         return view('cases.assign',['users'=>$users, 'case'=>$caseID]);
   
    }

    public function store(Request $request)
    {   
        // This is where case is stored when assigned to CID
        
        $formFields = $request->validate([
            'case_table_id' => ['required', Rule::unique('investigations', 'case_table_id')],
            'user_id' => 'required',
            
        ]);

        $cidName=User::findOrFail($formFields['user_id'])->name;

        $formFields['cid_name']=$cidName;
       $assignedCID = Investigation::create($formFields);

       if( $assignedCID){
        return redirect('/cases')->with('success', 'The Case Assigned a CID!');
       }

       return back()->with('error', 'The Case has not being Assigned a CID! Try Again');   
    }

    public function create($case)
    {
        $case= CaseTable::with('investigation')->findOrFail($case);

        //If case has no being assgin yet
        if($case->investigation==null){

            return redirect('/cases')->with('error', 'The Case has not being Assigned a CID!');
             
        }

         return view('investigations.create',['case'=>$case]);
   
    }

    public function updateInvestigation(Request $request, Investigation $investigation)
    {   
        $formFields = $request->validate([
            'statement' => 'required',
            'status' => 'required',

            
        ]);

        $investigation->update($formFields);

        return back()->with('success', 'The Investigation Statement Updated Successfully');
    }

    public function show($id)
    {
       $case= CaseTable::with('investigation')->findOrFail($id);

         //If case has no being assgin yet
        if($case->investigation==null){

        return back()->with('error', 'The Case has not being Assigned a CID!');
             
        }

        return view('investigations.show',['case'=>$case]);

    }
}
