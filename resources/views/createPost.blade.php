<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Hello {{$users->name}}</h1>
    <h1>Create a New Post</h1>
    <form method="POST" action="{{ route('create.post') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Input title of post." required>
        <br>
        <label for="body">Body:</label>
        <textarea id="body" name="body" placeholder="Input content of the post." required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>