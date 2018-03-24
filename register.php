<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogtastic</title>
</head>
<body>
    <h2>Register</h2>
    <a href="index.php">/</a>
    <form action="register.php" method="post">
        <label for="username">Username</label> <input type="text" name="username" placeholder="username">
        <label for="pass">Password</label> <input type="password" name="pass" placeholder="password">
        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['pass'];

        echo "Username entered is: ". $username."<br/>";
        echo "Password is: ". $password."<br/>";
    }
?>