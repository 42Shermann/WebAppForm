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
	<title> Update Password </title>
</head>

<body>
	<?php
	// Include database connection file
	require_once "dbconnect.php";
	session_start();
	$std_id = $_GET['stdid'];

	$sql = "SELECT Firstname, Lastname FROM students WHERE Student_ID = '$std_id'";
	$result = mysqli_query($conn, $sql);

	?>
	<div class="container">
		<h1>Change Password</h1>
		<hr>
		<form action="update_std_pass.php" method="post">
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				$std_name = $row["Firstname"];
				$l_name = $row["Lastname"];
			}
			?>
			<div class="form-group row">
				<a class="col-sm-2 btn-primary btn btn-block text-left" href="index_reg.php">Home</a>
				<div class="col-sm-10"></div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Student ID</label>
				<div class="col-sm-10">
					<label class="col-sm-10 col-form-label bg-info text-white"><?= $std_id ?></label>
				</div>
			</div>
			<input type="hidden" name="stdid" value="<?= $std_id ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">First Name</label>
				<div class="col-sm-10">
					<input type="text" name="fname" class="form-control" value="<?= $std_name ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="lname" class="col-sm-2 col-form-label bg-secondary text-white">Last Name</label>
				<div class="col-sm-10">
					<input type="text" name="lname" class="form-control" value="<?= $l_name ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" id="password" class="form-control" placeholder="enter new password">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Confirm Password</label>
				<div class="col-sm-10">
					<input type="password" name="check" id="check" onchange="compare()" class="form-control" placeholder="enter confirm password">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button class="btn btn-success"  onclick="alert('Your Password Change!!');" id="button" type="Submit">Update Data</button>
				</div>
			</div>
		</form>
	</div>

	<script>
		var x = document.getElementById("password");
		var y = document.getElementById("check");

		function compare() {

			if (x.value != y.value) {
				alert('Invalid Password!');
				location.reload();
			} 
		}

	</script>
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