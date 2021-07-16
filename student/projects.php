<?php
	include "base.php";
	$sql = "SELECT * FROM projects WHERE approved='1'";
	$project_data = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Student</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="my_project.php" class="w3-bar-item w3-button">My Project</a>
		<a href="my_team.php" class="w3-bar-item w3-button">My Team</a>
		<a href="projects.php" class="w3-bar-item w3-button w3-blue">Available Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">Join a Team!</a>
		<a href="create_team.php" class="w3-bar-item w3-button">Create Your Team!</a>
		<a href="messages.php" class="w3-bar-item w3-button">Messages</a>

		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>

	<body>
		<h3>List of available projects:</h3><br>

				<table class="w3-table-all">
					<tr align="center" class="w3-blue">
						<th>Project Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Project Description</th>
						<th>Action</th>
					</tr>
					<?php
							while ($row = mysqli_fetch_array($project_data)){
								echo "<tr>
									  <td>{$row['pname']}</td>
									  <td>{$row['phone']}</td>
									  <td>{$row['email']}</td>
									  <td>{$row['description']}</td>
									  <td><a href='mailto:{$row['email']}'>Send Email</a></td>
									  </tr>";
							}
					?>
				</table>
	</body>
</html>