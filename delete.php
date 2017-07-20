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
		<form method="POST" action="delete-logic.php">
			<div class="form-group">
		    	<label for="name">Id:</label>
		    	<input type="number" class="form-control" name="id" required>
			</div>
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</div>
</body>
</html>