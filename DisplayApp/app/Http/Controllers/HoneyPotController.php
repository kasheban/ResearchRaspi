<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoneyPotController extends Controller
{
    //
    public function getDatas()
    {
        $file = fopen("C:/Users/PC/Desktop/test_data.txt","r");
        $datas = array();

        while(!feof($file)){
            $content = fgets($file);
            $carray = explode(" ", $content);
            array_push($datas,$carray);
        }


        return view('Honeypot',['datas'=>$datas]);
    }
}
