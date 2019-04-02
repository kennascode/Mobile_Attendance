<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
	$Subject_Code = $_GET['Subject_Code'];
	$query = "DELETE FROM subject where Subject_Code='$Subject_Code'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: viewsubject.php");
?>