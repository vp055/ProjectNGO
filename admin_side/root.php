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
                <div class="panel-heading"><center>Root Roles : Please select the job to be performed.</center></div>
                <div class="panel-body">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a href="admin.php" type="button" class="btn btn-info">Manage NGO</button></a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="create_admin.php" type="button" class="btn btn-info">Manage Admin</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
    </body>
   
  
</html>


    
    
    
    
<!--
    <div id = "header" >
            <div id = "link"> 
                <span class = "slash"><img src = "/ProjectNGO/admin_side/img/login.png" width = "20px" height = "20px" hspace = "7px">Welcome <?php echo $login_session; ?> 
                </span>
                <span class = "slash">|<span class = "echo"><a href="logout.php">Sign Out</a>
                    </span>
                    </div>	
            </div>
            </body> -->
