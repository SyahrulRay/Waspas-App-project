<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine v3 -->
    <wireui:scripts />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            scroll-behavior: smooth;
        }
    </style>

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased overscroll-y-contain ">
    <div class="min-h-screen bg-gray-100 dark:bg-pink-50 gap-8">
        @include('layouts.navigation')


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-8">
            <div class="flex justify-between items-center">
                <p>&copy; 2023 My Personal Website. All rights reserved.</p>
                <ul class="space-x-4">
                    <li class="inline-block"><a class="text-gray-400 hover:text-white" href="#">Privacy Policy</a></li>
                    <li class="inline-block"><a class="text-gray-400 hover:text-white" href="#">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
