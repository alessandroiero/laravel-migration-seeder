<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Migration Seeder</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                <li>Treno: {{$train->azienda}} - Numero Carrozza {{$train->n_carrozza}} - Da {{$train->stazione_partenza}} - A {{$train->stazione_arrivo}} - Orario Partenza {{$train->orario_partenza}} - Orario Arrivo {{$train->orario_arrivo}}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
