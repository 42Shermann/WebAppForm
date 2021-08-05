<?php
if(empty(trim($_POST["stdid"]))){
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
}
else{

// Include database connection file
require_once "dbconnect.php";

$stdid=$_POST['stdid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$status=$_POST['sts'];

$sql="UPDATE students SET Firstname = '$fname', 
                             Lastname = '$lname',
                             Username = '$user',
                             Password = '$pass',
                               Status = '$status'
                                WHERE Student_ID = $stdid";
$result = mysqli_query($conn,$sql);

if (!$result)
  {
  die('Error: ' . mysqli_error($conn));
  }
else {
    header("location: student_user.php");
}
mysqli_close($conn);
}
