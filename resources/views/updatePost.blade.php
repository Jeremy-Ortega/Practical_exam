<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post</title>
</head>
<body>
    <form action="/update/{{ $post->id }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value={{ $post->title }} required>
        <br>
        <label for="body">Body:</label>
        <textarea id="body" name="body" placeholder="Input content of the post." required>{{ $post->body }}</textarea>
        <br>
        <button type="submit">Update</button>

    </form>
</body>
</html>