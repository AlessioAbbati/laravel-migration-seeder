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

        {{-- <ul>
            @foreach ($trains as $train)
                <li>compagnia del treno: {{ $train->company }}, 
                    in partenza da: {{ $train->departure_station }},
                    del giorno: {{ $train->departure_date }},
                    in arrivo a: {{ $train->arrival_station }},
                    del giorno: {{ $train->arrival_date }}

                </li>
            @endforeach
        </ul> --}}

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th class="text-danger">Compagnia del treno</th>
                        <th class="text-danger">Partenza da</th>
                        <th class="text-danger">Data di partenza</th>
                        <th class="text-danger">Arrivo a</th>
                        <th class="text-danger">Data di arrivo</th>
                        <th class="text-danger">In orario</th>
                        <th class="text-danger">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->formatted_departure_date }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->formatted_arrival_date }}</td>
                            <td>{{ $train->on_time ? 'Si' : 'No' }}</td>
                            <td>{{ $train->deleted ? 'Si' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
    </body>
</html>
