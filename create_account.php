<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Senior Project Management</title>
<!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
<link rel="stylesheet" type="text/css" href="main.css">
</head>  
<body>  
<div class="box">

   <center>

    <h1>Create an Account</h1>
     
    <p>Please enter your details below to register.</p>
    <form action="reg_selection.php" action="get">
           <strong>I am a: </strong>
            <select name="role" id="role" class="selectmenu" required="true">
                <option value=""></option>
                <option value="Client">Client</option>
                <option value="Advisor">Advisor</option>
                <option value="Student">Student</option>
            </select><br/><br>

           <input class="button" type="submit" name="register" id="register" value="Next" /><br>
        
    </form><br>
        <a href="index.php">Return to Login</a>
    </center>
    
</div>
</body>
</html>

<style type="text/css">
  #register{
    width: 100px;
  }
  #register:hover{
    background-color: lightgreen;
    cursor: pointer;
  }


</style>