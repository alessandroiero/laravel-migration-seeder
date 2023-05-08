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
                <li>{{$train->azienda}}</li>
                <li>{{$train->stazione_partenza}}</li>
                <li>{{$train->stazione_arrivo}}</li>
                <li>{{$train->orario_partenza}}</li>
                <li>{{$train->orario_arrivo}}</li>
                <li>{{$train->orario_arrivo}}</li>
                <li>{{$train->n_carrozza}}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
