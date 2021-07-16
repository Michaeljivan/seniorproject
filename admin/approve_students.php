<?php
	include "base.php";
	$sql = "SELECT * FROM users WHERE approved = '0' AND role = 'Student'";
	$project_data = mysqli_query($con, $sql);
	$i = 1; // counter for checkboxes
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
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
		<h3>Here are Student Accounts, please approve:</h3><br>
			<form action="process_approve_students.php" method="post">
				<table class="w3-table-all">
					<tr align="center">
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Role</th>
						<th>Class</th>
						<th>Semester</th>
						<th>Mark</th>
					</tr>
					<?php
							while ($row = mysqli_fetch_array($project_data)){
								echo "<tr> 
									  <td>{$row['first_name']}</td>
									  <td>{$row['last_name']}</td>
									  <td>{$row['username']}</td>
									  <td>{$row['email']}</td>
									  <td>{$row['phone']}</td>
									  <td>{$row['role']}</td>
									  <td>{$row['class']}</td>
									  <td>{$row['semester']}</td>
									  <td><input type='checkbox' name='check[$i]' value='".$row['first_name']."'></td>
									</tr>";
								$i++;
							}
					?>

				</table>
					<center>
						<input class="w3-button w3-red" type="submit" name="delete" value="Delete">
						<input class="w3-button w3-blue" type="submit" name="cancel" value="Cancel">
						<input class="w3-button w3-green" type="submit" name="approve" value="Approve">
					</center>
		    </form>
	</body>
</html>
