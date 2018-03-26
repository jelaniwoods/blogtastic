<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogtastic</title>
</head>
<body>
    <h2>Login Page</h2>
    <a href="index.php">Click here to go back<br/><br/> </a>
    <form action="checklogin.php" method="post">
        <label for="username">Username</label> <input type="text" name="username" placeholder="username">
        <label for="pass">Password</label> <input type="password" name="pass" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>