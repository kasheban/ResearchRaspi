@extends('NavBar')

@section('content')
<table>
    @foreach ($devices as $data)
    <li>
        <ul>{{$data->mac}}</ul>
        <ul>{{$data->ipv4}}<</ul>
    </li>
@endforeach
</table>
@stop