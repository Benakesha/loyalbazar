<?php
		include "loyal_db.php";
		session_start();
		$ids=$_SESSION['UserId'];
		$name=$_SESSION['UserName'];
		date_default_timezone_set('Asia/Kolkata');
		$dates=Date("Y-m-d H:i:s A");
		if(isset($_POST['btnSendTreay'])){
			$clientNames=$_POST['userNames'];
			$noOfTreay=$_POST['noOfTreay'];
			$id=$ids;

			$clientNames=stripslashes($clientNames);
			$noOfTreay=stripslashes($noOfTreay);
			$id=stripslashes($id);

			$clientNames=mysqli_real_escape_string($conn,$clientNames);
			$noOfTreay=mysqli_real_escape_string($conn,$noOfTreay);
			$id=mysqli_real_escape_string($conn,$id);
			//var_dump($noOfTreay);
			$sql="INSERT INTO loyal_client_db VALUES(null,'$clientNames',$noOfTreay,'$dates',$id)";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		}
		//echo $res;
		if(isset($res)){

			$sql="SELECT noOfTreay FROM loyal_user WHERE UserName='$name'";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while($row=mysqli_fetch_assoc($res)){
				//$subNoOfTreay=$row['noOfTreay']-$noOfTreay;

					$subNoOfTreay=$row['noOfTreay']-$noOfTreay;
					$sql="UPDATE loyal_user SET noOfTreay=$subNoOfTreay WHERE UserName='$name'";
					mysqli_query($conn,$sql) or die(mysqli_error($conn));

				   $sql="SELECT noOfTreay FROM loyal_user WHERE UserName='$clientNames'";
				   $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		  
			while($row=mysqli_fetch_assoc($res)){

				$NoOfTreay=$row['noOfTreay'];
				if($NoOfTreay == '0'){
					$addNoOfTreay=$row['noOfTreay']+$noOfTreay;
					$sql="UPDATE loyal_user SET noOfTreay=$addNoOfTreay WHERE UserName='$clientNames'";
					mysqli_query($conn,$sql) or die(mysqli_error($conn));

				
				}else{

					$addNoOfTreay=$row['noOfTreay']+$noOfTreay;
					$sql="UPDATE loyal_user SET noOfTreay=$addNoOfTreay WHERE UserName='$clientNames'";
					mysqli_query($conn,$sql) or die(mysqli_error($conn));


				}
				
			}
		}
			header("location:loyalMaster.php?Page=sendTreay");

		}
?> 
