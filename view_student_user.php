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
	<title> View Student User </title>
</head>

<body>
	<?php
	// Include database connection file
	require_once "dbconnect.php";

	$std_id = $_GET['stdid'];

	$sql = "SELECT * FROM students WHERE Student_ID = $std_id";
	$result = mysqli_query($conn, $sql);

	?>

	<?php
	while ($row = mysqli_fetch_assoc($result)) {
		$std_id = $row["Student_ID"];
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
        $user = $row["Username"];
        $pass = $row["Password"];
		$status = $row["Status"];
	}
	?>
	<div class="container">
		<h1>Employee Data</h1>
		<hr>
		<div class="form-group row">
			<a class="col-sm-2 btn-primary btn btn-block text-left" href="student_info.php">Home</a>
			<div class="col-sm-10"></div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">Student ID</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $std_id ?></label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">First Name</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $fname ?></label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">Last Name</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $lname ?></label>
			</div>
        </div>
        <div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">Username</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $user ?></label>
			</div>
        </div>
        <div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">Password</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $pass ?></label>
			</div>
        </div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label bg-secondary text-white">Status</label>
			<div class="col-sm-10">
				<label class="col-sm-10 col-form-label bg-info text-white"><?= $status ?></label>
			</div>
		</div>
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