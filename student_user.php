<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-
	to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dis
	t/css/bootstrap.min.css" integrity="sha384-
	TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="an
    onymous">
    <link rel="shortcut icon" href="images/mfu_logo_1.png" type="image/x-icon" />
    <title> Read Student User from Database </title>
</head>

<body>

    <?php
    include('session.php');
    // Include database connection file
    require_once "dbconnect.php";

    // Database query.
    $sql = "SELECT * FROM students ORDER BY Student_ID";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container-fuild ml-5 mr-5">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="student_info.php">Students Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="student_user.php">Students User<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        <div class="row ml-auto mr-auto">
            <div class="col-6 mb-1">
                <h4>Welcome,
                    <?php echo $login_session; ?>
                    <?php echo $lname; ?>
                </h4>
            </div>
            <div class="col-6 text-right mb-1 ">
                <h4><a class="btn btn-danger" href="logout.php">Sign Out</a></h4>
            </div>
        </div>
        <div class="row col-12">
            <h1 class="mt-2">Students Data</h1>
        </div>
        <hr>

        <table class="table table-striped text-center">
            <tr class="table-info">
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Userame</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $std_id = $row["Student_ID"];
                    $fname = $row["Firstname"];
                    $lname = $row["Lastname"];
                    $user = $row["Username"];
                    $pass = $row["Password"];
                    $status = $row["Status"];
            ?>
                    <tr>
                        <td><?= $std_id ?></td>
                        <td><?= $fname ?></td>
                        <td><?= $lname ?></td>
                        <td><?= $user ?></td>
                        <td><?= $pass ?></td>
                        <td><?= $status ?></td>
                        <td>
                            <a class="btn btn-info" href="view_student_user.php?stdid=<?= $std_id ?>">View</a>
                            <a class="btn btn-warning text-white" href="input_update_student_user.php?stdid=<?= $std_id ?>">Update</a>
                            <a class="btn btn-danger" href="delete_student_user.php?stdid=<?= $std_id ?>" onClick="return confirm('Delete this Student?')">Delete</a>
                        </td>
                    </tr>

            <?php

                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>

        </table>
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