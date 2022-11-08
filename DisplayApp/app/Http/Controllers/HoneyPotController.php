<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class HoneyPotController extends Controller
{
    //
    public function getDatas()
    {
        if(Auth::check()){
        $file = fopen("/var/log/psad/top_attackers","r");
        $datas = array();

        while(!feof($file)){
            $content = fgets($file);
            $carray = preg_split(' /\s+/ ', $content);
            array_push($datas,$carray);
        }
        array_shift($datas);
        array_shift($datas);
        array_shift($datas);
        array_shift($datas);
        array_pop($datas);

        return view('Honeypot',['datas'=>$datas]);
        }else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
