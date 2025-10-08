<!DOCTYPE html>
<html>
<head>
    <title>Event Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>🎉 Event Management Portal</h1>

    <nav>
        <a href="index.php">Add Event</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="update_event.php">Update Event</a>
    </nav>

    <h2>Add New Event</h2>
    <form action="insert_event.php" method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" required><br><br>

        <button type="submit">Add Event</button>
    </form>
</body>
</html>
