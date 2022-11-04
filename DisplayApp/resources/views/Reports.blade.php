@extends('NavBar')

@section('content')
<table border='1'>
    @foreach ($devices as $data)
    <tr>
        <td>{{$data['mac']['0']}}</td>
        @if($data['ipv4']==NULL)
            <td></td>
        @else    
            <td>{{$data['ipv4']['0']}}<</td>
        @endif
        <td>{{$data['lastSeen']}}<</td>
    </tr>
@endforeach
</table>
@stop