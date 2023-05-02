<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CaseStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function index()
    {
       $users=User::latest()->paginate(15);
            return view('users.index',['users'=>$users]);   
    }

    public function destroy(User $user)
    {
       
       $user->delete();
        return redirect('/users')->with('success', 'User deleted successfully');
    }

    public function edit(User $user)
    {
      return view('users.edit', ['user' => $user]);   
    }

     public function update(Request $request, User $user)
    {
        
        $formFields = $request->validate([
           'name' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            
        ]);

        $user->update($formFields);

        return redirect('/users')->with('success', 'User updated successfully');
    }

}


