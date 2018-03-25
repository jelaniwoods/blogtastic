<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogtastic</title>
</head>
<body>
    <ul>
        <li>
            <a href="login.php">Login</a>
        </li>
        <li>
            <a href="register.php">Register</a>
        </li>
    </ul>
    
    <?php
		$con = mysqli_connect("localhost", "root","root", "blogtastic") or die(mysqli_error()); //Connect to server
		$query = mysqli_query($con, "Select * from list Where public='yes'"); // SQL Query
        while($row = mysqli_fetch_array($query)) {
    		Print "<tr>";
			Print '<td align="center">'. $row['id'] . "</td>";
            Print '<td align="center">'. $row['details'] . "</td>";
            Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
			Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
			Print "</tr>";
        }
	?>
</body>
</html>