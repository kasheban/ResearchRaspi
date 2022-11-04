<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeviceController extends Controller
{
    //
    public function getDevices()
    {
        $devices = Http::get('127.0.0.1:8080/wm/device/')->collect();

        return view('Reports',['devices'=>$devices]);
    }
}
