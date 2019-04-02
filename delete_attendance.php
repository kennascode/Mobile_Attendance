<?php



	$con = mysqli_connect('localhost', 'root', '', 'attendance');
	$class_id = isset($_GET['class_id']) ?  $_GET['class_id'] : null;
	$student_id = isset($_GET['student_id']) ?  $_GET['student_id'] : null;
	
	$query = "DELETE FROM `take_attendance` WHERE Student_ID = '". $student_id."' and class_id = '".$class_id."'";
	mysqli_query($con, $query);
	header("location: takeview.php?class_id=".$class_id);