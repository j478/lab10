<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jakedavies", "soh3Nais","jakedavies");
	/* check connection */
	if ($mysqli->connect_errno) {
 		printf("Connect failed: %s\n", $mysqli->connect_error);
 		exit();
	}
	$usr = $_POST["users"];
	$query = "SELECT Content FROM Posts WHERE Author_id='".$usr."'";
	if ($result = $mysqli->query($query)) {
		echo "<table border='1'>";
		echo "<tr><th>Posts</th><tr>";
 		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>";
			echo $row["Content"];
			echo "</td>";
 			echo "</tr>";
 		}
		echo "</table>";
 		$result->free();
	}
	$mysqli->close();

?>