<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

//Create connection_aborted
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM subject";
$query1 = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<style>
body	{
	background-image: url("picture/web.jpg");
	background-size: cover
}
</style>

<head>
	<title>Class</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="picture/qq1.png" />
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/attendance.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/attendance.js"></script>
</head>

<body>

    <div id="wrapper">
		
       <!-- Sidebar -->
				<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="picture/qq1.png" />
				</li>
				<br>
				<li>
					<a href="home.php" title="Home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="student.php" title="Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Student</a>
				</li>
				<li>
					<a href="subject.php" title="Subject"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Subject</a>
				</li>
				<li>
					<a href="class.php" title="Class"><span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Class</a>
				</li>
				<li>
					<a href="take_attendance.php" title="Take Attendance"><span class="glyphicon glyphicon-check"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take Attendance</a>
				</li>
				<li>
					<a href="studentclass.php" title="Student Class"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Class</a>
				</li>
				<li>
					<a href="genreport.php" title="General Report"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Report</a>
				</li>
				<li>
					<a href="about.php" title="About"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
				</li>
				
			</ul>
		</div>

		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<!-- Menu -->
				<nav class="navbar navbar-green">
					<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
							<span class="icon-bar"></span>                       
							</button>
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;Mobile Attendance</a>
							
							
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>
		
		
		<div class="container">
		<?php require_once 'classprocess.php'; ?>
		 <form method="POST" action="classprocess.php">
		     <center>
			 </br> </br> </br> 
			 <h2> <strong>Add Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h2>
			
				
				<input type="hidden" name="Class_ID" class="form-control" value="<?php echo $Class_ID; ?>" required>
				  
				  
				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Year & Section</label>
				            <div class="col-sm-5">
					<input type="text" name="Section" class="form-control" id="colFormLabel"  value="<?php echo $Section; ?>" required>
				            </div>
		        </div>
				   
				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Subject Code</label>
				            <div class="col-sm-5">
					<select name="Subject_Code" class="form-control"  required>
							<?php while($row = mysqli_fetch_array($query1)):?>
						<option value="First Semester"></option>
						<option value="<?php echo $row['Subject_Code']; ?>"><?php echo $row['Subject_Title']; ?></option>
							<?php endwhile;?>
	
					</select>
				            </div>
		        </div>
				

				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Semester</label>
				            <div class="col-sm-5">
				           
				<select name="Semester" class="form-control" value="<?php echo $Semester; ?>" required>
						<option value="First Semester"></option>
						<option value="First Semester">First Semester</option>
						<option value="Second Semester">Second Semester</option>
						<option value="Summer">Summer</option>
				</select>
						    </div>
		        </div>
				
				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Academic Year</label>
				            <div class="col-sm-5">
					<input type="text" name="Academic_Year" class="form-control" id="colFormLabel"  value="<?php echo $Academic_Year; ?>" required>
				            </div>
		        </div>
				   
				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Schedule Day</label>
				            <div class="col-sm-5">
					<input type="text" name="Schedule_Day" class="form-control" id="colFormLabel"  value="<?php echo $Schedule_Day; ?>" required>
				            </div>
		           </div> 

				<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Schedule Time</label>
				            <div class="col-sm-5">
					<input type="text" name="Schedule_Time" class="form-control" id="colFormLabel"  value="<?php echo $Schedule_Time; ?>" required>
				            </div>
		        </div> 
					
<br>		
				<?php
					if ($update == true):
				?>
					<button class="btn btn-outline-warningbtn btn-sm btn-outline-info" type="submit" name="update">Update</button>&nbsp;&nbsp;
				<?php else: ?>
					<button class="btn-default" type="submit" name="class">Save</button>&nbsp;&nbsp;
				<?php endif; ?>
						

</center>
</form>
         
  
</body>

</html>
