<?php
	 include "base.php"; 

	// if(!isset($_SESSION["username"])){
	// 	header("Location: client/user.php");
	// 	exit(); 
	// }
	// echo "Welcome back, Client [" .$_SESSION['username']."]"; // ". $_SESSION['EmailAddress'];

	 $user = $_SESSION['username'];		

	 $sql = "SELECT * FROM projects WHERE username = '".$user."'";
	 $feedback_data = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
	<header class="w3-bar w3-border w3-light-grey">
		<a href="#"  class="w3-bar-item w3-button""><?php echo "<strong>Faculty Advisor</strong> [" .$_SESSION['username']."]";?></a>
		<a href="user.php" class="w3-bar-item w3-button">Main Menu</a>
		<a href="my_teams.php" class="w3-bar-item w3-button">My Senior Project Groups</a>
		<a href="feedback.php" class="w3-bar-item w3-button w3-blue">Feedback</a>

		<a style="float: right;" href="logout.php" class="w3-bar-item w3-button">Logout</a>
	</header>
<body>
	<div class="container">
		<strong>Working Team:</strong>
			<?php 

				while ($row = mysqli_fetch_array($feedback_data)) {
						
						echo "{$row['team_working']}";
				}
			?><br>					
  									

			<button onclick="document.getElementById('msg-box').style.display='block'" class="w3-button w3-section w3-green w3-ripple w3-padding">Provide Feedback</button>

			<!-- message box modal -->
			<div id="msg-box" class="w3-modal">
				<div class="w3-modal-content">
			      <div class="w3-container">
			        <span onclick="document.getElementById('msg-box').style.display='none'" class="w3-button w3-display-topright w3-red">&times;</span><br><br>
			        	<center>
				        	<div class="w3-container w3-orange">
							  <h2>Direct Message</h2>
							</div>
				        	<?php
		                        if(isset($_SESSION['error'])){
		                            $error = $_SESSION['error'];
		                            echo "<span>$error</span><br>";
		                        }
                  			?>  
				        	<form action="process_message.php" method="post" class="w3-container">
				        		<textarea class="w3-input" name="message" id="message" placeholder="Write a Message" style="width: 100%; height: 100%;"></textarea><br>
				        		<!--rating system 5 stars  -->        		
								<div class="rate">
								  <input type="radio" id="star5" name="rate" value="5" />
								  <label for="star5" title="text">5 stars</label>

								  <input type="radio" id="star4" name="rate" value="4" />
								  <label for="star4" title="text">4 stars</label>

								  <input type="radio" id="star3" name="rate" value="3" />
								  <label for="star3" title="text">3 stars</label>

								  <input type="radio" id="star2" name="rate" value="2" />
								  <label for="star2" title="text">2 stars</label>

								  <input type="radio" id="star1" name="rate" value="1" />
								  <label for="star1" title="text">1 star</label>
								</div>

				        		  <input class="w3-button w3-green" type="submit" value="Send">
				        	</form>
			        	</center>
			      </div>
			    </div>
			</div>
			<!-- message box modal -->
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
	span{color: red;}


	.rate {

	  border: 1px solid #cccccc;
	  float: left;
	  height: 46px;
	  padding: 0 10px;
	}

	.rate:not(:checked) > input {

	  position: absolute;

	  top: -9999px;
	}	 

	.rate:not(:checked) > label {

	  float: right;
	  width: 1em;
	  overflow: hidden;
	  white-space: nowrap;
	  cursor: pointer;
	  font-size: 30px;
	  color: #ccc;
	}

	.rate:not(:checked) > label:before { content: '★ '; }
	.rate > input:checked ~ label { color: #ffc700; }
	.rate:not(:checked) > label:hover, .rate:not(:checked) > label:hover ~ label { color: #deb217; }
	.rate > input:checked + label:hover, .rate > input:checked + label:hover ~ label, .rate > input:checked ~ label:hover, .rate > input:checked ~ label:hover ~ label, .rate > label:hover ~ input:checked ~ label { color: #c59b08; }


</style>
