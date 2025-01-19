<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/posts.css')

    <title>Augustin Tarit - Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Meta Description -->
    <meta name="description" content="Un article qui parle de : {{ $post->title }}    écrit par Augustin Tarit.">

    <!-- Meta Keywords -->
    <meta name="keywords" content="portfolio, Augustin Tarit, {{ $post->title }}, web, développement, design, code">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $post->title }} - Augustin Tarit - Portfolio">
    <meta property="og:description"
        content="Un article qui parle de : {{ $post->title }}    écrit par Augustin Tarit.">
    <meta property="og:image" content="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }} - Augustin Tarit - Portfolio">
    <meta name="twitter:description"
        content="Un article qui parle de : {{ $post->title }}    écrit par Augustin Tarit.">
    <meta name="twitter:image" content="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    </style>
</head>

<body class="bg-gray-800 text-gray-100">
    <div id="cursor"
        class="w-10 h-10 border-2 border-gray-300/50 bg-gray-300/10 rounded-full fixed pointer-events-none transform -translate-x-1/2 -translate-y-1/2 transition-transform ease-out duration-75 z-50 opacity-0">
    </div>
    @auth
        <a href="{{ route('dashboard') }}"
            class=" z-10 fixed bottom-8 right-8 px-6 py-3 bg-teal-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-teal-400 transition">
            Dashboard
        </a>
    @endauth
    <main>
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-gray-800 opacity-80"></div>
        <section class=" relative container max-w-5xl mx-auto py-16 px-16 z-10">
            <div class="flex items-center flex-col mb-12">
                <div class="mb-12">
                    <h1 class="text-5xl md:text-7xl font-extrabold text-center text-teal-500 mb-4">{{ $post->title }}
                    </h1>
                    <h2 class="text-2xl md:text-4xl font-bold text-center text-gray-100">{{ $post->date }}</h2>
                </div>
                <img class=" max-h-96 h-full" src="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}"
                    alt="{{ $post->title }}">
            </div>
            <div>
                {!! $post->html !!}
            </div>
            <div class="mt-8 flex justify-center gap-4">
                <a href="/"
                    class="px-6 py-3 bg-teal-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-teal-400 transition no-underline">
                    Retourner à l'accueil
                </a>
                @auth
                    <a href="/posts/{{ $post->id }}/edit"
                        class="px-6 py-3 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg text-lg font-semibold hover:bg-gray-700 transition no-underline">
                        Modifier
                    </a>
                @endauth
            </div>
        </section>
        <div class="bottom-0 left-0 right-0 w-full h-20 bg-repeat"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 120 30%22%3E%3Cpath d=%22M0 30 V15 Q30 3 60 15 T120 15 V30z%22 fill=%22%23111827%22 /%3E%3C/svg%3E'); background-size: auto 100%;">
        </div>
    </main>
    <footer class="bg-gray-900 py-10 text-gray-400">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm">© {{ date('Y') }} Augustin TARIT. Tous droits réservés.</p>
            <div class="mt-4 flex justify-center gap-4">
                <a href="https://www.linkedin.com/in/augustin-tarit-30a2a5335/" class="hover:text-teal-400 transition underline underline-offset-2">LinkedIn</a>
                <a href="https://github.com/August7337" class="hover:text-teal-400 transition underline underline-offset-2">GitHub</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cursor = document.getElementById('cursor');
            let mouseX = window.innerWidth / 2,
                mouseY = window.innerHeight / 2;
            let posX = mouseX,
                posY = mouseY;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
                cursor.style.opacity = 1;
            });

            function updateCursor() {
                posX += (mouseX - posX) * 0.1 - 1.75;
                posY += (mouseY - posY) * 0.1 - 1.75;
                cursor.style.transform = `translate(${posX}px, ${posY}px)`;
                requestAnimationFrame(updateCursor);
            }

            updateCursor();
        });
    </script>
</body>

</html>
