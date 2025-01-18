<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augustin TARIT - Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-100">
    <header class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-gray-800 opacity-90"></div>
        <div class="container mx-auto px-6 z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold text-center text-gray-100">
                Bonjour, je suis <span class="text-teal-400">Augustin</span>
            </h1>
            <p class="mt-6 text-lg text-center text-gray-300">
                Développeur passionné, je crée des expériences numériques modernes et performantes.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="#about" class="px-6 py-3 bg-teal-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-teal-400 transition">
                    En savoir plus
                </a>
                <a href="#projects" class="px-6 py-3 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg text-lg font-semibold hover:bg-gray-700 transition">
                    Mes Projets
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 w-full h-20 bg-repeat" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 120 30%22%3E%3Cpath d=%22M0 30 V15 Q30 3 60 15 T120 15 V30z%22 fill=%22%231f2937%22 /%3E%3C/svg%3E'); background-size: auto 100%;"></div>
    </header>
    <main class=" h-screen bg-gray-800"></main>
</body>
</html>
