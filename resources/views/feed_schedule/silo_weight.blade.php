<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refill</title>
</head>
<body>
    <h1>Silo Refill</h1>

    <p>Momenteel zit er: {{ $siloWeight->weight ?? '???' }} kg in de silo</p>

    @if($bijnaLeeg)
        <p>De silo is bijna leeg! Vul het snel bij!</p>
    @else
        <p>Er zit genoeg voer in de silo</p>
    @endif
</body>
</html>