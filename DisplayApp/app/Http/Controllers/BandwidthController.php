<?php

namespace App\Http\Controllers;
use App\Charts\Bandwidth;
use App\Models\log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BandwidthController extends Controller
{
    ///wm/statistics/bandwidth/<switchId>/<portId>/json



    public function viewData(){

        if(Auth::check()){
            $stats = Http::get('127.0.0.1:8080/wm/statistics/bandwidth/00:00:00:e0:4c:36:0e:44/1/json')->collect();

            $log = new log;
        
            $log->dpid=$stats[2]['dpid'];
            $log->bandwidth_rx=$stats[2]['bits-per-second-rx'];
            $log->bandwidth_tx=$stats[2]['bits-per-second-tx'];
            $log->save();
                

        $titles = DB::table('logs')->pluck('bandwidth_rx');
        $data = collect([]);
        foreach ($titles as $title) {
            $data->push($title);
        }
        $create = DB::table('logs')->pluck('created_at');
        $date = collect([]);
        foreach ($create as $creates) {
            $date->push($creates);
        }
        // foreach ($bandwidth as $bd){
        //     $data->push($bd['bandwidthRx']);
        // }
        $tx = DB::table('logs')->pluck('bandwidth_tx');
        $datum = collect([]);
        foreach ($tx as $txs) {
            $datum->push($txs);
        }

        $chart = new Bandwidth;
        $chart->labels($date);
        $chart->dataset('Download Speed', 'line', $data);

        $charts = new Bandwidth;
        $charts->labels($date);
        $charts->dataset('Upload Speed', 'line', $datum);
        return view('Dashboard', compact('chart','charts'));
         }else{
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
