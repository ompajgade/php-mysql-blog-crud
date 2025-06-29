<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Blog Post</h2>
    <form action="insert.php" method="POST">
        <input type="text" name="title" placeholder="Post Title" required><br><br>
        <textarea name="content" rows="5" placeholder="Post Content" required></textarea><br><br>
        <button type="submit">Publish</button>
    </form>
    <br>
    <a href="index.php">Back to Posts</a>
</body>
</html>