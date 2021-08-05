<html>
<head>
       <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <title>Login Page</title>     
   </head>
   <body>
   
<?php
   include("dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = " SELECT Staff_ID AS Login_ID, Firstname,Lastname,Username,Password,Status FROM staff
               WHERE Username = '$myusername' and Password = '$mypassword'
               UNION
               SELECT Student_ID AS Login_ID, Firstname,Lastname,Username,Password,Status FROM students
               WHERE Username = '$myusername' and Password = '$mypassword'";

      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $StatusCheck = $row['Status'];
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1 && $StatusCheck == 'Admin' ) {
         $_SESSION['login_user'] = $myusername;
         header("location: student_info.php");
      }
      // IF user is not admin, go here.
      elseif ($count == 1 && $StatusCheck == 'Student') {
         $_SESSION['login_user'] = $myusername;
         header("location: index_reg.php");
      }
      else {
         echo '<script>alert("Your Login Name or Password is invalid")</script>'; 

      }
   }
?>

   
              
      <form action = "" method = "post">
         <div class="container border border-dark ">
            <div class="page-header">
                <img src="images/welcome_0.jpg" class="img-fluid" alt="Mae Fah Luang University">
            </div>
            <div class="row">
               <div class="col-sm-12">
                    <h2>Login Page</h2>
               </div>
            </div>
            <div class="form-group ">
               <label for='username'>Username</label>
               <input type = "text" class="form-control" name = "username" id="username" placeholder="username">
               
            </div>
            <div class="form-group ">
               <label for='password'>Password</label>
               <input type = "password" class="form-control" name = "password" id="password" placeholder="password">
               
            </div>
            <div class="form-group">
               <p>If you are not unable to login, please contact staff division.</p>   
               <input type = "submit" class="btn btn-success" value = "Submit">
               <input class="btn btn-primary" type="Reset" value="Clear">
            </div>
         </div>
      </form>
               
           

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
   </body>
</html>