<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Login</title>
</head>
<body>
    <div class="account">
        @if ($message = Session::get('error'))
            <strong>{{ $message }}</strong>
        @endif

        @if (count($errors) > 0)
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        <form action={{ route('checkLogin') }} method="post">
            @csrf
            <label for="email">Enter Email: </label>
            <input type="email" name="email" id="email">
            <label for="password">Enter Password:</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="login" value="Login">
        </form>
        <a href={{ route('register') }}>Don't have an account? Sign up here!</a>
    </div>
</body>
</html>
