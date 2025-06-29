<?php
    include 'db.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM posts WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" required><br><br>
        <textarea name="content" rows="5" required><?= htmlspecialchars($row['content']) ?></textarea><br><br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Back to Posts</a>
</body>
</html>