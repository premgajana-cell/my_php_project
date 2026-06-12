<?php
include("../config/db.php");

if(isset($_POST['register']))
{
    $username = $_POST['username'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(username,password)
            VALUES('$username','$password')";

    mysqli_query($conn, $sql);

    echo "<p class='success'>Registration Successful</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>User Registration</h2>

<form method="POST">

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="register">
        Register
    </button>

</form>

<p style="text-align:center;">
    Already have an account?
    <a href="login.php">Login Here</a>
</p>

</body>
</html>