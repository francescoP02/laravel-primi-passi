<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}

    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <header>
        <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="{{ route('activity')}}">Activity</a></li>
            <li><a href="{{ route('ticket')}}">Tickets</a></li>
            <li><a href="{{ route('about')}}">Chi siamo</a></li>
        </ul>
    </header>

    <h1>Attività da fare</h1>
</body>
</html>