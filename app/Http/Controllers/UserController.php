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
}
