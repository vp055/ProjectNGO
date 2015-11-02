<html>
<head>
	<title> Database </title>
</head>

<body>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root123";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
		}
		else {
			echo "connected successfully"."<br>";
		}

		$sql = "CREATE DATABASE NGOdb";
		if ($conn->query($sql) === TRUE) {
    			echo "Database created successfully"."<br>";
		} else {
    			echo "Error creating database: " . $conn->error."<br>";
		}

	?>

</body>
</html>

