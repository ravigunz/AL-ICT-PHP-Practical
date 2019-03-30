<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Record Form</title>
</head>
<body>
	<!-- <form action="action_page.php" method="GET"> -->
	<form method="GET">
		<p>First Name</p>
		<input type="text" name="first_name"> 
		<p>Last Name</p>
		<input type="text" name="last_name"> 
		<p>Email Address</p>
		<input type="text" name="email">
		<input type="submit" value="Submit"> 
		<input type="button" value="Retrieve">
		<br> 
	</form>

	<?php
		$conn = new mysqli('localhost', 'root', 'root', 'company');
		$sql = "SELECT * FROM myguests";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_array($result)) {
				echo "ID: " .$row['id'] . " Name: " . $row['firstname'] . " " . $row['lastname'] . " | " . $row['email'] . "<br>";
			}
		}
			else {
				echo "0 Results ";
			}
			$conn->close();
		
	?>
</body>
</html>