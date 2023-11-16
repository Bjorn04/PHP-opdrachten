<?php
session_start(); // Start the session to store user information upon successful login


if(isset($_POST['login'])){
    require_once "classes/Users.php";
    $user = new User();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->login($username, $password)){
        // Set session variables and redirect to the dashboard or home page
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo "Invalid username or password";
    }
}
?>

<!-- login.php -->
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>
</body>
</html>

