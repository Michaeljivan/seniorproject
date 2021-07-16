<?php
	 include "base.php";

	if(!isset($_SESSION["username"])){
		header("Location: ../index.php");
		exit(); 
	}
	// echo "<strong>Admin Access</strong> [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

	 $user = $_SESSION['username'];

	 //$sql_user = "SELECT * FROM users  WHERE username = '".$user."' ";

	//prepared statements
	 $sql_client  = "SELECT * FROM users WHERE role ='Client' AND approved = '1'";
	 $sql_advisor = "SELECT * FROM users WHERE role ='Advisor' AND approved = '1'";
	 $sql_student = "SELECT * FROM users WHERE role ='Student' AND approved = '1'";
	 $sql_teams   = "SELECT * FROM teams WHERE approved ='1'";

	// queries
	 $client_data 	= mysqli_query($con, $sql_client);
	 $advisor_data 	= mysqli_query($con, $sql_advisor);
	 $student_data 	= mysqli_query($con, $sql_student);
	 $team_data 	= mysqli_query($con, $sql_teams);

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
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Admin Access</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user_admin.php" class="w3-bar-item w3-button w3-blue">Main Menu</a>
		<a href="projects.php" class="w3-bar-item w3-button">All Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">All Teams</a>
		<a href="create_project.php" class="w3-bar-item w3-button">Create Project</a>
		<a href="create_team.php" class="w3-bar-item w3-button">Create Team</a>
		<a href="admin_page.php" class="w3-bar-item w3-button">Manage</a>

		<a style="float: right;" href="../logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
<body>
		<div id="flip" class="client">
			<center><h1>All Clients</h1></center>
			 <div id="panel">
				<div class="row">
				  <div class="column" style="background-color:#ffdd99;">
				  	<table class="w3-table-all w3-hoverable">
						<tr align="center">
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
						<?php
								while ($row = mysqli_fetch_array($client_data)){
									echo "<tr>
										  <td>{$row['first_name']}</td>
										  <td>{$row['last_name']}</td>
										  <td>{$row['username']}</td>
										  <td>{$row['email']}</td>
										  <td>{$row['phone']}</td>									 
										  </tr>";
								}
						?>
					</table>
				   </div>
				</div>
			</div>
		</div>
		
	
		<div id="flip2" class="advisor">
			<center><h1>All Advisors</h1></center>
			<div id="panel2">
				<div class="row">
				<table class="w3-table-all w3-hoverable">
						<tr align="center">
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Phone</th>
							
						</tr>
						<?php
								while ($row = mysqli_fetch_array($advisor_data)){
									echo "<tr>
										  <td>{$row['first_name']}</td>
										  <td>{$row['last_name']}</td>
										  <td>{$row['username']}</td>
										  <td>{$row['email']}</td>
										  <td>{$row['phone']}</td>									 
										  </tr>";
								}
						?>
					</table>
				</div>
			</div>
		</div>

		<div id="flip3" class="student">
			<center><h1>All Students</h1></center>
			<div id="panel3">
				<div class="row">
				<table class="w3-table-all w3-hoverable">
						<tr align="center">
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Class</th>
							<th>Semester</th>
							<th>Phone</th>
							
						</tr>
						<?php
								while ($row = mysqli_fetch_array($student_data)){
									echo "<tr>
										  <td>{$row['first_name']}</td>
										  <td>{$row['last_name']}</td>
										  <td>{$row['username']}</td>
										  <td>{$row['email']}</td>
										  <td>{$row['class']}</td>
										  <td>{$row['semester']}</td>
										  <td>{$row['phone']}</td>									 
										  </tr>";
								}
						?>
					</table>
				</div>
			</div>
		</div>

		<div id="flip4" class="teams">
			<center><h1>All Teams</h1></center>
			<div id="panel4">
				<div class="row">
				<table class="w3-table-all w3-hoverable">
						<tr align="center">
							<th>Team Name</th>
							<th>Class</th>
							<th>Semester</th>
							<th>Motto</th>
							<th>Number of Members</th>						
						</tr>
						<?php
								while ($row = mysqli_fetch_array($team_data)){
									echo "<tr>
										  <td>{$row['tname']}</td>
										  <td>{$row['class']}</td>
										  <td>{$row['semester']}</td>
										  <td>{$row['motto']}</td>
										  <td>{$row['num_members']}</td>
										  </tr>";
								}
						?>
					</table>
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
	.client{
		/*min-height: 500px;*/
		cursor: pointer;
		background-color:  #ffd480   ;
	}
	.advisor{
		/*min-height: 500px;*/
		cursor: pointer;
		background-color:  #00cc66 ;
	}
	.teams{
		/*min-height: 500px;*/
		cursor: pointer;
		background-color:   #5dade2;
	}
	.student{
		/*min-height: 500px;*/
		cursor: pointer;
		background-color: #c7ccd6;
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
