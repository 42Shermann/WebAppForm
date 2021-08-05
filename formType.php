<?php
    $formType=$_POST['formType'];
    $std_id=$_POST['std_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

    session_start(); 
if ($std_id == "" and $fname == "" and $lname == "") {
    echo "Empty Input";
} else {
    if ($formType == "REG-206") 
    {
        $_SESSION['std_id'] = $std_id;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;

        header('Location: reg-206.php');
        exit;
    } 
    elseif ($formType== "REG-205")
    {
        $_SESSION['std_id'] = $std_id;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;

        header('Location: view_data.php');
        exit;
    }
    else 
    { 
        echo "Wrong Select";
    }
}
?>