<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, {{ $user['username'] }}!</h1>

    <ul>
        @foreach($users as $user)
            @if($user['id'] % 2 == 0)
                <li>Пользователь с четным ID. {{ $user['username'] }}</li>
            @else
                <li>Пользователь с нечетным ID. {{ $user['username'] }}</li>
            @endif
        @endforeach
    </ul>
</body>
</html>