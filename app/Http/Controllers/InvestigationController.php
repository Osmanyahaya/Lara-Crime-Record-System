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
        $formFields = $request->validate([
            'case_table_id' => ['required', Rule::unique('investigations', 'case_table_id')],
            'user_id' => 'required',
            
        ]);

        $cidName=User::findOrFail($formFields['user_id'])->name;

        $formFields['cid_name']=$cidName;
        Investigation::create($formFields);
    }

    public function create($case)
    {
        $case= CaseTable::with('investigation')->findOrFail($case);
       
        
         return view('investigations.create',['case'=>$case]);
   
    }

    public function updateInvestigation(Request $request, Investigation $investigation)
    {   
        $formFields = $request->validate([
            'statement' => 'required',
            'status' => 'required',

            
        ]);
       


        $investigation->update($formFields);
    }

    public function show($id)
    {
        $case=CaseTable::findOrFail($id);
        return view('investigations.show',['case'=>$case]);

    }
}
