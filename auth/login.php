<?php
session_start();
include("../config/db.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username='$username'"
    );

    $user = mysqli_fetch_assoc($result);

    if(
        $user &&
        password_verify($password, $user['password'])
    )
    {
        $_SESSION['user'] = $username;

        header("Location: ../posts/read.php");
        exit();
    }
    else
    {
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="login">
        Login
    </button>
</form>

</body>
</html>