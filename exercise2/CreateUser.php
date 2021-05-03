<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jakedavies", "soh3Nais","jakedavies");
	/* check connection */
	if ($mysqli->connect_errno) {
 		printf("Connect failed: %s\n", $mysqli->connect_error);
 		exit();
	}
	$userName = $_POST["user_name"];
	if($userName !== "") {
		$request = "INSERT INTO Users (User_id)
		VALUES ('$userName')";
		if ($mysqli->query($request) === TRUE) {
 			echo "User created successfully<br>";
		}
		else {
			echo "User already exists!<br>";
		}
		$mysqli->close();
	}
	else {
		echo "Username cannot be blank!<br>";
	}
?>