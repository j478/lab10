<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jakedavies", "soh3Nais","jakedavies");
	/* check connection */
	if ($mysqli->connect_errno) {
 		printf("Connect failed: %s\n", $mysqli->connect_error);
 		exit();
	}
	$userName = $_POST["user_name"];
	$userPost = $_POST["post"];
	if($userName !== "" && $userPost !== "") {
		$request = "INSERT INTO Posts (Author_id, Content)
		VALUES ('$userName', '$userPost')";
		if ($mysqli->query($request) === TRUE) {
 			echo "Post created successfully<br>";
		}
		else {
			echo "User does not exists!<br>";
		}
		$mysqli->close();
	}
	else {
		if($userName === "") {
			echo "Username cannot be blank!<br>";
		}
		else {
			echo "Post cannot be blank!<br>";
		}
	}
?>