<?php
	session_start();
	if($_SESSION['user']) { 
	}
	else {
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] == "GET") {
		$con = mysqli_connect("localhost", "root","root", "blogtastic") or die(mysqli_error()); //Connect to server
		$id = $_GET['id'];
		mysqli_query($con, "DELETE FROM list WHERE id='$id'");
		header("location: home.php");
	}
?>