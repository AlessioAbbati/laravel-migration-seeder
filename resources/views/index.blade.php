<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Treni in partenza</h1>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}

        <ul>
            @foreach ($trains as $train)
                <li>compagnia del treno: {{ $train->company }}, 
                    in partenza da: {{ $train->departure_station }},
                    del giorno: {{ $train->departure_date }},
                    in arrivo a: {{ $train->arrival_station }},
                    del giorno: {{ $train->arrival_date }}

                </li>
            @endforeach
        </ul>
    </body>
</html>
