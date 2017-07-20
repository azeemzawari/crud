<?php
	include 'db.php';
	$sql = "DELETE FROM user WHERE id = '".$_POST["id"]."'";
	if ($conn->query($sql) === TRUE) {
		header("Location: read.php");
	} else {
		echo "Could not add the record";
	}
	$conn->close();
?>