<?php
include("../config/db.php");

if(isset($_POST['save']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query(
        $conn,
        "INSERT INTO posts(title,content)
         VALUES('$title','$content')"
    );

    header("Location: read.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>Create New Post</h2>

<form method="POST">

<label>Title</label>
<input type="text" name="title" required>

<label>Content</label>
<textarea name="content" required></textarea>

<button type="submit" name="save">
    Save Post
</button>

</form>

</body>
</html>