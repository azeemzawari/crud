<?php
	include 'db.php';
	$sql = "UPDATE user SET name = '".$_POST["name"]."', email = '".$_POST["email"]."' WHERE id = '".$_POST["id"]."'";
	if ($conn->query($sql) === TRUE) {
		header("Location: read.php");
	} else {
		echo "Could not add the record";
	}
	$conn->close();
?>