<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jakedavies", "soh3Nais","jakedavies");
	/* check connection */
	if ($mysqli->connect_errno) {
 		printf("Connect failed: %s\n", $mysqli->connect_error);
 		exit();
	}
	$postID = $_POST["post_id"];
	for($i = 0; $i < sizeof($postID); $i++) {
		$query = "DELETE FROM Posts WHERE Post_id='".$postID[$i]."'";
		$result = $mysqli->query($query);
		if($result === TRUE) {
			echo "Post ".$postID[$i]." deleted successfully<br>";
		}
		else {
			echo "Post not deleted successfully<br>";
		}
	}
	$result->free();
	$mysqli->close();

?>