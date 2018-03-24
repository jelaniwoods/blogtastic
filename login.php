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
    <a href="index.php">Click here to go back<br/><br/>
    <form action="checklogin.php" method="POST">
       Enter Username: <input type="text" name="username" required="required" /> <br/>
       Enter password: <input type="password" name="password" required="required" /> <br/>
       <input type="submit" value="Login"/>
    </form>
</body>
</html>