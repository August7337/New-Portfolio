<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Augustin Tarit</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Meta Description -->
    <meta name="description" content="An article about: {{ $post->title }} written by Augustin Tarit.">
    <meta name="keywords" content="portfolio, Augustin Tarit, {{ $post->title }}, web, development, design, code">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $post->title }} - Augustin Tarit - Portfolio">
    <meta property="og:description" content="An article about: {{ $post->title }} written by Augustin Tarit.">
    <meta property="og:image" content="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }} - Augustin Tarit - Portfolio">
    <meta name="twitter:description" content="An article about: {{ $post->title }} written by Augustin Tarit.">
    <meta name="twitter:image" content="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}">

    <style>
        body {
            background-color: #0D1116;
            color: #E5E7EB;
            font-family: 'Inter', sans-serif;
        }

        .accent {
            color: #3B82F6;
        }
    </style>
</head>

<body class="scroll-smooth">
    <div id="smooth-wrapper">
        <!-- MAIN CONTENT -->
        <div id="smooth-content">
            <main class="px-8 py-20">
                <section class="max-w-5xl mx-auto text-center">
                    <h1 class="text-5xl md:text-7xl font-extrabold text-blue-500 mb-4">{{ $post->title }}</h1>
                    <h2 class="text-2xl md:text-4xl font-bold text-gray-100 mb-8">{{ $post->date }}</h2>
                    <img class="max-h-96 h-full mx-auto mb-12" src="{{ asset('uploads/img/thumbnail/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                    <div class="text-gray-300 leading-relaxed text-left">
                        {!! $post->html !!}
                    </div>
                </section>

                <div class="mt-12 flex justify-center gap-4">
                    <a href="/" class="px-6 py-3 bg-blue-500 text-white rounded-lg text-lg font-semibold hover:bg-blue-600 transition">
                        Back to Home
                    </a>
                    @auth
                        <a href="/posts/{{ $post->id }}/edit" class="px-6 py-3 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg text-lg font-semibold hover:bg-gray-700 transition">
                            Edit Post
                        </a>
                    @endauth
                </div>
            </main>
        </div>

        <!-- FOOTER -->
        <footer class="bg-[#0D1116] text-center text-gray-500 py-6 border-t border-gray-800">
            <p>© {{ date('Y') }} Augustin Tarit — All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-4">
                <a href="https://www.linkedin.com/in/augustin-tarit/" class="hover:text-blue-400 transition">LinkedIn</a>
                <a href="https://github.com/August7337" class="hover:text-blue-400 transition">GitHub</a>
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>