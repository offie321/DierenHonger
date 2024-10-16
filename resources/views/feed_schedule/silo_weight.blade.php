<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Refill</title>
</head>
<body>
    <h1>Silo Refill</h1>

    <p>Momenteel zit er: {{ $siloWeight->weight ?? '???' }} gram in de silo</p>

    @if($isBijnaLeeg)
        <p class="fail">De silo is bijna leeg! Vul het snel bij!</p>
    @else
        <p class="success">Er zit genoeg voer in de silo</p>
    @endif
</body>
</html>