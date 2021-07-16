<?php include "base.php"; 
    //include some php to handle password recovery
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Senior Project Management</title>
<link rel="stylesheet" href="main.css" type="text/css" />
</head>  
        <body>  
            <div class="box">   
                <form method="post" action="recover_password.php" name="registerform" id="registerform">
                   <center>
                    <h1>Recover Password</h1>

                    <p>Please enter your email and phone number below.</p>
                        <fieldset>
                           Email: <input class="form-control" type="text" name="email" id="email" required="true" /><br />
                           Phone#: <input class="form-control" type="text" name="phone" id="phone" required="true" /><br />
                           
                           <input class="button" type="submit" name="register" id="register" value="Send Email" />
                        </fieldset>
                        <a href="index.php">Return to Login</a>
                    </center>
                </form> 
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