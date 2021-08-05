<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/mfu_logo_1.png" type="image/x-icon" />
    
    <title>Academic Request Forms Mae Fah Luang University</title>
</head>

<body>
    <form action="formType.php" method="post">
        <div class="container border border-dark">
            <div class="page-header">
                <img src="images/welcome_0.jpg" class="img-fluid" alt="Mae Fah Luang University">
            </div>
            <?php
            include('session.php');
            ?>
            <div class="row ml-auto mr-auto">
                <div class="col-6 mb-1">
                    <h4>Welcome,
                        <?php echo $login_session; ?>
                        <?php echo $lname; ?>
                    </h4>
                    <p><a href="input_std_pass.php?stdid=<?= $username; ?>">Change Password</a></p>
                </div>
                <div class="col-6 text-right mb-1 ">
                    <h4><a class="btn btn-danger" href="logout.php">Sign Out</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-sm-11">
                    <h2>Academic Request Forms</h2>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right" for="inputForm">Select
                    Form</label>
                <div class="col-sm-8">
                    <select name="formType" id="inputForm" class="form-control" required>
                        <option selected value="">--Please select forms type--</option>
                        <option value="REG-205">REG-205</option>
                        <option value="REG-206">REG-206</option>
                    </select>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right">Student ID</label>
                <div class="col-sm-8">
                    <input type="text" name="std_id" class="form-control" id="std_id" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right">First Name</label>
                <div class="col-sm-8">
                    <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $login_session; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-1"></label>
                <label for="lname" class="col-sm-2 col-form-label bg-secondary text-white text-right">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" name="lname" class="form-control" id="lname" value="<?php echo $lname; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="btn btn-success col-sm-2" type="Submit" value="Confirm">
                    <input class="btn btn-primary col-sm-2" type="Reset" value="Clear">
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>