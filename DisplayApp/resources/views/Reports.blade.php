@extends('NavBar')

@section('content')
<table border='1'>
    @foreach ($devices as $data)
    <tr>
        <td>{{$data['mac']}}</td>
        <td>{{$data['ipv4']}}<</td>
        <td>{{$data['ipv6']}}<</td>
        <td>{{$data['lastseen']}}<</td>
    </tr>
@endforeach
</table>
@stop