<?php
	include "loyal_db.php";
	if(isset($_POST['btnLogin'])){
		
		$UserName=$_POST['txtUserName'];
		$Password=$_POST['txtPassword'];
		$RememberMe=$_POST['txtRememberMe'];

		$UserName=stripslashes($UserName);
		$Password=stripslashes($Password);

		$UserName=mysqli_real_escape_string($conn,$UserName);
		$Password=mysqli_real_escape_string($conn,$Password);

		$sql="SELECT * From loyal_user WHERE UserName='$UserName' and Password='$Password'";
		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

		$count=mysqli_num_rows($res);
		echo $count;
		if($count==1){
			date_default_timezone_set("Asia/Kolkata");
			$CurrentDate=Date('Y-m-d H:i:s A');
			echo $CurrentDate;
		
			while ($row=mysqli_fetch_assoc($res)) {

					if(isset($_POST['txtRememberMe'])){
						setcookie('UserName',$UserName,time()+60*60*7);
						setcookie('Password',$Password,time()+60*60*7);
						session_start();
						$_SESSION['UserName']=$UserName;
						$_SESSION['Password']=$Password;
						$_SESSION['Role']=$row['role'];
						$_SESSION['noOfTreay']=$row['noOfTreay'];
						$_SESSION['UserId']=$row['UserID'];
						header("location: loyalMaster.php");
					}else{
					session_start();
					$_SESSION['UserName']=$UserName;
					$_SESSION['Password']=$Password;
					$_SESSION['Role']=$row['role'];
					$_SESSION['noOfTreay']=$row['noOfTreay'];
					$_SESSION['UserId']=$row['UserID'];
					if($row['role'] == 'adminuser'){
					header("location: loyalMaster.php?Page=Dashboard");
					}else{
						header("location: loyalMaster.php?Page=clientDashboard");
					}
				}
			}
		}else{

			header("location: index.php?msg=invalid");
			exit();
		}

	}

?>