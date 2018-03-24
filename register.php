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
        $bool = true;

        
        $con = mysqli_connect("localhost", "root", "root", "blogtastic") or die(mysqli_error());
        echo "Username entered is: ". $username."<br/>";
        echo "Password is: ". $password."<br/>";
        // mysqli_select_db("blogtastic") or die("Cannot connect to database");
        $query = mysqli_query($con, "SELECT * FROM users");
        while($row = mysqli_fetch_array($query)) {
            $table_users = $row['username'];
            if ($username == $table_users) {
                $bool = false;
                // echo "Username has already been taken!";
                Print '<script> alert("Username has been taken!");</script>';
                Print '<script> window.location.assign("register.php");</script>';
            }
        }

        if($bool) {
            mysqli_query($con, "INSERT INTO users (username, pass) VALUES ('$username', '$password')");
            Print '<script> alert("Succesfully Registered");</script>';
            Print '<script> window.location.assign("register.php"); </script>';
        }

    }
?>