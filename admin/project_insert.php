<?php
include "base.php";
if(!empty($_POST['pname']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['pdesc']))
{
    $pname = mysqli_real_escape_string($con, $_POST['pname']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pdesc = mysqli_real_escape_string($con, $_POST['pdesc']);

   // $sql = "INSERT INTO projects (pname, description, phone, email) VALUES ('".$pname."', '".$pdesc."', '".$phone."', '".$email."')";
    
    $insert = mysqli_query($con, "INSERT INTO projects (pname, description, phone, email) VALUES ('".$pname."', '".$pdesc."', '".$phone."', '".$email."')");
     
    if($insert)
    { 
        header("Location: create_project.php"); 
    }
    else
    {
        echo "sql not found";
        header("Location: project_error.php");
    }
}else{
    echo "no data inserted into forms";
    header("Location: project_error.php");
}
?>