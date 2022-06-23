<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>

    {{-- CSS --}}

    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>Hello {{$name}} {{$lastname}}</h1>

    <div class="ms-list">

        <p>Ecco i risultati della tua ricerca:</p>
        <ul>
            @forelse ($results as $result)
            <li>
                <h5>{{$result['city']}} {{$result['abbreviation']}}
                @if ($result['capoluogo'] == true)
                ==> capoluogo
                @endif
                </h5>
            </li>
    
            @empty
                <p>La lista è vuota</p>
            @endforelse
        </ul>

    </div>
    
</body>
</html>