<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        echo "Username entered is: ". $username."<br/>";
        echo "Password is: ". $password."<br/>";
        $con = mysqli_connect("localhost", "root","root", "blogtastic") or die(mysqli_error()); 
        $words = "SELECT * FROM users WHERE username='" . $username . "';";
        $query = mysqli_query($con, $words);
        echo "$words";
        $exists = mysqli_num_rows($query); //Checks if username exists
        $table_users = "";
        $table_password = "";
        if($exists > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
                $table_password = $row['pass']; // the first password row is passed on to $table_users, and so on until the query is finished
            }
            if(($username == $table_users) && ($password == $table_password)) {
                    if($password == $table_password) {
                        $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
                        header("location: home.php"); // redirects the user to the authenticated home page
                    }		
            }
            else {
                Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
                Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
            }
        }
        else {
            Print '<script> alert("Incorrect Username!"); </script>'; //Prompts the user
            Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
        }
    } else {
        echo "nope";
    }
?>