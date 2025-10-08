<!DOCTYPE html>
<html>
<head>
    <title>Update Event</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>✏️ Update Event</h1>

    <nav>
        <a href="index.php">Add Event</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="update_event.php">Update Event</a>
    </nav>

    <form action="" method="POST">
        <label>Event ID:</label><br>
        <input type="number" name="id" required><br><br>

        <label>New Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>New Description:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>

        <label>New Date:</label><br>
        <input type="date" name="date" required><br><br>

        <button type="submit" name="update">Update Event</button>
    </form>

    <?php
    include 'db_connect.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $stmt = $conn->prepare("UPDATE events SET title=?, description=?, date=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $description, $date, $id);

        if ($stmt->execute()) {
            echo "<h3>✅ Event updated successfully!</h3>";
        } else {
            echo "<h3>❌ Error updating event: " . $stmt->error . "</h3>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
