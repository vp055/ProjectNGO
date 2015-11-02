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
			echo "connected successfully";
		}

		mysqli_select_db($conn, 'NGOdb');
		
		$sql = "INSERT INTO users (username ,password)
			VALUES ('root','root123');";
		$sql .= "INSERT INTO users (username ,password)
			VALUES ('admin','admin123');";
		


		if ($conn->multi_query($sql) === TRUE) {
    			echo "New records created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();


	?>

</body>

</html>

