<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clam Slammer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet">        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
      @livewireStyles  
    </head>
    <body class="antialiased">
        <div class="flex flex-col min-h-screen py-24 items-center">
            <h1 class="text-center text-6xl text-white">Clam Slammer</h1>
            <h2 class="text-4xl text-white">What's the goal here?</h2>
            <h3 class="text-2xl text-white">If someone blows a clam, you hit the button</h3>
            <h3 class="text-2xl text-white">If someone does something rad, give 'em a little cherish</h3>
            <div class="grid xl:grid-cols-4 md:grid-cols-3 grid-cols-1 sm:pt-0 my-4">
                
                @foreach ($bandmembers as $bandmember)
                <livewire:counter :name="$bandmember->name" :clam_count="$bandmember->clam_count" :cp_count="$bandmember->cp_count" />
                @endforeach
                
            </div>
        </div>
        @livewireScripts
    </body>
</html>
