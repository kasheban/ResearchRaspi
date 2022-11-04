@extends('NavBar')

@section('content')

    <table border='1' style="padding:100px;margin:100px">
    <tr>
        <td>IP Address</td>
        <td>DL</td>
        <td>Total_Packets</td>
        <td>Uniq_Sigs</td>
        <td>Sig_Matches</td>
        <td>Is_Local</td>
    </tr>
    @foreach($datas as $data)
    <tr>
        <td>{{$data[0]}}</td>
        <td>{{$data[1]}}</td>
        <td>{{$data[2]}}</td>
        <td>{{$data[3]}}</td>
        <td>{{$data[4]}}</td>
        <td>{{$data[5]}}</td>
    </tr>
    @endforeach
</table>

@stop