<?php
	 include "base.php";

	if(!isset($_SESSION["username"])){
		header("Location: ../index.php");
		exit(); 
	}
	// echo "Welcome back, Student [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

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
	$(document).ready(function(){
	    $("#flip3").click(function(){
	        $("#panel3").slideDown("slow");
	    });
	});
	$(document).ready(function(){
	    $("#flip4").click(function(){
	        $("#panel4").slideDown("slow");
	    });
	});
	</script>
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Student</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button w3-blue">Main Menu</a>
		<a href="my_project.php" class="w3-bar-item w3-button">My Project</a>
		<a href="my_team.php" class="w3-bar-item w3-button">My Team</a>
		<a href="projects.php" class="w3-bar-item w3-button">Available Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">Join a Team!</a>
		<a href="create_team.php" class="w3-bar-item w3-button">Create Your Team!</a>
		<a href="messages.php" class="w3-bar-item w3-button">Messages</a>

		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
<body>
	
		<?php
		   	while($row = mysqli_fetch_array($user_data)){


		?>
		<div id="flip" class="profile">
			<center><h1>My Profile</h1></center>
			<div id="panel">
				<div class="row">
				  <div class="column" style="background-color:#ffdd99;">
				    <h2>My Name:</h2>
				    <p>
				  			<?php echo "{$row['first_name']}<br>"; ?><?php echo "{$row['last_name']}<br>"; ?>				    		
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

		<div id="flip2" class="client">
				<center><h1>My Client</h1></center>
			<div id="panel2">
				<div class="row">
				  <div class="column" style="background-color:#ffdd99;">
				    <h2>Name:</h2>
				    <p>
				    		
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffe6b3;">
				    <h2>Email:</h2>
				    <p>
				    	
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffeecc;">
				    <h2>Phone:</h2>
				    <p>
				    	
				    </p>
				  </div>
				  
				</div>
			</div>
		</div>

		<div id="flip3" class="advisor">
				<center><h1>My Advisor</h1></center>
			<div id="panel3">
				<div class="row">
				  <div class="column" style="background-color:#ffdd99;">
				    <h2>Name:</h2>
				    <p>
				    		
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffe6b3;">
				    <h2>Email:</h2>
				    <p>
				    	
				    </p>
				  </div>
				  <div class="column" style="background-color:#ffeecc;">
				    <h2>Phone:</h2>
				    <p>
				    	
				    </p>
				  </div>
				  
				</div>
			</div>
		</div>


		<div id="flip4" class="team">
			<center><h1>My Senior Project Team</h1></center>
			<div id="panel4">
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
	#client:before{
		padding-top:50px;
		display:block;
		content:"";
	}
	body{
		background-color:  #f3fbfc;
	}
	.profile{
		cursor: pointer;
		background-color: #ffffff;
	}
	.client{
		cursor: pointer;
		background-color:  #ffd480   ;
	}
	.client:hover, .profile:hover, .advisor:hover, .team:hover{
		color: blue;
	}
	.advisor{
		cursor: pointer;
		background-color:  #00cc66 ;
	}
	.team{
		cursor: pointer;
		background-color:   #5dade2;
	}

	.master{
		display: inline-block;
	}

	#flip, #flip2, #flip3, #flip4 {
	    padding: 5px;
	    text-align: center;
	    background-color: #e5eecc;
	    border: solid 1px #c3c3c3;
	}

	#panel, #panel2, #panel3, #panel4 {
	    padding: 50px;
	    display: none;
	}
</style>