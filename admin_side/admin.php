<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
	<link rel = "stylesheet" type = "text/css" href = "/ProjectNGO/admin_side/css/admin.css">
	
   </head>
   
   <body>
	<div id = "header" >
		<div id = "link"> 
     			 <span class = "slash"><img src = "/ProjectNGO/admin_side/img/login.png" width = "20px" height = "20px" hspace = "7px">Welcome <?php echo $login_session; ?> </span>
     			<span class = "slash">|<span class = "echo"><a href="logout.php">Sign Out</a></span>
		</div>	
	<div id = "mid">
	    <div id = "bt1"><input type = "button" value = "View NGO's"  class = "button" onclick=window.open("viewNGOs.php","_self")></div>
	    <div id = "bt2"><input type = "button" value = "Register New NGO"  class = "button" onclick=window.open("registerNGO.php","_self")></div>
	</div>
</div>
</body>   
</html>
