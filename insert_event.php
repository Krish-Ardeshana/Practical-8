<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO events (title, description, date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $date);

    if ($stmt->execute()) {
        echo "<h3>✅ Event added successfully!</h3>";
    } else {
        echo "<h3>❌ Error: " . $stmt->error . "</h3>";
    }

    $stmt->close();
    $conn->close();

    echo '<br><a href="dashboard.php">Go to Dashboard</a>';
}
?>
