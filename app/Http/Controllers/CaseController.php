<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\CaseTable;
use Illuminate\Http\Request;
use App\Http\Requests\CaseStoreRequest;
use App\Http\Requests\CaseTableUpdateRequest;
use App\Models\User;

use Illuminate\Support\Facades\Auth;



class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole(['admin','nco'])){
        $cases=CaseTable::latest()->with(['category','investigation','user'])->paginate(15);
            return view('cases.index',['cases'=>$cases]);
        } elseif (Auth::user()->hasRole('cid')) {
           
           $cases=CaseTable:: latest()->whereHas('investigation', function($query){
            $query->where('user_id',  Auth::user()->id);
           })->paginate(15);
           
           return view('cases.index',['cases'=>$cases]);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
         return view('cases.create',['categories'=>$categories]);
   
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaseStoreRequest $request)
    {

        ///dd($request->complainant_name);
        $userId=Auth::user()->id;
        $case = CaseTable::create(
            [
            'user_id' => $userId,
            'complainant_name' => $request->complainant_name,
            'complainant_tel' => $request->complainant_tel,
            'complainant_age' => $request->complainant_age,
            'complainant_occupation' => $request->complainant_occupation,
            'complainant_gender' => $request->complainant_gender,
            'region' => $request->region,
            'district' => $request->district,
            'location' => $request->location,
            'diary_of_action' => $request->diary_of_action,
            'address' => $request->address,
            'category_id' => $request->category_id,
            'dig_address' => $request->dig_address,
            'email' => $request->email,
            ]);

        return redirect('/cases')->with('success', 'Case created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case=CaseTable::findOrFail($id);
        return view('cases.show',['case'=>$case]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $case=CaseTable::findOrFail($id);
      
      $categories= Category:: all();
      return view('cases.edit',['case'=>$case,'categories'=>$categories]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CaseTableUpdateRequest $request, CaseTable $case)
    {
        $formFields = 
            [
            'complainant_name' => $request->complainant_name,
            'complainant_tel' => $request->complainant_tel,
            'complainant_age' => $request->complainant_age,
            'complainant_occupation' => $request->complainant_occupation,
            'complainant_gender' => $request->complainant_gender,
            'region' => $request->region,
            'district' => $request->district,
            'location' => $request->location,
            'diary_of_action' => $request->diary_of_action,
            'address' => $request->address,
            'dig_address' => $request->dig_address,
            'email' => $request->email,
            'category_id' => $request->category_id,
            ];

        $case->update($formFields);
        return redirect('/cases')->with('success', 'Case updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseTable $case)
    {

       $case->delete();

        return redirect('/cases')->with('success', 'Case deleted successfully');
    }
//Case Assignment form

     public function assignCase($case)
    {
        $caseID=$case;
        //dd($caseID);
        $users= User::all();
         return view('cases.assign',['users'=>$users, $caseID=>$caseID]);
   
    }

}
