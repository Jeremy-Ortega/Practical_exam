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
        
        <form method="POST" action="{{ route('register') }}" id="register">
            @method('POST')
            @csrf
            <label for="name">Name :</label>
            <input type="text" id="name" name="name"  required>
            <br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required> 
            <br>
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="minimum of 8 characters." required> 
            <br>

            {{-- <label for="password_confirmation">Confirm Password :</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <br>
             --}}
            <button type="submit" form="register">Register</button>

        </form>

        <form action="{{ route('login.form') }}" method="GET" class="none" id="login">
            <button type="submit" form="login">Login</button>
        </form>


</body>
</html>