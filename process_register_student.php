<?php
include "base.php";

if(isset($_POST['username']) && isset($_POST['password']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $semester = mysqli_real_escape_string($con, $_POST['sem']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    //$sql = "INSERT INTO student (first_name, last_name, username, password, email, phone, class, semester, role) VALUES('".$fname."', '".$lname."', '".$username."', '".$password."', '".$email."', '".$phone."', '".$class."', '".$semester."','".$role."')";
     //users table query testing:
    $sql = "INSERT INTO users(first_name, last_name, username, password, email, phone, class, semester, role, approved) VALUES('".$fname."', '".$lname."', '".$username."', '".$password."', '".$email."', '".$phone."', '".$class."', '".$semester."', '".$role."', 0)";

    $query = mysqli_query($con, $sql);
        
        if($query)
        {
            header("Location: account_created.php");
        }
        else
        {
            echo "User registration failed". mysqli_error($con);
        }
             
}

else
{}
?>