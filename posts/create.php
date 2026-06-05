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

<form method="POST">

Title:
<input type="text" name="title">

<br><br>

Content:
<textarea name="content"></textarea>

<br><br>

<button name="save">
Save Post
</button>

</form>