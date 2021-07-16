<?php
	include 'base.php';
	$error = "Sorry. This message could not be sent.";

	if(isset($_POST['message'])){
		$user = mysqli_real_escape_string($con, $_SESSION['username']);
		$msg = mysqli_real_escape_string($con, $_POST['message']);
		$rate = mysqli_real_escape_string($con, $_POST['rate']);

		// $find_recipient_sql = "SELECT username FROM users WHERE =''";
		// $recipient = mysqli_query($con, );


		$sql = "INSERT INTO messages(from_username, message, to_username, rating, sent_time) VALUES ('".$user."', '".$msg."', 'jivanm', '".$rate."', '".date("h:i:s")."')";

		$insert_query = mysqli_query($con, $sql);
		if($insert_query){
			header("Location: feedback.php");
		}else{
			$_SESSION['error'] = $error;
			header("Location: feedback.php");
		}
	}else{

		$_SESSION['error'] = $error;
		header("Location: feedback.php");
	}

?>