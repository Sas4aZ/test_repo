<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
hello {{Auth::user()->name}} you are a {{Auth::user()->roles->name}}
 <a href="{{route('logout')}}"><button> logout</button> </a>
 <a href="{{route('register')}}"><button> register new users</button> </a>
</body>
</html>
