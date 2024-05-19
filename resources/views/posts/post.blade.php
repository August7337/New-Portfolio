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
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-800 flex flex-col justify-center w-full items-center text-white">
    <h1 class=" text-center text-4xl mt-9">{{ $post->title }}</h1>
    <h2 class=" text-center text-2xl mb-2">{{ $post->date }}</h2>
    <img src="{{asset('uploads/img/'.$post->thumbnail)}}" alt="{{ $post->title }}" class=" max-w-80 m-b5">
    {!! $post->html !!}
</body>
</html>