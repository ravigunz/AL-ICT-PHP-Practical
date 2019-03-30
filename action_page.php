<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Action Page</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php
	$conn = new mysqli('localhost', 'root', 'root', 'company');
	if($conn->connect_error) {
		die("connection failed:" . $conn->connect_error . "<br>");
	}
	else {
		echo "<strong>Connected successfully </strong><br>";
	}

	$firstname = $_GET['first_name'];
	$lastname = $_GET['last_name'];
	$email = $_GET['email'];

	$sql = "INSERT INTO myguests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

	if ($conn->query($sql) === TRUE) {
		echo "<strong> Record added successfully </strong><br>";
	} else {
		echo "Error adding record: " . $conn->error . "<br>";
	}
	$conn->close();
?>
</body>
</html>