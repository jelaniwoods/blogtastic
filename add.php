<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$details = $_POST['details'];
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");//date
		$time_edited = strftime("%X");//time
		$date_edited = strftime("%B %d, %Y");//date
		$decision ="no";
        $con = mysqli_connect("localhost", "root", "root", "blogtastic") or die(mysqli_error());

        // echo $details." ".$time." ".$date." ".$decision;
		 //Connect to database
		foreach($_POST['public'] as $each_check) {
 			if($each_check !=null ) { //checks if the checkbox is checked
                 $decision = "yes"; //sets teh value
                 echo "FINE";
 			}
 		}
		
		mysqli_query($con, "INSERT INTO list (details, date_posted, time_posted, date_edited, time_edited, public) VALUES ('$details','$date','$time', '$date_edited', '$time_edited', '$decision')"); //SQL query
		header("location: home.php");
	}
	else
	{
		header("location:home.php"); //redirects back to hom
	}
?>