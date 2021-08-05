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
$prefix=$_POST['prefix'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gpax=$_POST['gpax'];
$school=$_POST['school'];
$program=$_POST['program'];
$avs=$_POST['avs'];
$dean=$_POST['dean'];
$status=$_POST['sts'];

$sql="UPDATE student_api SET Prefix = '$prefix' ,
                            FirstName = '$fname', 
                            LastName = '$lname',
                            GPAX = $gpax,
                             School = '$school', 
                             Program = '$program',
                              Advisor = '$avs',
                               Dean = '$dean', 
                               Status = '$status'
                                WHERE StudentID = $stdid";
$result = mysqli_query($conn,$sql);

if (!$result)
  {
  die('Error: ' . mysqli_error($conn));
  }
else {
    header("location: student_info.php");
}
mysqli_close($conn);
}
