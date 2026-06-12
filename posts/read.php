<?php
include("../config/db.php");

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>All Posts</h2>

<center>
<a href="create.php">Add New Post</a>
<a href="../auth/logout.php">Logout</a>
</center>

<br>

<table>

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['content']; ?></td>

<td>
<a class="edit-btn"
href="update.php?id=<?= $row['id']; ?>">
Edit
</a>

|

<a class="delete-btn"
href="delete.php?id=<?= $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>

</body>
</html>