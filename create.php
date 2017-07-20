<?php
	include 'db.php';
	$sql = "INSERT INTO user(name, email) VALUES ('".$_POST["name"]."','".$_POST["email"]."')";
	if ($conn->query($sql) === TRUE) {
		header("Location: read.php");
	} else {
		echo "Could not add the record";
	}
	$conn->close();
?>