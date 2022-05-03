<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
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
        <a href="./">Characters</a>
        <a href="./">Weapons</a>
        <a href="./">Locales</a>
        <form action="" method="get">
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
