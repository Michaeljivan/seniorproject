<?php
	$role = $_GET['role'];
	switch ($role) {
		case "Advisor":
			header("Location: register_advisor.php");
			break;
		case "Student":
			header("Location: register_student.php");
			break;
		case "Client":
			header("Location: register_client.php");
			break;	
		default:
			header("Location: create_account.php");
			break;
	}
?>