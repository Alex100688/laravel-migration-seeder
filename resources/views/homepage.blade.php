<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>TRENI</h1>
    <ul>
        @foreach ($trains as $train)
            <h2>AGENZIA</h2>
            <li>{{ $train->agency }}</li>
            <h3>Partenze</h3>
            <li>{{ $train->departure_station }}</li>
            <h3>Arrivi</h3>
            <li>{{ $train->arrival_station }}</li>
            <h3>Orario di partenza</h3>
            <li>{{ $train->time_departure }}</li>
            <h3>Orario di arrivo</h3>
            <li>{{ $train->time_arrival }}</li>
            <h4>Codice Treno</h4>
            <li>{{ $train->code_train }}</li>
            <h4>Carrozza</h4>
            <li>{{ $train->carriage_number }}</li>
            <h3>Prezzo: {{ $train->price }}€</h3>
        @endforeach
    </ul>
</body>

</html>
