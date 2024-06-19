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
        <header class="h-20 justify-start flex w-full fixed backdrop-blur-xl">
            <p class="text-center align-middle">Tarit Augustin</p>
        </header>

        <section class="hero min-h-screen bg-base-200">
            <div class="hero-content text-center">
                <div class="max-w-xl">
                    <h1 class="text-7xl font-extrabold">Tarit Augustin</h1>
                    <p class="py-6 max-w-md">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </section>

        <main class=" w-full flex flex-col justify-center items-center">
            @if ($posts->isNotEmpty())
                @foreach ($posts as $post)
                    <div class="bg-slate-600 w-96 my-9 rounded-lg">
                        <div>
                            <h2 class="text-white text-4xl font-bold opacity-80 mb-4 text-center mt-2">{{ $post->title }}</h2>
                            <p class="text-white text-sm sm:text-xl opacity-75 text-center mb-2">{{ $post->date }}</p>
                            <a href="/posts/{{ $post->url }}">
                                <img src="/uploads/img/thumbnail/little/{{ $post->thumbnail }}" alt="" class=" rounded-b-lg" loading="lazy">
                            </a>
                        </div>
                    </div>
                @endforeach 
            @endif
            </div>
        </main>
    </body>
</html>
