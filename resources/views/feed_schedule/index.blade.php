<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Pet Feeder Dashboard</title>
</head>
<body>
    <h1>Pet Feeder Dashboard</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/feed-schedule" method="POST">
        @csrf
        <label for="feeding_time">Feeding Time (HH:MM):</label>
        <input type="time" name="feeding_time" required>
        <button type="submit">Add Time</button>
    </form>

    <h2>Scheduled Feeding Times:</h2>
    <ul>
        @foreach($schedules as $schedule)
            <li>
                {{ $schedule->feeding_time }}
                <form action="/feed-schedule/{{ $schedule->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2>Silo Refill Status:</h2>
    <p>Momenteel zit er: {{ $siloWeight->weight ?? '???' }} gram in de silo</p>

    @if($isBijnaLeeg)
        <p class="fail">De silo is bijna leeg! Vul het snel bij!</p>
    @else
        <p class="success">Er zit genoeg voer in de silo</p>
    @endif
</body>
</html>