<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('login.form') }}" method="GET" class="none" id="login">@method('GET')</form>
        
        <form method="POST" action="{{ route('register') }}" id="register">
            @csrf
            <label for="name">Name :</label>
            <input type="text" id="name" name="name"  required>
            <br>
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required> 
            <br>
            <label for="password">Password :</label>
            <input type="text" id="password" name="password" required> 
            <br>

            <button type="submit" form="register">Register</button>
            <button type="submit" form="login">Login</button>

        </form>


</body>
</html>