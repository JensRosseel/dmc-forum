<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon.ico">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DMC Forum</title>
</head>
<body>
    <div class="profile">
        <img src={{ asset('img/profile.png') }} alt="login">
        @if (Auth::check())
            <span>Welcome {{ Auth::user()->username }}</span>
            <a href={{ route('logout') }}>Log Out</a>
        @else
            <a href={{ route('login') }}>login</a>
            <a href={{ route('register') }}>register</a>
        @endif
    </div>
    <div class="header">
        <img src={{ asset('img/banner.png') }} alt="banner">
    </div>
    <div class="navbar">
        <a href={{ route('home') }}>Home</a>
        <div class="dropdown">
            <div class="dropdown-title">DMC <i class="fa fa-caret-down"></i></div>
            <div class="dropdown-content">
                <a href={{ route('dmc', 1) }}>DMC 1</a>
                <a href={{ route('dmc', 2) }}>DMC 2</a>
                <a href={{ route('dmc', 3) }}>DMC 3</a>
                <a href={{ route('dmc', 4) }}>DMC 4</a>
                <a href={{ route('dmc', 5) }}>DMC 5</a>
            </div>
        </div>
        @if (Auth::check())
            <a href={{ route('postmaker') }}>Make Post</a>
        @endif
        <form action={{ route('search') }} method="get">
            @csrf
            <input type="text" name="search" id="search" placeholder="Search...">
            <input type="submit" value="">
        </form>
    </div>
    <div class="container">
        <div class="left"><img src={{ asset('img/left-banner.png') }} alt="left banner"></div>
        <div class="content">
            @section('content')
            @show
        </div>
        <div class="right"><img src={{ asset('img/right-banner.png') }} alt="right banner"></div>
    </div>

</body>
</html>
