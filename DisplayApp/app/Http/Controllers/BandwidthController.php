<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BandwidthController extends Controller
{
    ///wm/statistics/bandwidth/<switchId>/<portId>/json

    public function getStats()
    {
    $stats = Http::get('127.0.0.1:8080/wm/statistics/bandwidth/00:00:00:e0:4c:36:0e:5b/2/json')->collect();

    return view('bandwidth',['stats'=>$stats]);
    }
}
