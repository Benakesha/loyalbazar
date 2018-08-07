<?php
	
	include "loyal_db.php";
	session_start();
	$id=$_SESSION['UserId'];
	//echo $id;
	if(isset($_POST['addUser'])){		
			$txtUserName=$_POST['txtUserName'];
			$txtPassword=$_POST['txtPassword'];
			$txtEmailId=$_POST['txtEmailId'];
			$txtConfirmPassword=$_POST['txtConfirmPassword'];
			$userType=$_POST['UserType'];
			$userId=$id;

			$txtUserName=stripslashes($txtUserName);
			$txtEmailId=stripslashes($txtEmailId);
			$txtPassword=stripslashes($txtPassword);
			$txtConfirmPassword=stripslashes($txtConfirmPassword);
			$userType=stripslashes($userType);
			$userId=stripslashes($userId);

			$txtUserName=mysqli_real_escape_string($conn,$txtUserName);
			$txtEmailId=mysqli_real_escape_string($conn,$txtEmailId);
			$txtPassword=mysqli_real_escape_string($conn,$txtPassword);
			$txtConfirmPassword=mysqli_real_escape_string($conn,$txtConfirmPassword);
			$userType=mysqli_real_escape_string($conn,$userType);
			$userId=mysqli_real_escape_string($conn,$userId);

		//	echo $txtUserName." ".$txtPassword." ".$txtConfirmPassword." ".$userType." ".$userId;

			$sql="SELECT * FROM loyal_user_client,loyal_user";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while ($row=mysqli_fetch_assoc($res)) {
				$client_name=$row["client_name"];
				$userName=$row["UserName"];
				echo $userName;
				
				if($client_name == $txtUserName || $userName == $txtUserName){
					header("location: loyalMaster.php?Page=addUser&msg=clientExist");
					
				}else{

				$sql="INSERT INTO loyal_user_client VALUES(null,'$txtUserName','$txtEmailId','$txtPassword','$txtConfirmPassword','$userType',$userId)";
				mysqli_query($conn,$sql) or die(mysqli_error($conn));
				
				$sql1="INSERT INTO loyal_user VALUES(null,'$txtUserName','$txtEmailId','$txtPassword',0,'0',$userId,'$userType',0)";
				mysqli_query($conn,$sql1) or die(mysqli_error($conn));
			   
				header("location:loyalMaster.php?Page=addUser");	
			}
		}
	}
?>