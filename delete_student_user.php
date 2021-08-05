<?php
if(empty(trim($_GET["stdid"]))){
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
}
else{

// Include database connection file
require_once "dbconnect.php";

$std_id = $_GET["stdid"];

$sql="DELETE FROM student_api WHERE StudentID = $std_id";
$sql_1="DELETE FROM students WHERE Student_ID = $std_id";

$result = mysqli_query($conn,$sql);
$result_1 = mysqli_query($conn,$sql_1);


if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  header("location: student_user.php");
}
mysqli_close($conn);
}
