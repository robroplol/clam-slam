<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <div class="grid grid-cols-4 min-h-screen  sm:items-center py-4 sm:pt-0">
            
            @foreach ($bandmembers as $bandmember)
            <livewire:counter :name="$bandmember->name" :clam_count="$bandmember->clam_count" :cp_count="$bandmember->cp_count" />
            @endforeach
            
        </div>
        @livewireScripts
    </body>
</html>
