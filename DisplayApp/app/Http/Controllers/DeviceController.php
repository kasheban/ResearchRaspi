<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    public function getDevices()
    {
    $devices = Http::get('127.0.0.1:8080/wm/device');

    return view('dashboard')->withDevices($devices);
    }
}
