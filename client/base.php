<?php
session_start();
 
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "spm"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the username that you created, or were given, to access your database
$dbpass = ""; // the password that you created, or were given, to access your database

//check connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// or die("MySQL Error: " . mysql_error());
//mysqli_select_db($dbname) or die("MySQL Error: " . mysqli_connect_error());
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>