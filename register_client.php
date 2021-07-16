<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Senior Project Management</title>
<!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
<link rel="stylesheet" type="text/css" href="main.css">
</head>  
<body>  
<div class="box">

     
    <form method="post" action="process_register_client.php" name="registerform" id="registerform">
       <center>
        <h1>Client Registration Form</h1>
         
        <?php if(isset($fmsg)){ ?><div class="#" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

        <p>Please enter your details below to register as a Client.</p>
            <fieldset>
              <input class="form-control" type="text" name="fname" id="fname" required="true" placeholder="First" /><sup>First Name</sup><br />
              <input class="form-control" type="text" name="lname" id="lname" required="true" placeholder="Last" /><sup>Last Name</sup><br />
              <input class="form-control" type="text" name="username" id="username" required="true" placeholder="Username" /><sup>Username</sup><br />
              <input class="form-control" type="password" name="password" id="password" required="true" placeholder="Password" /><sup>Password</sup><br />
              <input class="form-control" type="password" name="password" id="password" required="true" placeholder="Re-enter Password" /><sup>Re-enter Password</sup><br />
              <input class="form-control" type="text" name="email" id="email" required="true" placeholder="example@email.com" /><sup>Email</sup><br />
              <input class="form-control" type="text" name="phone" id="phone" maxlength="10" minlength="10" required="true" placeholder="1234567890" /><sup>Phone#</sup><br />

                 
                <select name="role" id="role" class="form-control" required="true">
                    <option value="Client" selected="true">Client</option>
                </select><sup>Person</sup><br/><br>

               <input class="button" type="submit" name="register" id="register" value="Register" />
            </fieldset>
            <a href="create_account.php">Back</a>
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