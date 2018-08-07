<?php
	session_start();
	session_destroy();
	if(isset($_COOKIE['UserName']) and isset($_COOKIE['Password'])){
		$UserName=$_COOKIE['UserName'];
		$Password=$_COOKIE['Password'];
		setcookie('UserName',$UserName,time()-1);
		setcookie('Password',$Password,time()-1);
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Styles/custom.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<title>Logout from Loyal</title>
</head>
<body style="background:url('Images/egg-logout.jpg');text-align:center;background-size:cover;margin:0 auto;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container" style="margin-top: 4%;text-align: center;">
					<div class="row">
						<div class="col-md-12">
							<p style="color: green;font-size: 80px;"><i class="fa fa-edge" aria-hidden="true"></i></p>
						</div>
					</div>
				</div>
				<div class="container" style="margin-top: 5%;text-align: center;">
					<div class="row">
						<div class="col-md-12">
							<h4 style="color:black;">You have successfully logged out.<br> Click here to <a href='index.php' style="color: black;font-weight: bold;font-size: 30px;">&nbsp;Login</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
