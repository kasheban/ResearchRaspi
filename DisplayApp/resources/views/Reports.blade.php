@extends('NavBar')

@section('content')
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuRPi</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/nav.css" type="text/css">
  <style>
  .center {
    margin: auto;
    width: 50%;
    border: 3px;
    padding: 100px;
  }
  .head{
    background-color: #044caa;
    color: white;
  }
  #myInput {

  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

  </style>
</head>
<body>
  <input type="text" class="center" id="myInput" onkeyup="myFunction()" placeholder="Search"  title="Search">

<div class="container align-self-center my-auto center" >
<table  class="table table-bordered " id="myTable">
   
  <thead class="head">
        <td>Mac</td>
        <td>ipv4</td>
        <td>ipv6</td>
        <td>Last Seen</td>
  </thead>
  @foreach ($devices as $data)
  <tbody class=" table table-striped">
    <tr>
        <td>{{$data['mac'][0]}}</td>
        @if ($data['ipv4']==NULL)
          <td></td>
        @else
            <td>{{$data['ipv4'][0]}}</td>
        @endif
        @if ($data['ipv6']==NULL)
          <td></td>
        @else
            <td>{{$data['ipv6'][0]}}</td>
        @endif
        <td>{{$data['lastSeen']}}</td>

    </tr>
  </tbody>
@endforeach
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
</html>
@stop