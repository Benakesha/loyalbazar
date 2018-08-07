<?php
  if(isset($_COOKIE['Username']) and isset($_COOKIE['Password'])){
    $Username=$_COOKIE['Username'];
    $Password=$_COOKIE['Password'];
    echo "<script>
        document.getElementById('txtUserName').value='$Username';
        document.getElementById('txtPassword').value='$Password';
      </script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="Styles/custom.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <title>Login | Loyal.com</title>
</head>
<body style="background:url('Images/egg-index.jpg');text-align:center;background-size:cover;margin:0 auto;">
  <div class="container" style="margin-top: 3%;text-align: center;">
    <div class="row">
      <div class="col-md-12">
        <p style="color: orange;font-size: 80px;"><i class="fa fa-edge" aria-hidden="true"></i></p>
      </div>
    </div>
  </div>

  <form method="post" action="validate.php">
    <div class="container" style="border: 2px solid skyblue;margin-top: 2%;width: 40%; box-shadow: 1px 1px 9px 9px #888888;">
      <div class="row">
        <div class="col-md-8 form-group" style="margin-left: 15%;margin-top: 7px;">
          <h1 style="color: orange;">Login Panel</h1>
          <h4 style="color: red;font-size: 15px;float: left;"> <?php if(!isset($_GET['msg'])){  
                }else{
                  $msg=$_GET['msg'];
                  if($msg="invalid"){
                    $error="Invalid Username or Password";
                    echo $error;
                    }

                }?>
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="input-group" style="margin-left: 22%">
            <input type="text" name="txtUserName" id="txtUserName" value="" placeholder="User Name" class="form-control">
            <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                </div>
          </div>
          <br>
          <div class="input-group" style="margin-left: 22%">
            <input type="password" name="txtPassword" id="txtPassword" value="" placeholder="Password" class="form-control">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-key"></i></div>
            </div>
          </div>
          <br>
          <div class="input-group" style="margin-left: 27%">
            <input type="checkbox" name="txtRememberMe" style="margin-top: 5px;outline: 2px solid black;">
            <p style="color: black;font-weight: bold;">&nbsp;Remember me</p>
            <a href="#" style="color: black; font-weight: bold;margin-left: 10%;">Forgot password ?</a>
          </div>
        
          <button id="btnLogin" name="btnLogin" type="submit" class="btn btn-success form-control" style="margin-left: 22%;font-size: 20px; margin-top: 3px;text-align: center; line-height: 5px;"><span><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</button>
          <br>
          <br>

        </div>
      </div>
      
    </div>
  </form> 
</body>
</html>
