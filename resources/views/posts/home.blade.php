<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')

        <title>Tarit Augustin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>

        @if ($posts->isNotEmpty())
            @foreach ($posts as $post)

            @if ($post->image != "")
                 <img class="w-40 h-40 sm:w-80 sm:h-80 object-cover	mr-10" width="320" height="320" src="{{asset('uploads/img/'.$post->image)}}" alt="{{ $post->title }} image" loading="lazy">
             @endif
            <div>
                <h4 class="text-white text-4xl font-bold opacity-80 mb-4">{{ $post->title }}</h4>
                <p class="text-white text-sm sm:text-xl opacity-75">{{ $post->description }}</p>
            </div>
            
            
            <p >{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</p>
                    
                
            @endforeach
        @endif
            
        </div>
    </body>
</html>
