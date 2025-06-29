<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Blog Posts</h2>
    <a href="add.php">➕ Add New Post</a>
    <br><br>

    <?php 
        $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");

        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='post'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<small>Posted On " . $row['created_at'] . "</small><br>";
            echo "<a href='edit.php?id=" . $row['id'] . "'>✏️ Edit</a> | ";
            echo "<a href='delete.php?id=". $row['id'] ."' onclick='return confirm(\"Are you sure?\")'>❌ Delete</a>";
            echo "</div><hr>";
        }
     ?>
</body>
</html>