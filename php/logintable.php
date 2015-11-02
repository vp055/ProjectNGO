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




mysqli_select_db($conn, 'NGOdb');

$sql = "CREATE TABLE users(".

"userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
"username VARCHAR(30) NOT NULL,".
"password VARCHAR(30) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully"."<br>";
} else {
    echo "Error creating table: " . $conn->error."<br>";
}
?>
</body>

</html>

