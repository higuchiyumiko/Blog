<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2>カテゴリー</h2>
        @foreach($posts as $post)
            <p>{{$post->title}}</p>
            <p>{{$post->body}}</p>
            <p>{{$post->category->name}}</p>
        @endforeach
    </body>
</html>