<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Pet Feeder Schedule</title>
</head>
<body>
    <h1>Pet Feeder Schedule</h1>

    
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
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
</body>
</html>