<?php
if (empty(trim($_POST["stdid"]))) {
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
} else {

  // Include database connection file
  require_once "dbconnect.php";
  $stdid = $_POST["stdid"];
  $password = $_POST['password'];


  $sql = "UPDATE students SET Password = '$password' WHERE Student_ID = $stdid";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die('Error: ' . mysqli_error($conn));
  } else {
    header("location: index_reg.php");
  }
  mysqli_close($conn);
}
