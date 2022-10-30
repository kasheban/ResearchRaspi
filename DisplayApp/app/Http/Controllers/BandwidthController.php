<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandwidthController extends Controller
{
    ///wm/statistics/bandwidth/<switchId>/<portId>/json

    public function getStats()
    {
   // $stats = Http::get('127.0.0.1:8080/wm/statistics/bandwidth/<switchId>/<portId>/json');

    return view('bandwidth',['stats'=>$stats]);
    }
}
