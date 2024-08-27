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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- aqui cano lo de style -->

</head>

<body class="font-sans text-gray-900 antialiased">

    <!-- aqui cano lo de header -->

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">


        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <footer class="bg-green-900 text-white py-8">
        <div class="container mx-auto flex flex-wrap justify-between">
            
            <div class="w-full sm:w-auto mb-6 sm:mb-0">
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-x"></i></a>
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
    
         
            <div class="w-full sm:w-auto mb-6 sm:mb-0">
                <h3 class="font-bold mb-2">Use cases</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-white hover:underline">UI design</a></li>
                    <li><a href="#" class="text-white hover:underline">UX design</a></li>
                    <li><a href="#" class="text-white hover:underline">Wireframing</a></li>
                    <li><a href="#" class="text-white hover:underline">Diagramming</a></li>
                    <li><a href="#" class="text-white hover:underline">Brainstorming</a></li>
                    <li><a href="#" class="text-white hover:underline">Online whiteboard</a></li>
                </ul>
            </div>
    
           
            <div class="w-full sm:w-auto mb-6 sm:mb-0">
                <h3 class="font-bold mb-2">Explore</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-white hover:underline">Design</a></li>
                    <li><a href="#" class="text-white hover:underline">Prototyping</a></li>
                    <li><a href="#" class="text-white hover:underline">Development features</a></li>
                    <li><a href="#" class="text-white hover:underline">Design systems</a></li>
                    <li><a href="#" class="text-white hover:underline">Collaboration features</a></li>
                    <li><a href="#" class="text-white hover:underline">Design process</a></li>
                </ul>
            </div>
    
            <div class="w-full sm:w-auto">
                <h3 class="font-bold mb-2">Resources</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-white hover:underline">Blog</a></li>
                    <li><a href="#" class="text-white hover:underline">Best practices</a></li>
                    <li><a href="#" class="text-white hover:underline">Colors</a></li>
                    <li><a href="#" class="text-white hover:underline">Color wheel</a></li>
                    <li><a href="#" class="text-white hover:underline">Support</a></li>
                    <li><a href="#" class="text-white hover:underline">Developers</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
