<?php
	session_start();
	include("commonTrainers.php");
	redirection(true);
	$username = $_POST["name"];# takes the value from username input
	$password = $_POST["password"];# takes the value from password input
	
	# This dettermines whether the password is right
	# If it is the user is taken to his/her todolist
	# If not an error is shown
	if ($username == "bob" && $password == "dylan") {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		date_default_timezone_set("America/New_York");
		$date = date("D y M d, g:i:s a");
		$time = time()+ 60 * 60 * 24 * 7;
		setcookie("time/date", $date, $time);
		header("Location: calendar.php");
	} else {
		error("startTrainers.php", "Password Incorrect");
	}
	
	# This function takes in the username and password inputted and dettermines if 
	# that password is valid (fits pattern)
	function login($username, $password){
		$correct_username = "bob";
		$correct_password = "dylan";
		return $password == $correct_password && correct_username == $username;
	}

?>