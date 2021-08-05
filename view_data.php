<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title> Student Data </title>
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
session_start(); 
$std_id = $_SESSION['std_id'];
$sql="SELECT FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE StudentID = $std_id";
$result = mysqli_query($conn,$sql);
?>

<div class="container-fluid">

    <h2>Student Data</h2>

<?php

while($row = mysqli_fetch_assoc($result)) {
    $Fname = $row["FirstName"];
    $Lname = $row["LastName"];
    $C_GPAX = $row["GPAX"];
    $PGR = $row["Program"];
    $AVS = $row["Advisor"];
    $DEAN = $row["Dean"];
    $STS = $row["STATUS"];

}
?>
    Student ID: <?= $std_id ?> <br/>
    Name: <?= $Fname?> <?=$Lname ?> <br/>
    GPAX: <?= $C_GPAX ?> <br/>
    Program: <?= $PGR ?> <br/>
    Advisor: <?= $AVS ?> <br/>
    Dean: <?= $DEAN ?> <br/>
    Student Status: <?= $STS ?> <br/><br/>

<button type="button" class="btn btn-dark" >
<a href="index_reg.php" style="background-color: transparent;text-decoration: none;color: white;">Return</a>
</button>

</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="an
onymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="an
onymous"></script>      

</body>
</html>