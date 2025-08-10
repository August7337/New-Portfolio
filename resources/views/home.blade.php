<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Augustin Tarit - Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Meta Description -->
    <meta name="description"
        content="Bienvenue sur le portfolio d'Augustin Tarit, développeur passionné créant des expériences numériques modernes et performantes.">

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="portfolio, Augustin Tarit, développeur, web, développement, design, code, laravel, csharp, nodejs, tailwindcss, php, git, site web, application web, application mobile, application desktop, web design, web development, web developer, web designer, webmaster, webmastering, webmaster freelance, webmastering freelance, webmastering professionnel, webmastering pas cher, webmastering freelance pas cher, webmastering professionnel pas cher, webmastering freelance professionnel">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Augustin Tarit - Portfolio">
    <meta property="og:description"
        content="Bienvenue sur le portfolio d'Augustin Tarit, développeur passionné créant des expériences numériques modernes et performantes.">
    {{-- <meta property="og:image" content="{{ asset('path/to/your/image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Augustin Tarit - Portfolio">
    <meta name="twitter:description"
        content="Bienvenue sur le portfolio d'Augustin Tarit, développeur passionné créant des expériences numériques modernes et performantes.">
    {{-- <meta name="twitter:image" content="{{ asset('path/to/your/image.jpg') }}"> --}}

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    </style>

    @if (env('ANALYTICS'))
        <script defer data-domain="augustin-tarit.dev" src="http://data.fire-hosting.net/js/script.js"></script>
    @endif
</head>

<body class="bg-gray-900 text-gray-100">
    <div id="cursor"
        class="w-10 h-10 border-2 border-gray-300/50 bg-gray-300/10 rounded-full fixed pointer-events-none transform -translate-x-1/2 -translate-y-1/2 transition-transform ease-out duration-75 z-50 opacity-0">
    </div>
    @auth
        <a href="{{ route('dashboard') }}"
            class=" z-10 fixed bottom-8 right-8 px-6 py-3 bg-teal-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-teal-400 transition">
            Dashboard
        </a>
    @endauth
    <header class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-gray-800 opacity-80"></div>
        <div class="container mx-auto px-6 z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold text-center text-gray-100">
                Bonjour, je suis <span class="text-teal-400">Augustin</span>
            </h1>
            <p class="mt-6 text-lg text-center text-gray-300">
                Développeur passionné, je crée des expériences numériques modernes et performantes.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="#skills"
                    class="px-6 py-3 bg-teal-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-teal-400 transition">
                    En savoir plus
                </a>
                <a href="#projects"
                    class="px-6 py-3 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg text-lg font-semibold hover:bg-gray-700 transition">
                    Mes Projets
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 w-full h-20 bg-repeat"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 120 30%22%3E%3Cpath d=%22M0 30 V15 Q30 3 60 15 T120 15 V30z%22 fill=%22%231f2937%22 /%3E%3C/svg%3E'); background-size: auto 100%;">
        </div>
    </header>
    <main class="bg-gray-800">
        <section id="skills" class="py-16 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-100 mb-12">Compétences & Stacks</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
                    <!-- Laravel -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">Laravel</p>
                    </div>
                    <!-- C# -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg"
                            alt="C# Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">C#</p>
                    </div>
                    <!-- NodeJS -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://images.seeklogo.com/logo-png/27/2/node-js-logo-png_seeklogo-273749.png"
                            alt="NodeJS Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">NodeJS</p>
                    </div>
                    <!-- Tailwind CSS -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/512px-Tailwind_CSS_Logo.svg.png"
                            alt="Tailwind CSS Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">Tailwind CSS</p>
                    </div>
                    <!-- PHP -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                            alt="PHP Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">PHP</p>
                    </div>
                    <!-- Git -->
                    <div class="flex flex-col items-center text-center">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"
                            alt="Git Logo" class="h-16 mb-4">
                        <p class="text-gray-100 font-semibold">Git</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-100 mb-12">Mes Réalisations</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @if ($posts->isNotEmpty())
                        @foreach ($posts as $post)
                            <div class="bg-gray-900 rounded-lg shadow-md overflow-hidden border border-gray-600/50">
                                <img src="/uploads/img/thumbnail/{{ $post->thumbnail }}"
                                    alt="{{ $post->title }} thumbnail" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-gray-100">{{ $post->title }}</h3>
                                    <p class="text-sm text-gray-400">{{ $post->date }}</p>
                                    <a href="/posts/{{ $post->url }}"
                                        class="mt-4 inline-block px-4 py-2 bg-teal-500 text-gray-900 rounded-lg font-semibold hover:bg-teal-400 transition">Lire
                                        la suite</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-gray-400">Aucun projet pour le moment.</p>
                    @endif
                </div>
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
                <a href="https://www.linkedin.com/in/augustin-tarit-30a2a5335/"
                    class="hover:text-teal-400 transition underline underline-offset-2">LinkedIn</a>
                <a href="https://github.com/August7337"
                    class="hover:text-teal-400 transition underline underline-offset-2">GitHub</a>
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
