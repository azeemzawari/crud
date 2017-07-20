<!DOCTYPE html>
<html>
<head>
	<title>Basic CRUD App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Basic CRUD App</h1>
		<a href="index.php">Create</a> |
		<a href="read.php">Read</a> |
		<a href="update.php">Update</a> |
		<a href="delete.php">Delete</a>
		<br>
		<br>
		<table class="table table-responsive">
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Email</td>
			</tr>
			<?php
				include 'db.php';
				$sql = "SELECT * FROM user";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
			?>
                   <tr>
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['name'];?></td>
                   <td><?php echo $row['email'];?></td>
                   </tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>