 <?php
   include('session.php');
?>
<html>
     
    <head>
        <title>Project NGO</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
	
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="glyphicon glyphicon-user "> Welcome <?php echo $login_session; ?>  
                    <div class="glyphicon glyphicon-option-vertical"></div><a href="logout.php">Sign Out</a>
                
                </div>
            </div>
            <hr>
            <div id="conpan" class="panel panel-warning">
                <div class="panel-heading"><center>Admin Roles : Please select the job to be performed.</center></div>
                <div class="panel-body">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a href="viewNGOs.php" type="button" class="btn btn-info">Manage NGOs</button></a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="registerNGO.php" type="button" class="btn btn-info">Register NGOs</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
    </body>
   
  
</html>   
