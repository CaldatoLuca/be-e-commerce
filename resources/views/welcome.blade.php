<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GymWear Performance Board</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    <div class="h-screen flex flex-col">
        <header class="bg-neutral-100 py-4 text-neutral-800  drop-shadow-2xl">
            <div class="container mx-auto px-5 flex justify-between items-center">

                <x-application-logo />

                {{-- Link di login e registrazione --}}
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </div>

        </header>

        <main class="flex justify-center items-center bg-neutral-50  text-neutral-800 flex-grow">
            <div class="container mx-auto px-5 flex justify-center py-10">
                <div class="grid w-full lg:grid-cols-2 lg:grid-rows-2 md:w-3/5 gap-5">
                    {{-- Colonna 1 --}}
                    <div
                        class="lg:col-span-1 lg:row-span-2 md:text-start text-center border rounded-lg shadow-md overflow-hidden p-4 bg-neutral-100 flex flex-col gap-5">
                        <h2 class="text-2xl font-bold">Benvenuto nell' area amministrativa</h2>
                        <p>Ti trovi nell'area amministrativa del nostro sito. Qui puoi gestire varie
                            funzionalità e configurazioni per il tuo account e per il sito stesso. Se hai bisogno di
                            assistenza o hai domande, non esitare a contattarci. Siamo qui per aiutarti e assicurarci
                            che la tua esperienza sia la migliore possibile.</p>

                        <ul class="list-inside">
                            <li class=" font-bold mb-2">Accedendo potrai:</li>
                            <li class=" list-item md:list-disc">Aggiungere prodotti al catalogo</li>
                            <li class=" list-item md:list-disc">Visualizzare gli ordini effettuati</li>
                            <li class=" list-item md:list-disc">Visualizzare le transazioni</li>
                            <li class=" list-item md:list-disc">Controllare il numero di aderenti alla Newsletter</li>
                            <li class=" list-item md:list-disc">Rimanere aggiornato sul numero di utenti registrati</li>
                            <li class=" list-item md:list-disc">Ricevere segnalazioni dai clienti</li>
                        </ul>

                        <div class="flex flex-grow items-center justify-center">
                            {{-- Link di login e registrazione --}}
                            @if (Route::has('login'))
                                <livewire:welcome.navigation />
                            @endif
                        </div>
                    </div>

                    {{-- Colonna 2 --}}
                    <div
                        class="lg:col-span-1 lg:row-span-1 md:text-start text-center border rounded-lg shadow-md overflow-hidden p-4 bg-neutral-100">
                        <h2 class="text-2xl font-bold">Contatti</h2>
                        <p class="mt-5">Per qualsiasi domanda o assistenza, non esitare a contattarci.</p>
                        <ul class="mt-4">
                            <li class="flex items-center justify-center md:justify-start mb-2">
                                <x-feathericon-mail class="mr-2" />
                                <a href="mailto:info@example.com"
                                    class="text-emerald-600 hover:underline">info@example.com</a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <x-feathericon-phone class="mr-2" />
                                <span>123-456-7890</span>
                            </li>
                            <li class="flex items-center mt-2 justify-center md:justify-start">
                                <x-feathericon-facebook class="mr-2" />
                                <a href="#" class="text-emerald-600 hover:underline">Facebook</a>
                            </li>
                            <li class="flex items-center mt-2 justify-center md:justify-start">
                                <x-feathericon-twitter class="mr-2" />
                                <a href="#" class="text-emerald-600 hover:underline">Twitter</a>
                            </li>
                        </ul>
                    </div>


                    {{-- Colonna 3 --}}
                    <div class="lg:col-span-1 lg:row-span-1 border rounded-lg shadow-md overflow-hidden">
                        <img src={{ asset('img/welcome.jpeg') }} alt="welcome img" class=" img-fluid  w-full h-full">
                    </div>
                </div>
            </div>
        </main>
    </div>


</body>

</html>
