<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<form method="post" action="{{route('store.register')}}">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
name :  <input type="text" id="name" name="name">
email: <input type="email" id="email" name="email">
pass: <input type="password" id="password" name="password">
    <label for="roll_id">Select</label><select name="roll_id" id="roll_id">
    <option value="1">Administrator</option>
    <option value="2">Staff</option>
    <option value="3">User</option>
</select>
    <button class="" type="submit">send</button>
</form>
</body>

</html>

<?php
