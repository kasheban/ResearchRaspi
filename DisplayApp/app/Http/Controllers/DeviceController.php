<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\pc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    //
    public function getDevices()
    {
        $devices = Http::get('127.0.0.1:8080/wm/device/')->collect();
       

        
        foreach($devices as $device){
            if($device['ipv4']!=NULL){
                $pc= pc::updateOrCreate(
                    ['mac'=>$device['mac'][0]],['ipv4'=>$device['ipv4'][0]],
                );
            }else{
                $pc= pc::updateOrCreate(
                    ['mac'=>$device['mac'][0]],
                );
            }
        }
        return view('Reports',['devices'=>$devices]);
    }

}

