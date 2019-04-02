<?php
$Subject_Code = filter_input(INPUT_POST, 'Subject_Code');
$Subject_Title = filter_input(INPUT_POST, 'Subject_Title');
if (!empty($Subject_Code)){
	if (!empty($Subject_Title)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO subject (Subject_Code, Subject_Title)
  values ('$Subject_Code','$Subject_Title')";
  if ($conn->query($sql)){
    header("location: viewsubject.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Subject Title should not be empty";
  die();
}
 }
 else{
  echo "Subject Code should not be empty";
  die();
 }
?>