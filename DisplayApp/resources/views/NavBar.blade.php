<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuRPi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/nav.css" type="text/css">
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1.5em;
            font-family: sans-serif;
            min-width: 75%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
            text-align: center;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" id="title" href="#">SecuRPi</a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="links" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="links" href="http://localhost:8090/" target="_blank">CCTV Monitor</a>
            </li>
            <li class="nav-item">
                <a class="links" href="/honeypot">Honeypot</a>
            </li>
            <li class="nav-item">
                <a class="links" href="/reports">Reports</a>
            </li>
            <li class="nav-item">
                <a class="links" href="{{ route('signout') }}">Logout</a>
            </li>
        </ul>
    </nav>
</header>
<body>

    <div id="main" class="row">
    
        @yield('content')

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>