<?php
// Include database connection file
require_once "dbconnect.php";

// Get data from input form
$stdid=$_POST['stdid'];
$prefix=$_POST['prefix'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gpax=$_POST['gpax'];
$school=$_POST['school'];
$program=$_POST['program'];
$avs=$_POST['avs'];
$dean=$_POST['dean'];
$status=$_POST['sts'];

// Insert data
$sql="INSERT INTO student_api(StudentID, Prefix, FirstName, LastName, GPAX, School, Program, Advisor, Dean, Status) VALUES ($stdid, '$prefix', '$fname', '$lname', $gpax, '$school', '$program', '$avs', '$dean', '$status')";
$sql_2="INSERT INTO students(Student_ID, Firstname, Lastname, Username, Password, Status) VALUES ($stdid, '$fname', '$lname', '$stdid', 'ChangeMe', 'Student')";
$result=mysqli_query($conn, $sql);
$result_2=mysqli_query($conn, $sql_2);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  header("location: student_info.php");
}
mysqli_close($conn);
