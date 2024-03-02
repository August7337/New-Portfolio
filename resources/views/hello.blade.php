<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/hello.css" rel="stylesheet">
        <link href="/css/colors.css" rel="stylesheet">

        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="Header">
            <div class="header-wrapper">
                <ul class="ul">
                    <li class="header-btn"><a href="#">website</a></li>
                    <li class="header-btn"><a href="#">branding</a></li>
                    <li class="header-btn"><a href="#">marketing</a></li>
                    <li class="header-btn"><a href="#">work</a></li>
                    <li class="header-btn"><a href="#">us</a></li>
                </ul>
            </div>
        </nav>
        <div class="drag"></div>
    </body>
</html>
