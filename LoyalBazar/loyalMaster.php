<?php
  include "loyal_db.php";
  session_start();
  $role=$_SESSION['Role'];
  $id=$_SESSION['UserId'];
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> 
  <!--<link rel="stylesheet" type="text/css" href="Styles/custom.css">-->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <title>LoyalBazar.Com</title>
  <style type="text/css">
    	body {
		  padding-top: 3.6rem;
      background-image: url("Images/egg-tray1.jpg");
      height: 100% !important;
      background-repeat: no-repeat;

		}
	 .navbar-nav > li {
        margin-right: 15px;
        font-size: 25px;
     
       
     }
     .navbar-nav > li:hover{
      background-color:orange;
    
     }
     
     .navbar-nav > .active a:hover{
      background-color:orange;
     }
    .navbar-nav > .active a{
      color:white;
     }
    
     .mainbody{
     	margin-top: 4%;

     }
     a {
     text-decoration: none !important;
     font-size: 20px;	
     padding-bottom:  5px;
	}
	.logout:hover{
		background-color: orange;
		color:white;
	 }
	 .logout{
	 	color: white;
	 }
  	
    </style>
  </head>

  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12" >
  			<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      			<?php  if($role=='adminuser'){ ?>
      				<a class="navbar-brand" href="loyalMaster.php?Page=Dashboard" style="color:orange;font-size: 25px;font-weight: bold;" title="LoyalBazar.com">LoyalBazar.Com</a>
    			<?php }else {?>
      				<a class="navbar-brand" href="loyalMaster.php?Page=clientDashboard" style="color:orange;font-size: 25px;font-weight: bold;" title="LoyalBazar.com">LoyalBazar.Com</a>
    			<?php } ?>
      			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
     			</button>

     		 	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
     		 		 <?php  if($role=='adminuser'){ ?>
        			<ul class="navbar-nav mr-auto">
          				<li class="nav-item active">
            				<a href="loyalMaster.php?Page=Dashboard">&nbsp;Dashboard</a>
          				</li>
          				<li class="nav-item">
            				<a href="loyalMaster.php?Page=sendTreay" style="color:white;">&nbsp;Send Tray</a>
          				</li>
          				<li class="nav-item">
            				<a href="loyalMaster.php?Page=addUser" style="color:white;">&nbsp;Add User</a>
          				</li>
         			</ul>
         			<?php } else {?>
         				<ul class="navbar-nav mr-auto">
          				<li class="nav-item active">
            				<a href="loyalMaster.php?Page=clientDashboard">Dashboard</a>
          				</li>
          				<li class="nav-item">
            				<a href="loyalMaster.php?Page=sendTreay" style="color:white;">Send Tray</a>
          				</li>
                  <li class="nav-item">
                    <a href="loyalMaster.php?Page=requestTray" style="color:white;">Request Tray</a>
                  </li>
          				<li class="nav-item">
            				<a href="loyalMaster.php?Page=addUser" style="color:white;">Add User</a>
          				</li>
         			</ul>
         			 <?php } ?>
        			<a href="logout.php" class="logout">Logout&nbsp;&nbsp;<span><i class="fa fa-sign-out"></i></span></a>
      			</div>
    		</nav>
  		</div>
  	</div>
  	<div class="row">
  		<main role="main" class="container mainbody">
	      	<div class="starter-template">
        		<?php 
      if($role=='adminuser'){
             if($_GET["Page"]=="sendTreay"){
                include("sendTreay.php");
              }elseif ($_GET["Page"]=="addUser") {
                include("addUser.php");
              }elseif ($_GET["Page"]=="Dashboard") {
                include("loyalDashboard.php");
              }elseif($_GET["Page"]=="editTreay"){
                include("editRow.php");
              }
              /*elseif ($_GET["Page"]=="report") {
                include("loyalReport.php");
              }*/
   }else{
           if($_GET["Page"]=="sendTreay"){
                include("sendTreay.php");
              }elseif ($_GET["Page"]=="clientDashboard") {
                include("loyalClientDashboard.php");
              }elseif ($_GET["Page"]=="addUser") {
                include("addSubClient.php");
              }elseif($_GET["Page"]=="editTreay"){
                include("editRow.php");
              }elseif($_GET["Page"]=="requestTray"){
                include("requestTray.php");
              }
   }
    ?>
      		</div>
	    </main>
  	</div>
  	     
    <footer class="page-footer text-center text-md-left font-small bg-dark fixed-bottom" style="margin-top:100px;color: white;">

        <!--Footer Links-->
      <!--  <div class="container-fluid text-center text-md-left">
            <div class="row">

             
                <div class="col-md-6 pb-3">
                    <h5 class="text-uppercase"></h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
              

           <div class="col-md-6 pb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
               
            </div>
        </div>
       -->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:&nbsp;
              <?php  if($role=='adminuser'){ ?>
            <a href="loyalMaster.php?Page=Dashboard" style="color: orange;">
              <?php }else { ?>
            <a href="loyalMaster.php?Page=clientDashboard" style="color: orange;">
              <?php } ?>
            LoyalBazar.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!-- /.container -->
</div>


    
  </body>
</html>
