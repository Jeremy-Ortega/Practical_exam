<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
        <h2>Hello {{$user->name}}</h2>
        {{-- @foreach ($posts as $post)
            <hr>
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <hr>
        @endforeach --}}
        
    <a href="{{ route('create.form') }}">Create New Post?</a>
</body>
</html>