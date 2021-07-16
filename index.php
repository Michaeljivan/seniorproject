<?php include "base.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>Senior Project System</title>
        <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>  
    <body >
      <div class="login-box">
          <!-- Login box -->
            <form method="post" action="login.php" name="loginform" id="loginform">
                <div class="box">
                  <h1>Senior Project Management System</h1>

                  <?php
                                if(isset($_SESSION['error'])){
                                    $error = $_SESSION['error'];
                                    echo "<span>$error</span><br>";
                                }
                      ?>  

                  <input type="text" name="username" id="username" required="true" placeholder="Username" onFocus="field_focus(this, 'username');" onblur="field_blur(this, 'Username');" class="username" />
                    
                  <input type="password" name="password" id="password" required="true" placeholder="Password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'Password');" class="password" />
                    
                   <!-- buttons -->
                   <input type="submit" name="login" id="login" value="Login" class="btn" />
                  <a href="reg_selection.php"><div id="btn2">Create an Account</div></a>
                </div> <!-- End Box -->
              
            </form>
        </div>

        <center>
        <sub>Copy Right @2018 Software Seven</sub><br>
        v1.4 <a href="log.php">Back Log</a> |  <a href="contact.php">Contact</a>
       </center>
    </body>
</html>


<style type="text/css">
  #login:hover{
    background-color: lightgreen;
    cursor: pointer;
  }
  span{color: red;}
  a{color: blue;}
  .login-box{padding-top: 200px;}
</style>

<script type="text/javascript">
  function field_focus(field, email)
  {
    if(field.value == email)
    {
      field.value = '';
    }
  }

  function field_blur(field, email)
  {
    if(field.value == '')
    {
      field.value = email;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

// //Stop click event
// $('a').click(function(event){
//     event.preventDefault(); 
//   });
</script>