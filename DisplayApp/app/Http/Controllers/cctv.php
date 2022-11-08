<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\pc;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use App\Models\User;

class cctv extends Controller
{
    public function show(){  
        if(Auth::check()){
            return view('cctv');
        }else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
