<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    {{-- <h1>{{$user->name}} : All Posts </h1> --}}

        @foreach ($posts as $post)
            <hr>
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            {{-- update post / delete post  --}}
            <hr>

        @endforeach
    <h1>    gumagana    </h1>
        
    <a href="{{ route('create.form') }}">Create New Post?</a>
</body>
</html>