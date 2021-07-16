<?php
	 include "base.php";

	if(!isset($_SESSION["username"])){
		header("Location: ../index.php");
		exit(); 
	}
	// echo "Welcome back, Student [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

	 $user = $_SESSION['username'];
	 //$email =$_SESSION['email'];

	 $sql = "SELECT * FROM messages WHERE to_username = '".$user."' ";

	 $user_data = mysqli_query($con, $sql);
	// $ = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Messages</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Student</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="my_project.php" class="w3-bar-item w3-button">My Project</a>
		<a href="my_team.php" class="w3-bar-item w3-button">My Team</a>
		<a href="projects.php" class="w3-bar-item w3-button">Available Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">Join a Team!</a>
		<a href="create_team.php" class="w3-bar-item w3-button">Create Your Team!</a>
		<a href="messages.php" class="w3-bar-item w3-button w3-blue">Messages</a>
		
		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
	<body>
		<center><strong><h2>Client Feedback</h2></strong><br></center>
		<?php
			   	while($row = mysqli_fetch_array($user_data)){
		?>
		<?php echo "<i><strong>Feedback Rating: {$row['rating']}</strong></i>"; ?>
			<div class="w3-panel w3-yellow w3-bottombar w3-border-amber">
				<center>
			   		<?php echo "<i><strong>From: {$row['from_username']} </strong> @{$row['sent_time']}</i><br>"; ?>
					<?php echo "{$row['message']}<br>";?>	
				</center>
			 </div>
		<?php	 	 
			    }
		?>
		</div>
	</body>
</html>

<style type="text/css">
	
	body{
		background-color:  #f3fbfc;
	}
	
	.master{display: inline-block;}
</style>
