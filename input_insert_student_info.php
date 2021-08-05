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

  <title> Insert Students </title>
</head>

<body>
  <div class="container">
    <div class="row"></div>
    <h1 class="mt-5">Add New Students</h1>
    <hr>
    <div class="form-group row">
      <a class="col-sm-2 btn-primary btn btn-block text-left" href="student_info.php">Home</a>
      <div class="col-sm-10"></div>
    </div>
    <form action="insert_student_info.php" method="post">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">Student ID</label>
        <div class="col-sm-10">
          <input type="number" maxlength="8" mixlength="8" name="stdid" class="form-control" id="stdid" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">Prefix</label>
        <div class="col-sm-10">
          <select name="prefix" id="prefix" class="form-control" required>
            <option>...</option>
            <option value="MR.">MR.</option>
            <option value="MRS.">MRS.</option>
            <option value="MISS">MISS</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">First Name</label>
        <div class="col-sm-10">
          <input type="text" name="fname" class="form-control" id="fname" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="lname" class="col-sm-2 col-form-label bg-secondary text-white">Last Name</label>
        <div class="col-sm-10">
          <input type="text" name="lname" class="form-control" id="lname" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">GPAX</label>
        <div class="col-sm-10">
          <input type="text" name="gpax" class="form-control" id="gpax" min="0" max="4" step="0.01" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">School</label>
        <div class="col-sm-10">
          <select name="school" id="school" onchange="selc1()" class="form-control" required>
            <option>...</option>
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
          <select name="bachelor" id="bachelor" onchange="selc2()" class="form-control" required></select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">Advisor</label>
        <div class="col-sm-10">
          <input type="text" name="avs" class="form-control" id="avs" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">Dean</label>
        <div class="col-sm-10">
          <input type="text" name="dean" class="form-control" id="dean" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label bg-secondary text-white">Status</label>
        <div class="col-sm-10">
          <select name="sts" id="sts" class="form-control" required>
            <option>...</option>
            <option value="Normal">Normal</option>
            <option value="Probation1">Probation1</option>
            <option value="Probation2">Probation2</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <input class="btn btn-success" type="Submit" value="Insert Data">
          <input class="btn btn-primary" type="Reset" value="Reset Data">
        </div>
      </div>

    </form>
  </div>
</body>
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
        text = '<option>...</option>' +
          '<option value="art">Arts Program</option>';
        break;
      case "School of Science":
        text = '<option>...</option>' +
          '<option value="en">Engineering Program</option>' +
          '<option value="sci">Science Program</option>';
        break;
      case "School of Management":
        text = '<option>...</option>' +
          '<option value="acc">Accounting Program</option>' +
          '<option value="ba">Business Administration Program</option>' +
          '<option value="eco">Economic Program</option>';
        break;
      case "School of Information Technology":
        text = '<option>...</option>' +
          '<option value="en">Engineering Program</option>' +
          '<option value="sci">Science Program</option>';
        break;
      case "School of Agro-Industry":
        text = '<option>...</option>' +
          '<option value="sci">Science Program</option>' +
          '<option value="scinbn">Science Program And Business Administration Program</option>';
        break;
      case "School of Cosmetic Science":
        text = '<option>...</option>' +
          '<option value="sci">Science Program</option>';
        break;
      case "School of Law":
        text = '<option>...</option>' +
          '<option value="law">Laws Program </option>';
        break;
      case "School of Health Science":
        text = '<option>...</option>' +
          '<option value="sci">Science Program</option>' +
          '<option value="ph">Public Health Program</option>';
        break;
      case "School of Nursing":
        text = '<option>...</option>' +
          '<option value="nursciA">Nursing Science Program (Group A) </option>' +
          '<option value="nursciB">Nursing Science Program (Group B) </option>' +
          '<option value="nursciD">Nursing Science Program (Group D for Foreign Students)</option>';
        break;
      case "School of Medicine":
        text = '<option>...</option>' +
          '<option value="med">Doctor of Medicine</option>';
        break;
      case "School of Dentistry":
        text = '<option>...</option>' +
          '<option value="med">Doctor of Dental Surgery</option>';
        break;
      case "School of Social Innovation":
        text = '<option>...</option>' +
          '<option value="art">Arts Program</option>';
        break;
      case "School of Sinology":
        text = '<option>...</option>' +
          '<option value="art">Arts Program</option>' +
          '<option value="edu">Education Program</option>';
        break;
      case "School of Integrative Medicine":
        text = '<option>...</option>' +
          '<option value="attm">Applied Thai Traditional Medicine</option>' +
          '<option value="ptp">Physical Therapy Program</option>' +
          '<option value="tcm">Traditional Chinese Program</option>';
        break;
      default:
        break;
    }
    document.getElementById("bachelor").innerHTML = text;
  }
</script>

</html>