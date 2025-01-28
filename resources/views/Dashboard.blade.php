<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>
        {{ $post->user->name }} Posts:
    </h1>
    @foreach ($posts as $post )
    <br>
    <hr>
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <hr> 
    <br>
    @endforeach

</body>
</html>
