<?php
session_start();
?>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/ProjectNGO/admin_side/css/login.css">
	
</head>
<body>

<div id = "wrapper">
<div id = "logindetails">
 
<img src = "/ProjectNGO/admin_side/img/login.png" id = "login" height = "150px" width = "100px">
			<br><br>
		
		
		<form method="POST" action="<?php $_PHP_SELF ?>">
    		<input type="text"   placeholder = "*Username" class = "inputsmall" required/><br><br>
		    <input type="password"  placeholder = "*Password" class = "inputsmall"  required/> <br> <br>
		    <input  type="submit" name="submit" id="submit" value="Login" class = "inputsmall" /><br><br><br>
		  <center> <span id = "lst"> <a href="signup.php">New User?Sign Up</span></a> </center>
		  </form>
		
	</div>
</div>

</body>
</html>
<?php

if(isset($_POST['submit']))   
{
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root123';
	//$var1="admin123";
	//$var2 = "admin";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
  		die('Could not connect: ' . mysql_error());
	}
	else
	{
	$username = $_POST['username'];
	$password = $_POST['password'];
	mysql_select_db('NGOdb');
      	$query = mysql_query("SELECT username,password FROM users WHERE username = '$username' AND password = '$password'");
	
	$retval = mysql_fetch_array($query);
	
		if($retval['username'] == $username  && $retval['password'] == $password)
		{
		
		
		?>
			<script>alert("You are successully loggedIn");</script>
		 
	<?php
		//echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';
/*if (strcmp($var1,$password) == 0 && strcmp($var2,$username) ==0)
{
echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';
}*/
			if($username=='admin' && $password=='admin123')
			{
				echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';
			}
			else if($username=="root" && $password=="root123")
			{
				echo '<script type="text/javascript"> window.open("registerNGO.php","_self");</script>';
			}
		
		}
	
		else
		{
		?>
			<script>alert("Sorry, your credentials do not match");</script>
			<?php
		}
	}
	
}
mysql_close($conn);

?>
