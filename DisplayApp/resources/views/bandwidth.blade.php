@extends('NavBar')

@section('content')
<table border='1'>
    @foreach ($stats as $data)
    <tr>
        <td>{{$data['bits-per-second-rx']}}</td>
        <td>{{$data['bits-per-second-tx']}}<</td>
        <td>{{$data['dpid']}}<</td>
        <td>{{$data['port']}}<</td>
        <td>{{$data['updated']}}<</td>
    </tr>
@endforeach
</table>
@stop