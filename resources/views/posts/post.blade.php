<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <style>
        img {
            max-height: 250px;
            width: auto;
        }
    </style>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <h2>{{ $post->date }}</h2>
    <img src="{{asset('uploads/img/'.$post->thumbnail)}}" alt="{{ $post->title }}">
    {!! $post->html !!}
</body>
</html>