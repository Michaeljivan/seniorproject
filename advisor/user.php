<?php
	 include "base.php";

	// if(!isset($_SESSION["username"])){
	// 	header("Location: client/user.php");
	// 	exit(); 
	// }
	// echo "Welcome back, Advisor [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

	 $user = $_SESSION['username'];
	 //$email =$_SESSION['email'];

	 $sql = "SELECT * FROM users WHERE username = '".$user."' ";

	 $user_data = mysqli_query($con, $sql);
	// $ = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script> 
	$(document).ready(function(){
	    $("#flip").click(function(){
	        $("#panel").slideDown("slow");
	    });
	});
	
	$(document).ready(function(){
	    $("#flip2").click(function(){
	        $("#panel2").slideDown("slow");
	    });
	});
	</script>
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Faculty Advisor</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button w3-blue">Main Menu</a>
		<a href="my_teams.php" class="w3-bar-item w3-button">My Senior Project Groups</a>
		<a href="feedback.php" class="w3-bar-item w3-button">Feedback</a>		
		
		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
<body>
	
		<?php
		   	while($row = mysqli_fetch_array($user_data)){
		?>
		<div id="flip" class="advisor">
			<center><h1>My Profile</h1></center>
			<div id="panel">
				<div class="row">
				  <div class="column" style="background-color:#ffdd99;">
				    <h2>My Name:</h2>
				    <p>
				  			<?php echo "{$row['first_name']}<br>"; ?>
				    		
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffe6b3;">
				    <h2>Email:</h2>
				    <p>
				    		<?php echo "{$row['email']}<br>"; ?>
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffeecc;">
				    <h2>Phone:</h2>
				    <p>
				    	<?php echo "{$row['phone']}<br>"; ?>
				    </p>
				  </div>
				</div>
			</div>
		</div>
		<?php
		    }
		?>

		<div id="flip2" class="team">
			<center><h1>My Senior Project Team</h1></center>
			<div id="panel2">
				<div class="row">
				  <div class="column" style="background-color:#67b2e4;">
				    <h2>Group Name:</h2>
				    <p>Some text..</p>
				  </div>
				  <div class="column" style="background-color:#7dbde8;">
				    <h2>Email:</h2>
				    <p>Some text..</p>
				  </div>
				  <div class="column" style="background-color:#93c8ec;">
				    <h2>Phone:</h2>
				    <p>Some text..</p>
				  </div>
				  
				</div>
			</div>
		</div>
</body>
</html>

<style type="text/css">
	#advisor:before{
		padding-top:50px;
		display:block;
		content:"";
	}
	body{
		background-color:  #f3fbfc;
	}
	.advisor{
		cursor: pointer;
		background-color:  #ffd480   ;
	}
	.team{
		cursor: pointer;
		background-color:  #00cc66 ;
	}
	
	.master{
		display: inline-block;
	}
	#flip, #flip2 {
	    padding: 5px;
	    text-align: center;
	    background-color: #e5eecc;
	    border: solid 1px #c3c3c3;
	}

	#panel, #panel2 {
	    padding: 50px;
	    display: none;
	}
</style>
