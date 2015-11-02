<html>
<head>
<title>Database</title>
<link rel = "stylesheet" type = "text/css" href = ".css">
 <link rel = "stylesheet" type = "text/css" href = ".css">
	<script type="text/javascript">
			function validatename()
			{
				if(document.getElementById("name").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("name").value.match(letters))  
					{  
					
					
						document.getElementById("nameerror").innerHTML = "Please enter only alphabets (no special characters)";
						document.getElementById("name").focus();
						document.getElementById("name").select();
					
					}
					else
					{
						document.getElementById("nameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("name").value=="")
				{
					
					document.getElementById("nameerror").innerHTML = "Please enter name of the NGO "; 						document.getElementById("name").focus();
						document.getElementById("name").select();					
				}

			}

			
			function validateemail()
			{	
				var email = document.getElementById('email');
				var filter =new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
				var result = filter.test(document.getElementById("email").value);
				if(document.getElementById("email").value!="")
               			{
					if (result==false) {
					document.getElementById("emailerror").innerHTML="Please provide a valid email address";
					email.focus;
					document.getElementById("email").focus();
						document.getElementById("email").select();
					}
					else
					{
						document.getElementById("emailerror").innerHTML = "";
					}
				}
				else if(document.getElementById("email").value=="")
               			{
                 			document.getElementById("emailerror").innerHTML = "You must enter email";
					document.getElementById("email").focus();
					document.getElementById("email").select();               			
				}
				

				
			}
			
			function validatephone()
        		{
				if(document.getElementById("phone1").value != "")
				{
					if(isNaN(document.getElementById("phone1").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";
							document.getElementById("phone1").focus();
							document.getElementById("phone1").select(); 					
					}
					
					else
					{
					
				
						if (document.getElementById("phone1").value.length != 10) {
            						document.getElementById("phoneerror").innerHTML = "Number should be 10 digit";
							document.getElementById("phone1").focus();
							document.getElementById("phone1").select(); 							
						}
						else
						{
						   document.getElementById("phoneerror").innerHTML="";					
						}
					}
					
					
				}
				else if(document.getElementById("phone1").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "You must enter phone number"; 						document.getElementById("phone1").focus();
					document.getElementById("phone1").select(); 					
				}
				
			}

		
</script>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
   		$name = $_POST['name']; 
		$address= $_POST['address']; 
		$email = $_POST['email'];
		$mobilenumber=$_POST['mobile1'];
		
		$query = "INSERT INTO ngos(name,email,mobilenumber,address) VALUES ('$name','$email','$mobilenumber','$address')"; 	

mysql_select_db('NGOdb');
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{?>
<script>alert("NGO inserted successfully");</script>
	
<?php
echo '<script type="text/javascript"> window.open("admin.php","_self");</script>'; 

}
mysql_close($conn);
}
?>

<center>
	<h1> NGO DETAILS </h1>

	
	
	<form method="post" action="<?php $_PHP_SELF ?>" >
	<table id = "table6">
	<tr>
		<td><input type="text"  placeholder = "*Name"  id = "name" name = "name" onblur = "validatename()" required/></td> 	

	</tr>
	<tr>
		<td><span id = "nameerror" class = "error" ></span></td>
	</tr>
	<tr>
		<td><input  type="text"  placeholder = "*Address" id="lname" name = "lname" onblur = "validatelname()" required/></td>
	</tr>
	<tr>
		<td><span id = "lastnameerror" class = "error"  ></span></td>
	</tr>
	<tr>
		<td><input type="text" class = "inputbig" id="email" placeholder = "*Email" name = "email" onblur = "validateemail()" required/></td><br>
	</tr>
	<tr>
		<td><span id = "emailerror" class = "error"></span></td><tr>
	</tr>
	

	<tr>
		<td><input type="tel" class = "inputbig"   placeholder = "*Contact Number" name = "mobile1" id="phone1" onblur = "validatephone()" required/></td>
	</tr> 
	<tr>
			<td><span id = "phoneerror" class = "error"></span></td><tr>
	</tr>
	
	<tr>
		<td><center><input type = "submit" value = "Register" id = "submit" name="submit"></center> </td>
	</tr>
	</table>

	
	
	
	
		</form>
	</center>
	


	<center><p>Powered by Cumbre Technologies</p></center>
	

</body>
</html>


