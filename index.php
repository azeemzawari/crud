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
		<form method="POST" action="create.php">
			<div class="form-group">
		    	<label for="name">Name:</label>
		    	<input type="text" class="form-control" name="name" required>
			</div>
			<div class="form-group">
		    	<label for="email">Email:</label>
		    	<input type="email" class="form-control" name="email" required>
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
</body>
</html>