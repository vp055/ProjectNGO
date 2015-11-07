<?php 
include('session.php');
?>
	
<html>

    <head>
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand page-scroll" href="#page-top">Project NGO</div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about"><?php echo $login_session; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="admin.php">Admin Portal</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="logout.php">Sign Out</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="root.php">Root Portal</a>
                        </li>
                    </ul>
                </div>
            <!-- /.navbar-collapse -->
            </div>
        <!-- /.container-fluid -->
        </nav>
	

	
			
        REGISTERED NGOs<br><br>
	
<?php
 
   
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //  mysqli_select_db($conn,'project_ngo');

    $query = "SELECT name FROM ngo_detail"; 	

    
    $retval = mysqli_query($conn,$query);
/*if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}*/
    while ($db_field = mysqli_fetch_assoc($retval))
    {

        echo $db_field['name'] . "<BR>";

    }
}
mysqli_close($conn);

?>

	

    </body>
</html>