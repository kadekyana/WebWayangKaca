<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <header>
        @include('header')
    </header>
    <div class="wrapper">
        <ul>
            @section('sidebar')
            <li><a href="">Home</a></li>
            <li><a href="">Proucts</a></li>
            <li><a href="">History</a></li>
            @show
        </ul>
    </div>

    <div>
        @yield('content')
    </div>
</body>
</html>