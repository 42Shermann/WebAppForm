<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="MyCSS.css" type="text/css" rel="stylesheet" />

    <title>REG-206-Print</title>
</head>

<body>
    <?php
    $std_id = $_POST['std_id'];
    $std_name = $_POST['std_name'];
    $std_school = $_POST['std_school'];
    $std_pgr = $_POST['std_pgr'];
    $std_status = $_POST['std_status'];
    $std_gpax = $_POST['std_gpax'];
    $std_avs = $_POST['std_avs'];
    $std_dean = $_POST['std_dean'];
    $std_phone = $_POST['std_phone'];
    $semester = $_POST['semester'];
    $academic_y = $_POST['academic_y'];
    $cur_credit = $_POST['cur_credit'];
    $al_credit = $_POST['al_credit'];
    $check = $_POST['check'];
    $reason = $_POST['reason'];
    $d_school = $_POST['d_school'];
    $c_code_1 = $_POST['c_code_1'];
    $c_code_2 = $_POST['c_code_2'];
    $c_title_1 = $_POST['c_title_1'];
    $c_title_2 = $_POST['c_title_2'];
    $c_section_1 = $_POST['c_section_1'];
    $c_section_2 = $_POST['c_section_2'];
    $c_credit_1 = $_POST['c_credit_1'];
    $c_credit_2 = $_POST['c_credit_2'];

    ?>

    <form action="..." method="POST">
        <div class="container-fluid">
            <div class="row">
                <div class="col-11"></div>
                <div class="col-1">REG-206</div>
            </div>
            <div class="row mt-2">
                <div class="col-1"></div>
                <div class="col-3" style="text-align: left;">
                    <div class="border border-dark small">
                        <div class="row" style="padding-left: 20px; font-weight: bold;">School of<input type="text" class="line" style="width: 180px;"></div>
                        <div class="row mt-1" style="padding-left: 60px; font-weight: bold;">Mae Fah Lunag University</div>
                        <div class="row" style="padding-left: 20px;">No.<input type="text" class="line" style="width: 220px;"></div>
                        <div class="row" style="padding-left: 20px;">Date<input type="text" class="line" style="width: 213px;"></div>
                        <div class="row mb-2" style="padding-left: 20px;">Time<input type="text" class="line" style="width: 70px;">
                            Recorded by<input type="text" class="line" style="width: 65px; "></div>
                    </div>
                </div>
                <div class="col-5" style="text-align: center;"><img src="images/logo.jpg" alt="logo" class="img-fluid " style="width: 80px;"></div>
                <div class="col-3" style="text-align: left;">
                    <div class="border border-dark small">
                        <div class="row" style="padding-left: 75px; font-weight: bold;">The Registrar Division</div>
                        <div class="row mt-1" style="padding-left: 60px; font-weight: bold;">Mae Fah Lunag University</div>
                        <div class="row" style="padding-left: 20px;">No.<input type="text" class="line" style="width: 220px;"></div>
                        <div class="row" style="padding-left: 20px;">Date<input type="text" class="line" style="width: 213px;"></div>
                        <div class="row mb-2" style="padding-left: 20px;">Time<input type="text" class="line" style="width: 70px;">
                            Recorded by<input type="text" class="line" style="width: 65px;"></div>
                    </div>
                </div>
            </div>


            <div class="page-header fluid" style="text-align: center; font-weight: bold;">
                <div class="row mt-3">
                    <div class="col-12">REGISTER DIVISION, MAE FAH LUANG UNIVERSITY</div>

                </div>
                <div class="row mt-2">
                    <div class="col-12" style="font-size: 20px;">Request Form for Register More/Less Credits than those Stipulated</div>
                </div>
            </div>


            <div class="row mt-2" style="font-weight: bold;">
                <div class="col-2" style="margin-right: 70px;"></div>
                Semester
                <input type="checkbox" name="first" id="first" style="margin-right: 10px;margin-left: 50px;">First
                <input type="checkbox" name="sec" id="sec" style="margin-right: 10px; margin-left: 30px;">Second
                <input type="checkbox" name="summer" id="summer" style="margin-right: 10px; margin-left: 30px;">Summer
                &nbsp;&nbsp; Academic year <input type="text" name="year" id="year" class="line" value="<?= $academic_y ?>" style="width: 100px;">
            </div>

            <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col-8">(1) To The Dean of School <input type="text" name="school" id="school" class="line" value="<?= $d_school  ?>" style="width: 300px;"></div>
            </div>
            <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col-7" style="padding-left: 35px;">Name<input type="text" name="name" id="name" class="line" value="<?= $std_name ?>" style="width: 550px;"></input></div>
                <div class="col-3">Student ID
                    <td style="padding-left: 50px;"><input type="text" name="char1" id="char1" class="box"><input type="text" name="char2" id="char2" class="box"><input type="text" name="char3" id="char3" class="box"><input type="text" name="char4" id="char4" class="box"></td>
                    <td><input type="text" name="char5" id="char5" class="box"><input type="text" name="char6" id="char6" class="box"><input type="text" name="char7" id="char7" class="box"><input type="text" name="char8" id="char8" class="box"></td>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11">
                    Study in School of
                    <input type="text" name="school" id="school" value="<?= $std_school ?>" class="line" style="width: 250px;">
                    Program of
                    <input type="text" name="pgr" id="pgr" value="<?= $std_pgr ?>" class="line" style="width: 200px;">
                    Mobile Phone
                    <input type="text" name="phone" id="phone" value="<?= $std_phone ?>" class="line" style="width: 200px;">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-4">
                    cumulative grade point average (GPAX)<input type="text" name="std_gpax" id="std_gpax" value="<?= $std_gpax ?>" class="line" style="width: 50px;">
                </div>
                <div class="col-2" style="padding-right: 20px; padding-left: 0px; text-align: center;"> Student status</div>
                <div class="col-1" style="padding-right: 0px; padding-left: 0px;"><input type="checkbox" name="nor" id="nor"> Normal</div>
                <div class="col-4" style="padding-right: 0px; padding-left: 0px;"><input type="checkbox" name="pbt" id="pbt"> Probation No.
                    <input type="text" name="pbtno" id="pbtno" class="line" style="width: 230px;"></div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11">
                    have registrered in the current semester for<input type="text" name="cur_credit" id="cur_credit" value="<?= $cur_credit ?>" class="line" style="width: 60px;">
                    credits and would to alter the registrered credits to <input type="text" name="al_credit" id="al_credit" value="<?= $al_credit ?>" class="line" style="width: 60px;">
                    credits which makes
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11" id="choose">the total credits registrered</div>
            </div>
            <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col-4"><input type="checkbox" name="less" id="less" style="margin-right: 30px;">Less than 9 credits</div>
                <div class="col-1"></div>
                <div class="col-4"><input type="checkbox" name="more" id="more" style="margin-right: 30px;">More than 22 credits</div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11">Reason of request <br>
                    <input type="text" name="reason" id="reason" value="<?= $reason ?>" class="line" style=" width: 1010px;"></div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11">
                    List of courses that the total credits exceed the dredits allowed
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="row" style="text-align: center;">
                        <div class="col-3" style="border: 2px solid black;">Course code</div>
                        <div class="col-5" style="border: 2px solid black;">Course title</div>
                        <div class="col-2" style="border: 2px solid black;">section</div>
                        <div class="col-2" style="border: 2px solid black;">Credits</div>
                    </div>
                    <div class="row">
                        <div class="col-3" style="border: 2px solid black; text-align: left; padding-left: 0px; padding-right: 0px;">
                            <input type="text" name="c11" id="c11" class="box"><input type="text" name="c12" id="c12" class="box"><input type="text" name="" id="c13" class="box"><input type="text" name="" id="c14" class="box"><input type="text" name="" id="c15" class="box"><input type="text" name="" id="c16" class="box"><input type="text" name="" id="c17" class="box">
                        </div>
                        <div class="col-5" style="border: 2px solid black; text-align: center;"><?= $c_title_1 ?></div>
                        <div class="col-2" style="border: 2px solid black; text-align: center;"><?= $c_section_1 ?></div>
                        <div class="col-2" style="border: 2px solid black; text-align: center;"><?= $c_credit_1 ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3" style="border: 2px solid black; text-align: left; padding-left: 0px; padding-right: 0px;">
                            <input type="text" name="" id="c21" class="box"><input type="text" name="" id="c22" class="box"><input type="text" name="" id="c23" class="box"><input type="text" name="" id="c24" class="box"><input type="text" name="" id="c25" class="box"><input type="text" name="" id="c26" class="box"><input type="text" name="" id="c27" class="box">
                        </div>
                        <div class="col-5" style="border: 2px solid black; text-align: center;"><?= $c_title_2 ?></div>
                        <div class="col-2" style="border: 2px solid black; text-align: center;"><?= $c_section_2 ?></div>
                        <div class="col-2" style="border: 2px solid black; text-align: center;"><?= $c_credit_2 ?></div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-11">Remark : After 3 working days of the submission of this request, I will check wether the request has been approved at the Division of Registrar or via <a href="http://reg.mfu.ac.th">http://reg.mfu.ac.th</a> </div>
            </div>
            <div class="row mt-3">
                <div class="col-5"></div>
                <div class="col-2">Student's Signature</div>
                <div class="col-3"><input type="text" class="line" style="width: 190px; "></div>
            </div>
            <div class="row mt-3">
                <div class="col-7"></div>
                <div class="col-5">(<input type="text" name="name" id="name" value="<?= $std_name ?>" class="line" style="width: 190px;">)</div>
            </div>
            <div class="row mt-3">
                <div class="col-7"></div>
                <div class="col-5"><input type="text" class="line" style="margin-left: 40px; width: 40px; ">/<input type="text" class="line" style="width: 40px;">/<input type="text" class="line" style="width: 40px;"></div>
            </div>
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-6" style="border: 2px solid black;">
                    (2) Advisor's Comment
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-8"><input type="text" class="line" style="width: 350px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-8"><input type="text" class="line" style="width: 350px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-2 mt-3">Signature</div>
                        <div class="col-2"></div>
                        <div class="col-4 mt-3"><input type="text" class="line" style="width: 200px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">(<input type="text" name="std_avs" id="std_avs" class="line" value="<?= $std_avs ?>" style="width: 190px;">)</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6"><input type="text" class="line" style="margin-left: 40px; width: 40px;">/<input type="text" class="line" style="width: 40px;">/<input type="text" class="line" style="width: 40px; "></div>
                    </div>
                </div>
                <div class="col-5" style="border: 2px solid black;">
                    (4) Registrar Division's Staff
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-8"><input type="checkbox" name="" id="" style="width: 30px; height: 30px; margin-right: 30px;">Recorded</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-2">Signature</div>
                        <div class="col-2"></div>
                        <div class="col-4"><input type="text" class="line" style="width: 200px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">(<input type="text" class="line" style="width: 190px;">)</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6"><input type="text" class="line" style="margin-left: 40px; width: 40px;">/<input type="text" class="line" style="width: 40px;">/<input type="text" class="line" style="width: 40px; "></div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row mb-3">
                <div class="col-1"></div>
                <div class="col-6" style="border: 2px solid black;">
                    (3) Dean's Comment
                    <div class="row mt-3">
                        <div class="col-1"></div>
                        <div class="col-4" style="padding-right: 0px;"><input type="checkbox" style="width: 30px; height: 30px; margin-right: 10px;"> Approved</div>
                        <div class="col-7" style="padding-left: 0px;"><input type="checkbox" style="width: 30px; height: 30px; margin-right: 20px;"> Disapproved because<input type="text" class="line" style="width: 100px;"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-2">Signature</div>
                        <div class="col-2"></div>
                        <div class="col-4"><input type="text" class="line" style="width: 200px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">(<input type="text" name="std_dean" id="std_dean" value="<?= $std_dean ?>" class="line" style="width: 190px;">)</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6"><input type="text" class="line" style="margin-left: 40px; width: 40px;">/<input type="text" class="line" style="width: 40px;">/<input type="text" class="line" style="width: 40px;"></div>
                    </div>
                </div>
                <div class="col-5" style="border: 2px solid black;">
                    (5) Head of the Registrar Division's comment
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-8"><input type="checkbox" style="width: 30px; height: 30px; margin-right: 20px;"> Acknowledged</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-2">Signature</div>
                        <div class="col-2"></div>
                        <div class="col-4"><input type="text" class="line" style="width: 200px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">(<input type="text" class="line" value="Mr.Ruangsak Kiengkamon" style="width: 190px;">)</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6"><input type="text" class="line" style="margin-left: 40px; width: 40px;">/<input type="text" class="line" style="width: 40px; ">/<input type="text" class="line" style="width: 40px;"></div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

    </form>
    </div>
    </div>
    </script>
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        function char_std_id() {
            var str = "<?= $std_id ?>";
            var res = "";
            var num = [];
            var i;
            var len = str.length;
            for (i = 0; i < str.length; i++) {
                num.push(str.charAt(i));
            }
            document.getElementById("char1").value = num[0];
            document.getElementById("char2").value = num[1];
            document.getElementById("char3").value = num[2];
            document.getElementById("char4").value = num[3];
            document.getElementById("char5").value = num[4];
            document.getElementById("char6").value = num[5];
            document.getElementById("char7").value = num[6];
            document.getElementById("char8").value = num[7];

        }

        function char_course_1() {
            var str = "<?= $c_code_1 ?>";
            var res = "";
            var num = [];
            var i;
            var len = str.length;
            for (i = 0; i < str.length; i++) {
                num.push(str.charAt(i));
            }
            document.getElementById("c11").value = num[0];
            document.getElementById("c12").value = num[1];
            document.getElementById("c13").value = num[2];
            document.getElementById("c14").value = num[3];
            document.getElementById("c15").value = num[4];
            document.getElementById("c16").value = num[5];
            document.getElementById("c17").value = num[6];

        }

        function char_course_2() {
            var str = "<?= $c_code_2 ?>";
            var res = "";
            var num = [];
            var i;
            var len = str.length;
            for (i = 0; i < str.length; i++) {
                num.push(str.charAt(i));
            }
            document.getElementById("c21").value = num[0];
            document.getElementById("c22").value = num[1];
            document.getElementById("c23").value = num[2];
            document.getElementById("c24").value = num[3];
            document.getElementById("c25").value = num[4];
            document.getElementById("c26").value = num[5];
            document.getElementById("c27").value = num[6];

        }

        function lessOrmore() {
            var less = '<?= $check ?>';
            if (less == 'less') {
                document.getElementById("less").checked = true;
            } else {
                document.getElementById("more").checked = true;
            }
        }

        function stat() {
            var stat = '<?= $std_status ?>';
            if (stat == 'Probation1') {
                document.getElementById("pbt").checked = true;
                document.getElementById("pbtno").value = "1";
            } else if (stat == 'Probation2') {
                document.getElementById("pbt").checked = true;
                document.getElementById("pbtno").value = "2";
            } else {
                document.getElementById("nor").checked = true;
            }
        }

        function terms() {
            var terms = '<?= $semester ?>';
            if (terms == 'First') {
                document.getElementById("first").checked = true;
            } else if (terms == 'Second') {
                document.getElementById("sec").checked = true;
            } else {
                document.getElementById("summer").checked = true;
            }
        }
        this.onload = terms();
        this.onload = stat();
        this.onload = lessOrmore();
        this.onload = char_std_id();
        this.onload = char_course_1();
        this.onload = char_course_2();
        window.print();
    </script>
</body>

</html>