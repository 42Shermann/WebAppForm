<?php
   include('dbconnect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $ssql = "SELECT Staff_ID AS Login_ID, Firstname,Lastname,Username,Password,Status FROM staff
            WHERE Username = '$user_check' 
            UNION
            SELECT Student_ID AS Login_ID, Firstname,Lastname,Username,Password,Status FROM students
            WHERE Username = '$user_check' ";
   
   $ses_sql = mysqli_query($conn,$ssql);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $username = $row['Username'];
   $login_session = $row['Firstname'];
   $lname = $row['Lastname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>