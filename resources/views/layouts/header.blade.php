<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>DMC Forum</title>
</head>
<body>
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
