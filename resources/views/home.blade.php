<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Home Page Content</h2>
        <p>This is a simple HTML template.</p>




        <p>Times pressed: {{$count->times_pressed}}</p>
        <p>led state: {{ $led->led_is_on }}</p>
        <a href="/toggle_led"> Click to change led </a>
    </main>

    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script> <!-- Link to JavaScript file -->
</body>
</html>
