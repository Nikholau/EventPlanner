<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Event System</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./add_event.php">Add Event</a></li>
            <li><a href="./user_login.php">Login</a></li>
            <li><a href="./user_registration.php">Register</a></li>
        </ul>
    </nav>
    
    <section class="event-details">
        <?php
        require_once __DIR__ . '/../database/connection.php';
        require_once '../classes/Event.php';


        if (isset($_GET['id'])) {
            $eventId = $_GET['id'];
            $event = Event::getById($eventId);

            if ($event) {
                echo "<h2>{$event->getTitle()}</h2>";
                echo "<img src='{$event->getImages()}' alt='Event Image'>";
                echo "<p>Description: {$event->getDescription()}</p>";
                echo "<p>Date: {$event->getDate()}</p>";
                echo "<p>Time: {$event->getTime()}</p>";
                echo "<p>Location: {$event->getLocation()}</p>";

            } else {
                echo "<p>Event not found.</p>";
            }
        } else {
            echo "<p>Invalid event ID.</p>";
        }
        ?>
    </section>
    
    <footer>
        
    </footer>
</body>
</html>
