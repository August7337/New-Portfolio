<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/hello.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-100 ">
        
        <div class="hero">
            <h1>My Portfolio</h1>
            <h2>just a dev</h2>
        </div>
        <div class="MyProjects">
            <h2>My Projects</h2>

            <div class="section">

                <div class="card">
                    <h3>Title</h3>
                    <p>Descrition</p>
                </div>

                <div class="card">
                    <h3>Title</h3>
                    <p>Descrition</p>
                </div>

                <div class="card">
                    <h3>Title</h3>
                    <p>Descrition</p>
                </div>

                <div class="card">
                    <h3>Title</h3>
                    <p>Descrition</p>
                </div>

            </div>
        </div>
        <div class="footer">
            <a href="/login">login</a>
        </div>
        
    </body>
</html>
