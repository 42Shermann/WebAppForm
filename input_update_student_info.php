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
	<title> Update Student Info </title>
</head>

<body>
	<?php
	// Include database connection file
	require_once "dbconnect.php";

	$std_id = $_GET['stdid'];

	$sql = "SELECT Prefix, FirstName, LastName, GPAX, School, Program, Advisor, Dean, Status FROM student_api WHERE StudentID = $std_id";
	$result = mysqli_query($conn, $sql);

	?>
	<div class="container">
		<div class="row"></div>
		<h1 class="mt-5">Update Student Info</h1>
		<hr>
		<form action="update_student_info.php" method="post">
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				$prefix = $row["Prefix"];
				$fname = $row["FirstName"];
				$lname = $row["LastName"];
				$gpax = $row["GPAX"];
				$school = $row["School"];
				$program = $row["Program"];
				$avs = $row["Advisor"];
				$dean = $row["Dean"];
				$status = $row["Status"];
			}
			?>
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
			<input type="hidden" name="stdid" value="<?= $std_id ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Prefix</label>
				<div class="col-sm-10">
					<input type="text" name="prefix" class="form-control" value="<?= $prefix ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">First Name</label>
				<div class="col-sm-10">
					<input type="text" name="fname" class="form-control" value="<?= $fname ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="lname" class="col-sm-2 col-form-label bg-secondary text-white">Last Name</label>
				<div class="col-sm-10">
					<input type="text" name="lname" class="form-control" value="<?= $lname ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">GPAX</label>
				<div class="col-sm-10">
					<input type="number" name="gpax" class="form-control" min="0" max="4" step="0.01" value="<?= $gpax ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">School</label>
				<div class="col-sm-10">
					<select name="school" id="school" onchange="selc1()" class="form-control" required>
						<option><?= $school ?></option>
						<option value="School of Liberal Arts">School of Liberal Arts</option>
						<option value="School of Science">School of Science</option>
						<option value="School of Management">School of Management</option>
						<option value="School of Information Technology">School of Information Technology</option>
						<option value="School of Agro-Industry">School of Agro-Industry</option>
						<option value="School of Law">School of Law</option>
						<option value="School of Cosmetic Science">School of Cosmetic Science</option>
						<option value="School of Health Science">School of Health Science</option>
						<option value="School of Nursing">School of Nursing</option>
						<option value="School of Medicine">School of Medicine</option>
						<option value="School of Dentistry">School of Dentistry</option>
						<option value="School of Social Innovation">School of Social Innovation</option>
						<option value="School of Sinology">School of Sinology</option>
						<option value="School of Integrative Medicine">School of Integrative Medicine</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Program</label>
				<div class="col-sm-10">
					<select name="program" id="bachelor" onchange="selc2()" class="form-control" required>
					<option><?= $program ?></option></select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Advisor</label>
				<div class="col-sm-10">
					<input type="text" name="avs" class="form-control" value="<?= $avs ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Dean</label>
				<div class="col-sm-10">
					<input type="text" name="dean" class="form-control" value="<?= $dean ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label bg-secondary text-white">Status</label>
				<div class="col-sm-10">
					<input type="text" name="sts" class="form-control" value="<?= $status ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<input class="btn btn-success" type="Submit" value="Update Data">
				</div>
			</div>
		</form>
	</div>
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
	DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="an
	onymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundl
	e.min.js" integrity="sha384-
	ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="an
	onymous"></script>
	<script>
		function selc1() {
			let input = document.getElementById("school").value;
			let text = '';
			switch (input) {
				case "School of Liberal Arts":
					text = 
						'<option value="Arts Program">Arts Program</option>';
					break;
				case "School of Science":
					text = 
						'<option value="Engineering Program">Engineering Program</option>' +
						'<option value="Science Program">Science Program</option>';
					break;
				case "School of Management":
					text = 
						'<option value="Accounting Program">Accounting Program</option>' +
						'<option value="Business Administration Program">Business Administration Program</option>' +
						'<option value="Economic Program">Economic Program</option>';
					break;
				case "School of Information Technology":
					text = 
						'<option value="Engineering Program">Engineering Program</option>' +
						'<option value="Science Program">Science Program</option>';
					break;
				case "School of Agro-Industry":
					text = 
						'<option value="Science Program">Science Program</option>' +
						'<option value="Science Program And Business Administration Program">Science Program And Business Administration Program</option>';
					break;
				case "School of Cosmetic Science":
					text = 
						'<option value="Science Program">Science Program</option>';
					break;
				case "School of Law":
					text = 
						'<option value="Laws Program">Laws Program </option>';
					break;
				case "School of Health Science":
					text = 
						'<option value="Science Program">Science Program</option>' +
						'<option value="Public Health Program">Public Health Program</option>';
					break;
				case "School of Nursing":
					text = 
						'<option value="Nursing Science Program (Group A)">Nursing Science Program (Group A) </option>' +
						'<option value="Nursing Science Program (Group B)">Nursing Science Program (Group B) </option>' +
						'<option value="Nursing Science Program (Group D for Foreign Students)">Nursing Science Program (Group D for Foreign Students)</option>';
					break;
				case "School of Medicine":
					text = 
						'<option value="Doctor of Medicine">Doctor of Medicine</option>';
					break;
				case "School of Dentistry":
					text = 
						'<option value="Doctor of Dental Surgery">Doctor of Dental Surgery</option>';
					break;
				case "School of Social Innovation":
					text = 
						'<option value="Arts Program">Arts Program</option>';
					break;
				case "School of Sinology":
					text = 
						'<option value="Arts Program<">Arts Program</option>' +
						'<option value="Education Program">Education Program</option>';
					break;
				case "School of Integrative Medicine":
					text = 
						'<option value="Applied Thai Traditional Medicine">Applied Thai Traditional Medicine</option>' +
						'<option value="Physical Therapy Program">Physical Therapy Program</option>' +
						'<option value="Traditional Chinese Program">Traditional Chinese Program</option>';
					break;
				default:
					break;
			}
			document.getElementById("bachelor").innerHTML = text;
		}
	</script>
</body>

</html>