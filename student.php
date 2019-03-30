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
    
	
	
	<div class="container">
	 <tr>
	 <center>
			<?php require_once 'stprocess.php'; ?>
			<form method="post" action="stprocess.php">
					<input type="Hidden" name="Student_ID" value="<?php echo $Student_ID; ?>">
					</br></br></br>
					<h2><strong> Add Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h2>
					<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Student ID</label>
				            <div class="col-sm-5">
					<input type="text" name="Student_ID" class="form-control" id="colFormLabel"  value="<?php echo $Student_ID; ?>" required>
				            </div>
		           </div>
					
					
					<div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">First Name</label>
				            <div class="col-sm-5">
					<input type="text" name="First_Name" class="form-control" id="colFormLabel"  value="<?php echo $First_Name; ?>" required>
				            </div>
		           </div>
				   
				   
				   <div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Last Name</label>
				            <div class="col-sm-5">
					<input type="text" name="Last_Name" class="form-control" id="colFormLabel"  value="<?php echo $Last_Name; ?>" required>
				            </div>
		           </div>
				
				  <div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Middle Initial</label>
				            <div class="col-sm-5">
					<input type="text" name="Middle_Initial" class="form-control" id="colFormLabel" placeholder="put(-) if none" value="<?php echo $Middle_Initial; ?>" required>
				            </div>
		           </div>
				   
				   
				    <div class="form-group row">
			             <label for="colFormLabel" class="col-sm-2 col-form-label">Name Extension</label>
				            <div class="col-sm-5">
					<input type="text" name="Name_Extension" class="form-control" id="colFormLabel" placeholder="put(-) if none" value="<?php echo $Name_Extension; ?>" required>
				            </div>
		           </div>
				   
						
				</tr>
<br>
<br>
				<?php
					if ($update == true):
				?>
					<button class="btn btn-outline-warningbtn btn-sm btn-outline-info" type="submit" name="update">Update</button>&nbsp;&nbsp;
				<?php else: ?>
					<button class="btn-default" type="submit" name="student">Save</button>&nbsp;&nbsp;
				<?php endif; ?>
				
	
</div>
</body>

</html>
