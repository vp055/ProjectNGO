<?php session_start(); ?>
	
<html>

<head>
		<link rel = "stylesheet" type = "text/css" href = "newuserform1.css">

</head>
<body background="bg.jpg" style="no-repeat">

	<div id = "header">
		<div id = "link"> 
		
		
  <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> <?php $admin = $_SESSION['use']; echo "Welcome  ".$admin; ?></span>
	<span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("admin.php","_self")>
		</form>
	</div>
			
	<div id = "mid1">
	<span id = "heading">REGISTERED NGOs<br><br>
	</span>
		<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
   		
		$query = "SELECT * FROM ngos"; 	

mysql_select_db('NGOdb');

$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
while ($db_field = mysql_fetch_assoc($retval))
{

print $db_field['name'] . "<BR>";



}
mysql_close($conn);

?>

	</div>

    </body>
</html>



