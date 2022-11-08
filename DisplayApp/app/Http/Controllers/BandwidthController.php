<?php

namespace App\Http\Controllers;
use App\Charts\Bandwidth;
use App\Models\log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class BandwidthController extends Controller
{
    ///wm/statistics/bandwidth/<switchId>/<portId>/json

    public function getStats()
    {
    $stats = Http::get('127.0.0.1:8080/wm/statistics/bandwidth/00:00:00:e0:4c:36:0e:5b/2/json')->collect();

    $log = new log;

    $log->dpid=$stats[2]['dpid'];
    $log->dpid=$stats[2]['bandwidth-rx'];
    $log->dpid=$stats[2]['bandwidth-tx'];
    $log->save();
        
    if($log->save()){
        return response()->json(['status'=>1,'msg'=>'New Data has been added']);
    }

    }

    public function viewData(){

        $titles = DB::table('logs')->pluck('BandwidthRx');
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
        $tx = DB::table('logs')->pluck('BandwidthTx');
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
    }
}
