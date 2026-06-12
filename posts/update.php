<?php

include("../config/db.php");

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT * FROM posts WHERE id=$id"
));

if(isset($_POST['update']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query(
    $conn,
    "UPDATE posts
     SET title='$title',
     content='$content'
     WHERE id=$id"
    );

    header("Location: read.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Post</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>Update Post</h2>

<form method="POST">

<label>Title</label>

<input
type="text"
name="title"
value="<?= $data['title']; ?>"
required>

<label>Content</label>

<textarea
name="content"
required><?= $data['content']; ?></textarea>

<button
type="submit"
name="update">
Update Post
</button>

</form>

</body>
</html>