<?php

$Host = '';
$db = '';

$db = mysqli_connect('localhost','root','','attendance');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$Subject_Code = $_POST['Subject_Code'];
	$Subject_Title = $_POST['Subject_Title'];
	
	$result = mysqli_query($db, "UPDATE subject SET Subject_Code='$Subject_Code', Subject_Title='$Subject_Title' WHERE Subject_Code='$id'");
	if($result == true){
		header("Location: viewsubject.php");
	}
}
?>
<?php
$Subject_Code = $_GET['Subject_Code'];

$result = mysqli_query($db, "SELECT * FROM subject WHERE Subject_Code='$Subject_Code'");

while($res = mysqli_fetch_array($result))
{
	$Subject_Code = $res['Subject_Code'];
	$Subject_Title = $res['Subject_Title'];
}
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
	<title> Add Student</title>
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
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;Moblie Attendance</a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<div class="container" style="width:300px">
		<form method="post" action=""> 
		<input name="id" type="hidden" value="<?php echo $Subject_Code;?>"/>
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Subject</font></strong></h1></center>
			<label>Subject Code</label>
			<input type="text" class="form-control" value="<?php echo $Subject_Code;?>" id="Subject_Code" placeholder="Enter Subject Code" name="Subject_Code" required>
			<label>Subject Title</label> 
			<input type="text" class="form-control" value="<?php echo $Subject_Title;?>" id="Subject_Title" placeholder="Enter Subject Title" name="Subject_Title" required><br/>
			<center><input class="btn btn-dark" name="update" type="submit" value="Save"></button></center>
		</form>
	</div>
	


</body>

</html>
