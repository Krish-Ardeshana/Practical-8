<?php
include 'db_connect.php';

$sql = "SELECT * FROM events ORDER BY created_at DESC LIMIT 5";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Event Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>📅 Latest 5 Events</h1>

    <nav>
        <a href="index.php">Add Event</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="update_event.php">Update Event</a>
    </nav>

    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>" . htmlspecialchars($row['title']) . "</strong> — " 
                     . htmlspecialchars($row['date']) . "<br>" 
                     . htmlspecialchars($row['description']) . "</li><hr>";
            }
        } else {
            echo "<li>No events found</li>";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
