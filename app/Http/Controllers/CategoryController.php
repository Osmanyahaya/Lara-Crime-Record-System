<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
           
           return view('categories.index',['categories'=>$categories]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       
         return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $cat)
    {
          $formFields = $request->validate([
           'description' => ['required', 'string', 'max:255'], 
        ]);

        Category::create($formFields);

        return redirect('/categories')->with('success', 'Category saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         return view('categories.edit', ['cat' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
       $formFields = $request->validate([
           'description' => ['required', 'string', 'max:255'], 
        ]);

       $category->update($formFields);

        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       $category->delete();
        return redirect('/categories')->with('success', 'Category deleted successfully');
    }
}
