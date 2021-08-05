<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/mfu_logo_1.png" type="image/x-icon" />
    <title>REG-206</title>
</head>

<body>

    <?php
    // Include database connection file
    require_once "dbconnect.php";
    session_start();
    $std_id = $_SESSION['std_id'];
    $Fname = $_SESSION['fname'];
    $Lname = $_SESSION['lname'];

    if (isset($std_id) && $std_id != '') {
        $sql = "SELECT StudentID,Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE StudentID = $std_id";
    } elseif (isset($Fname) && $Fname != '') {
        $sql = "SELECT StudentID,Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE FirstName = '$Fname'";
    } elseif (isset($Lname) && $Lname != '') {
        $sql = "SELECT StudentID,Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE LastName = '$Lname'";
    }

    //$sql = "SELECT Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE StudentID = $std_id";
    //$sql = "SELECT Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE FirstName = '$Fname'";
    //$sql = "SELECT Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api WHERE LastName = '$Lname'";
    //$sql = "SELECT StudentID,Prefix,FirstName,LastName,GPAX,School,Program,Advisor,Dean,STATUS FROM student_api";
    //$sql = "SELECT * FROM student_api WHERE StudentID LIKE '$std_id%' OR FirstName LIKE '$Fname%' OR LastName LIKE '$Lname%'";

    // $result_1 = mysqli_query($conn, $sql_1);
    // $result_2 = mysqli_query($conn, $sql_2);
    // $result_3 = mysqli_query($conn, $sql_3);
    $result_4 = mysqli_query($conn, $sql);

    ?>

    <?php

    while ($row = mysqli_fetch_assoc($result_4)) {
        $std_id = $row["StudentID"];
        $Pre = $row["Prefix"];
        $Fname = $row["FirstName"];
        $Lname = $row["LastName"];
        $school = $row["School"];
        $C_GPAX = $row["GPAX"];
        $PGR = $row["Program"];
        $AVS = $row["Advisor"];
        $DEAN = $row["Dean"];
        $STS = $row["STATUS"];
    }
    ?>
    <form action="print.php" method="POST">
        <div class="container border-dark border">
            <div class="page-header row">
                <div class="col-sm-6">
                    <img class="images-fluid" src="images/welcome_0.jpg" alt="MFU-REG-logo">
                </div>
                <div class="col-sm-6 mt-1">
                    <h6 class="font-weight-bold text-right">REG-206</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <a href="index_reg.php">
                        <button href="index_reg.php" type="button" class="btn btn-primary col-sm-2 ml-0">Home</button>
                    </a>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="font-weight-bold">Request Form for Register More/Less Credits than those Stipulated</h4>
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="text-center mb-0">Student Info</h5>
                    <hr width="200px mt-0" align="center">
                </div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Student ID:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_id" class="form-control" id="std_id" value="<?= $std_id ?>">
                </div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Student Name:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_name" class="form-control" id="std_name" value="<?= $Pre ?> <?= $Fname ?> <?= $Lname ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Study in:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_school" class="form-control" id="std_school" value="<?= $school ?>">
                </div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Program of:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_pgr" class="form-control" id="std_pgr" value="<?= $PGR ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Student status:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_status" class="form-control" id="std_status" value="<?= $STS ?>">
                </div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">GPAX:</label>
                <div class="col-sm-3">
                    <input type="number" name="std_gpax" class="form-control" id="std_gpax" value="<?= $C_GPAX ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Advisor:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_avs" class="form-control" id="std_avs" value="<?= $AVS ?>">
                </div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Dean:</label>
                <div class="col-sm-3">
                    <input type="text" name="std_dean" class="form-control" id="std_dean" value="<?= $DEAN ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Mobile Phone:</label>
                <div class="col-sm-8">
                    <input type="tel" name="std_phone" class="form-control" id="std_phone" placeholder="Please enter your phone number" required>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="text-center mb-0">Request Info</h5>
                    <hr width="200px mt-0" align="center">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold" for="semester">Semester:</label>
                <div class="col-sm-3">
                    <select name="semester" id="semester" class="form-control">
                        <option selected value="">--Please select Semester--</option>
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Summer">Summer</option>
                    </select>
                </div>
                <label class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold" for="academic_y">Academic year:</label>
                <div class="col-sm-3">
                    <input type="number" name="academic_y" class="form-control" id="academic_y" placeholder="Please enter Academic year" required>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="cur_credit" class="col-sm-4 col-form-label bg-secondary text-white text-right font-weight-bold">To Dean School of:</label>
                <div class="col-sm-6">
                    <select name="d_school" id="d_school" onchange="selc1()" class="form-control" required>
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
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="cur_credit" class="col-sm-4 col-form-label bg-secondary text-white text-right font-weight-bold">The registered credits in current semester:</label>
                <div class="col-sm-6">
                    <input type="number" name="cur_credit" class="form-control" id="cur_credit" placeholder="Enter current credit" required>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="al_credit" class="col-sm-4 col-form-label bg-secondary text-white text-right font-weight-bold">The registered credits would to alter:</label>
                <div class="col-sm-6">
                    <input type="number" name="al_credit" class="form-control" id="al_credit" placeholder="Enter alter credit" required>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label class="col-sm-4 col-form-label bg-secondary text-white text-right font-weight-bold">The total credits registered:</label>
                <div class="col-sm-6 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check" name="check" value="Less">
                        <label class="form-check-label" for="less">Less than 9 credits</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check" name="check" value="More">
                        <label class="form-check-label" for="more">More than 22 credits</label>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <label for="reason" class="col-sm-2 col-form-label bg-secondary text-white text-right font-weight-bold">Reason of request:</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="reason" aria-label="With textarea" placeholder="Enter your reason" required></textarea>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h5 class="text-left">List of courses that make the total credits exceed the credits allowed</h5>
                    <table class="table table-bordered">
                        <thead class="bg-secondary">
                            <tr class="text-white">
                                <th style="width: 20%;">Course code</th>
                                <th style="width: 50%;">Course title</th>
                                <th>Section</th>
                                <th>Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><input type="text" name="c_code_1" maxlength="7" class="form-control" id="c_code_1" placeholder="course code 1"></td>
                                <td scope="row"><input type="text" name="c_title_1" class="form-control" id="c_title_1" placeholder="course title 1"></td>
                                <td scope="row"><input type="number" name="c_section_1" class="form-control" id="c_section_1" placeholder="section"></td>
                                <td scope="row"><input type="number" name="c_credit_1" class="form-control" id="c_credit_1" placeholder="credit"></td>

                            </tr>
                            <tr>
                                <td scope="row"><input type="text" name="c_code_2" maxlength="7" class="form-control" id="c_code_2" placeholder="course code 2"></td>
                                <td scope="row"><input type="text" name="c_title_2" class="form-control" id="c_title_2" placeholder="course title 2"></td>
                                <td scope="row"><input type="number" name="c_section_2" class="form-control" id="c_section_2" placeholder="section"></td>
                                <td scope="row"><input type="number" name="c_credit_2" class="form-control" id="c_credit_2" placeholder="credit"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <a href="index_reg.php"><input class="btn btn-success col-sm-2" type="Submit" value="Print"></a>
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