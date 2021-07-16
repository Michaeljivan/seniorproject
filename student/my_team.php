<?php
	 include "base.php";

	// if(!isset($_SESSION["username"])){
	// 	header("Location: client/user.php");
	// 	exit(); 
	// }
	// echo "Welcome back, Student [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

	 $user = $_SESSION['username'];
	 //$email =$_SESSION['email'];

	// $sql = "SELECT * FROM team WHERE username = '".$user."' ";

	// $user_data = mysqli_query($con, $sql);
	// $ = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Team</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Student</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="my_project.php" class="w3-bar-item w3-button">My Project</a>
		<a href="my_team.php" class="w3-bar-item w3-button w3-blue">My Team</a>
		<a href="projects.php" class="w3-bar-item w3-button">Available Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">Join a Team!</a>
		<a href="create_team.php" class="w3-bar-item w3-button">Create Your Team!</a>
		<a href="messages.php" class="w3-bar-item w3-button">Messages</a>
		
		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
<body>
	
		
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
	.client{
		min-height: 500px;
		background-color:  #ffd480   ;
	}
	.advisor{
		min-height: 500px;
		background-color:  #00cc66 ;
	}
	.instructor{
		min-height: 500px;
		background-color:   #5dade2;
	}

	.master{display: inline-block;}
</style>
