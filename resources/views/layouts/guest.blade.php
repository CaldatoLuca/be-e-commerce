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
</head>

<body class="font-sans text-neutral-800 antialiased bg-neutral-100">
    <div class="container mx-auto px-5 flex justify-center items-center h-screen">
        <div>
            <div class="flex justify-center">
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current " />
                </a>
            </div>

            <div
                class="w-full sm:max-w-md p-6 mt-6 md:px-20 md:py-12 bg-neutral-50 shadow-2xl overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>



</body>

</html>
