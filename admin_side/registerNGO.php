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
		$locality= $_POST['locality']; 
		$city= $_POST['city']; 
		$state= $_POST['state']; 
		$pin_code= $_POST['pin_code']; 
		$ph_number=$_POST['ph_number'];
		$website = $_POST['website'];
		$ngo_logo= $_POST['ngo_logo']; 
		$ngo_id= $_POST['ngo_id']; 

		mysqli_select_db($conn,'project_ngo');

		$query = "INSERT INTO ngo_detail(name,locality,city,state,pin_code,ph_number,website,ngo_logo,ngo_id) VALUES ('$name','$locality','$city','$state','$pin_code','$ph_number','$website','$ngo_logo','$ngo_id')"; 	


$result = mysqli_query($conn,$query);



     if ($result) 
     {?>
		<script>alert("NGO inserted successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("admin.php","_self");</script>'; 
     } 
    else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

mysqli_close($conn);

}
?>

<center>
	<h1> NGO DETAILS </h1>
	<form method="post" action="<?php $_PHP_SELF ?>" >
	<table id = "table6">
	<tr>
		<td>NAME:</td>
		<td><input type="text"  placeholder = "*Enter name of the NGO"  id = "name" name = "name"  required/></td> 	

	</tr>
	
	<tr>
		<td>LOCALITY:</td>
		<td><input  type="text"  placeholder = "*Enter locality" id="locality" name = "locality" required/></td>
	</tr>
	<tr>
		<td>CITY:</td>
		<td><input  type="text"  placeholder = "*Enter city" id="city" name = "city" required/></td>
	</tr>
	<tr>
		<td>STATE:</td>
		<td><input  type="text"  placeholder = "*Enter state" id="state" name = "state" required/></td>
	</tr>
	<tr>
		<td>PINCODE:</td>
		<td><input  type="text"  placeholder = "*Enter pincode" id="pincode" name = "pincode" required/></td>
	</tr>
	
	<tr>
		<td>WEBSITE:</td>
		<td><input type="text"   placeholder = "Enter website (if any)" name = "website"  /></td><br>
	</tr>
	
	<tr>
		<td>PHONE NUMBER:</td>
		<td><input type="text"    placeholder = "*Enter phone number" name = "phone" id="phone" required/></td>
	</tr> 
	<tr>
		<td>NGO LOGO:</td>
		<td><input type="file" /></td>
	</tr> 
	<tr>
		<td>NGO ID:</td>
		<td><input type="text"    placeholder = "*Enter unique ngo id" name = "ngo_id" id="ngo_id" required/></td>
	</tr> 
	<tr>
		<td></td>
		<td> </td>
	</tr>
	
	</table>

	
	
	
	<br><br><center><input type = "submit" value = "Register" id = "submit" name="submit"></center>
		</form>
	</center>
	


	<center><p>Powered by Cumbre Technologies</p></center>
	

</body>
</html>

