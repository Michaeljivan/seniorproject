<?php include "base.php"; 
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $error = "This username/passsword is invalid <a href='lostpassword.php' >Forgot Password?</a><br>";
  $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' AND approved ='1'";

  $checklogin = mysqli_query($con, $sql); 
  
  if(mysqli_num_rows($checklogin) == 1){
    while($row = mysqli_fetch_array($checklogin)){
      if($row['role'] == 'Client'){
        $_SESSION['username'] = $username;
        header("Location: client/user.php");
        //echo "client";
      }elseif($row['role'] == 'Advisor'){
        $_SESSION['username'] = $username;
        header("Location: advisor/user.php");
        //echo "advisor";
      }elseif($row['role'] == 'Student'){
        $_SESSION['username'] = $username;
        header("Location: student/user.php");
        //echo "student";
      }elseif($row['role'] == 'ADMIN'){
        $_SESSION['username'] = $username;
        header("Location: admin/user_admin.php");
      }
    }
  }
  else{
      $_SESSION['error'] = $error;
      header("Location: index.php");
  }
?>