<html>
<head>
<title>Register NGO</title>
<link rel = "stylesheet" type = "text/css" href = ".css">
 <link rel = "stylesheet" type = "text/css" href = ".css">
<script type="text/javascript" src="/ProjectNGO/admin_side/js/.js"></script>
	
	
</head>
<body>
<?php
   include("connect.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
   		$name = $_POST['name']; 
		$address= $_POST['address']; 
		$website = $_POST['website'];
		$contactno=$_POST['contactno'];
		mysqli_select_db($conn,'project_ngo');
		$query = "INSERT INTO ngos(name,website,contactno,address) VALUES ('$name','$website','$contactno','$address')"; 	


$result = mysqli_query($conn,$query);



     if ($result) {?>
<script>alert("NGO inserted successfully");</script>
<?php
echo '<script type="text/javascript"> window.open("admin.php","_self");</script>'; 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{?>
<script>alert("NGO inserted successfully");</script>
	
<?php
echo '<script type="text/javascript"> window.open("admin.php","_self");</script>'; 

}
//mysql_close($conn);*/
}
?>

<center>
	<h1> NGO DETAILS </h1>
	<form method="post" action="<?php $_PHP_SELF ?>" >
	<table id = "table6">
	<tr>
		<td>NAME:</td>
		<td><input type="text"  placeholder = "*Enter name of the NGO"  id = "name" name = "name" onblur = "validatename()" required/></td> 	

	</tr>
	<tr>
		<td></td>
		<td><span id = "nameerror" class = "error" ></span></td>
	</tr>
	<tr>
		<td>ADDRESS:</td>
		<td><input  type="text"  placeholder = "*Enter address" id="lname" name = "address" onblur = "validatelname()" required/></td>
	</tr>
	<tr>
		<td></td>
		<td><span id = "lastnameerror" class = "error"  ></span></td>
	</tr>
	<tr>
		<td>WEBSITE:</td>
		<td><input type="text" class = "inputbig"  placeholder = "Enter website (if any)" name = "website" onblur = "validateemail()" /></td><br>
	</tr>
	<tr>
		<td></td>
		<td><span id = "emailerror" class = "error"></span></td><tr>
	</tr>
	<tr>
		<td>CONTACT NUMBER:</td>
		<td><input type="tel" class = "inputbig"   placeholder = "*Enter contact number" name = "contactno" id="phone1" onblur = "validatephone()" required/></td>
	</tr> 
	<tr>
			<td><span id = "phoneerror" class = "error"></span></td><tr>
	</tr>
	
	<tr>
		<td></td>
		<td> </td>
	</tr>
	
	</table>

	
	
	
	<center><input type = "submit" value = "Register" id = "submit" name="submit"></center>
		</form>
	</center>
	


	<center><p>Powered by Cumbre Technologies</p></center>
	

</body>
</html>


