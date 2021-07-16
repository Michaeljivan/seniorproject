<?php
// if role == admin allow access here
include "base.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Admin Access</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user_admin.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="approve_projects.php" class="w3-bar-item w3-button">Approve Projects</a>
		<a href="approve_teams.php" class="w3-bar-item w3-button">Approve Teams</a>
		<a href="approve_advisors.php" class="w3-bar-item w3-button">Approve Advisors</a>
		<a href="approve_students.php" class="w3-bar-item w3-button">Approve Students</a>
		<a href="approve_clients.php" class="w3-bar-item w3-button">Approve Clients</a>	
		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
	<body>


		<div class="w3-display-middle">
			<center><strong>admin page</strong></center>
			<a href="approve_projects.php" class="w3-bar-item w3-button">Approve Projects</a>
		<a href="approve_teams.php" class="w3-bar-item w3-button">Approve Teams</a>
		<a href="approve_advisors.php" class="w3-bar-item w3-button">Approve Advisors</a>
		<a href="approve_students.php" class="w3-bar-item w3-button">Approve Students</a>
		<a href="approve_clients.php" class="w3-bar-item w3-button">Approve Clients</a>	
		</div>	

	</body>
</html>