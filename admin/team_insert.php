<?php
include "base.php";

if(!isset($_SESSION["username"])){
        header("Location: ../index.php");
        exit(); 
    }

if(!empty($_POST['tname']) && !empty($_POST['class']) && !empty($_POST['sem']) && !empty($_POST['num']) && !empty($_POST['motto']))
{
    $tname = mysqli_real_escape_string($con, $_POST['tname']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $semester = mysqli_real_escape_string($con, $_POST['sem']);
    $members = mysqli_real_escape_string($con, $_POST['num']);
    $motto = mysqli_real_escape_string($con, $_POST['motto']);
   
    $insert = mysqli_query($con, "INSERT INTO teams (tname, class, semester, num_members, motto) VALUES ('".$tname."', '".$class."', '".$semester."', '".$members."', '".$motto."')");
     
    if($insert)
    { 
        header("Location: creat_team.php"); 
    }
    else
    {
        header("Location: team_error.php");
    }
}else{
    echo "no data inserted into forms";
    header("Location: team_error.php");
}
?>