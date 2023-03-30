<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
      if(Auth::user()->hasRole('admin')){
        return view('admin.dashboard');
      }
      elseif (Auth::user()->hasRole('cid')) {
            return view('cid.dashboard');
        } 
        elseif(Auth::user()->hasRole('nco')){

            return view('nco.dashboard');
        } 
    }
}
