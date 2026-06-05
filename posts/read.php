<?php
include("../config/db.php");

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts"
);
?>

<h2>All Posts</h2>

<a href="create.php">
Add Post
</a>

<table border="1">

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

<a href="update.php?id=<?=$row['id'];?>">
Edit
</a>

<a href="delete.php?id=<?=$row['id'];?>">
Delete
</a>

</td>

</tr>
<?php
}
?>

</table>