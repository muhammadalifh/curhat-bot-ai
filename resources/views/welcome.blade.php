<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curhat Bot AI</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icon -->
        <link rel="icon" href="{{ asset('robot.png') }}" type="image/x-icon"/>

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-4">
                <div class="text-center text-gray-800 dark:text-gray-300">
                    <h1 class="text-7xl font-bold">Curhat Bot AI 🤖</h1>
                    <br>
                    <p class="text-3xl"> Susah cari tempat curhat? <br> Curhat Bot AI 🤖 bisa membantu kamu. </p>
                    <div class="py-4">
                        <a href="/write">
                            <button class="bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded shadow-sm font-semibold inline-flex gap-2 text-center">
                                <span>Ayo Mulai</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="text-center text-sm text-gray-500">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
