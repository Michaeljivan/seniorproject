<?php include "base.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Admin Access</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user_admin.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="projects.php" class="w3-bar-item w3-button">Available Projects</a>
		<a href="teams.php" class="w3-bar-item w3-button">Senior Project Groups</a>
		<a href="create_project.php" class="w3-bar-item w3-button">Create Project</a>
		<a href="create_team.php" class="w3-bar-item w3-button w3-blue">Create Team</a>
		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>

	<body>		
			
		<form action="team_insert.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
			<h2 class="w3-center">Create Your Team!</h2>
			 
			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-users"></i></div>
			    <div class="w3-rest">
			      <input class="w3-input w3-border" name="tname" id="tname" type="text" placeholder="Team Name" required="true">
			    </div>
			</div>

			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-clone"></i></div>
			    <div class="w3-rest">
			     					<select name="class" id="class" style="width: 15%;" class="w3-input w3-border" required="true">
						                <option value="">-Select Class-</option>
						                <option value="CSC-190">CSC-190</option>
						                <option value="CSC-191">CSC-191</option>
						            </select>
			    </div>
			</div>

			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
			    <div class="w3-rest">
			     					<select name="sem" id="sem" style="width: 15%;" class="w3-input w3-border" required="true">
						                <option value="">-Select Term-</option>
						                <option value="Fall">Fall</option>
						                <option value="Spring">Spring</option>
						            </select>
			    </div>
			</div>

			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-male"></i></div>
			    <div class="w3-rest">
			     <input type="number" name="num" id="num" style="width: 10%;" class="w3-input w3-border" required="true" min="3" max="7">
			    </div>
			</div>

			<div class="w3-row w3-section">
			  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
			    <div class="w3-rest">
					<textarea name="motto" id="motto" placeholder="Team Motto" required="true"></textarea>
			    </div>
			</div>
			<input class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit" name="submit" value="Propose Team">
		</form>













	</body>
</html>