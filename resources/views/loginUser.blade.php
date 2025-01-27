<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h1>Register</h1>
    <form method="GET" action="{{ route('register.form') }}" id="register">@method('GET')</form>
        
    <form method="POST" action="{{route('login')}}" id="login">
            @csrf
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required> 
            <br>

            <label for="password">Password :</label>
            <input type="text" id="password" name="password" required> 
            <br>

            <button type="submit" form="login">Login</button>
            <button type="submit" form="register">Register</button>

        </form>


</body>
</html>