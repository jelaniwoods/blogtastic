<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogtastic</title>
</head>
<body>
    <?php
        session_start(); //starts the session
        if ($_SESSION['user']) { //checks if user is logged in

        } else {
            header("location:index.php"); // redirects if user is not logged in
        }
        $user = $_SESSION['user']; //assigns user value
	?>
	<body>
		<h2>Home Page</h2>
		<p>Hello <?php Print "$user"?>!</p> 
		<a href="logout.php">Click here to logout</a><br/><br/>
		<form action="add.php" method="POST">
    		<label for="details">Add more to the list: </label><input type="text" name="details"/><br/>
			<label for="public[]">public post?</label> <input type="checkbox" name="public[]" value="yes"/><br/>
			<input type="submit" value="Add to list"/>
		</form>
		<h2>My list</h2>
		<table border="1px" width="100%">
			<tr>
				<th>Id</th>
				<th>Details</th>
				<th>Post Time</th>
				<th>Edit Time</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Public Post</th>
			</tr>
			<?php
				$con = mysqli_connect("localhost", "root","root", "blogtastic") or die(mysqli_error()); //connect to database
				$query = mysqli_query($con, "Select * from list"); // SQL Query
				while($row = mysqli_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['id'] . "</td>";
						Print '<td align="center">'. $row['details'] . "</td>";
						Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
						Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
						Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
						Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
						Print '<td align="center">'. $row['public']. "</td>";
					Print "</tr>";
				}
			?>
		</table>
		<script>
			function myFunction(id) {
			var r = confirm("Are you sure you want to delete this record?");
			if (r == true) {
			  	window.location.assign("delete.php?id=" + id);
			  }
			}
		</script>
    
</body>
</html>