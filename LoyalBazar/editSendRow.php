<?php
	
	include "loyal_db.php";
	session_start();
	$id=$_SESSION['UserId'];
	if(isset($_POST['editRow'])){

		$clientId=$_POST['clientId'];
		$clientName=$_POST['clientName'];
		$noOfTreayRecieved=$_POST['noOfTreayRecieved'];

		$clientId=stripslashes($clientId);
		$clientName=stripslashes($clientName);
		$noOfTreayRecieved=stripslashes($noOfTreayRecieved);

		$clientId=mysqli_real_escape_string($conn,$clientId);
		$clientName=mysqli_real_escape_string($conn,$clientName);
		$noOfTreayRecieved=mysqli_real_escape_string($conn,$noOfTreayRecieved);

		$sql="SELECT noTreayRecieved FROM loyal_client_db WHERE ID=$clientId";
		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		while ($row=mysqli_fetch_assoc($res)) {
			
			$notreayrecieved=$row['noTreayRecieved'];
			if($notreayrecieved < $noOfTreayRecieved){//400 < 500

				$subTray=$noOfTreayRecieved-$notreayrecieved;//500-400=100
				$subTray1=$notreayrecieved+$subTray;//400+100=500
				var_dump($subTray);
				
			$sql="UPDATE loyal_client_db SET noTreayRecieved=$subTray1 WHERE ID=$clientId";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if(isset($res)){
					$sql="SELECT * FROM loyal_user WHERE UserID=$id";//36363
					$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_assoc($res)){
							$ids=$row['UserID'];
							$noTreay=$row['noOfTreay']-$subTray;//36363-100
							$sql="UPDATE loyal_user SET noOfTreay=$noTreay WHERE UserID=$ids";
							$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
							
								}
								
				}
			 header("location:loyalMaster.php?Page=sendTreay");
			}else{ 
				//400<300
				$subTray=$notreayrecieved-$noOfTreayRecieved;//500-400=100
				var_dump($subTray);
				//die();
				$subTray1=$notreayrecieved-$subTray;//400+100=500

			$sql="UPDATE loyal_client_db SET noTreayRecieved=$subTray1 WHERE ID=$clientId";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if(isset($res)){
					$sql="SELECT * FROM loyal_user WHERE UserID=$id";//36363
					$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_assoc($res)){
							$ids=$row['UserID'];
							$noTreay=$row['noOfTreay']+$subTray;//36363-100
							$sql="UPDATE loyal_user SET noOfTreay=$noTreay WHERE UserID=$ids";
							$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
							
								}
								
				}
			 header("location:loyalMaster.php?Page=sendTreay");
			}
		}

		/*$sql="UPDATE loyal_client_db SET noTreayRecieved=$noOfTreayRecieved WHERE ID=$clientId";
		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if(isset($res)){
						$sql="SELECT * FROM loyal_user WHERE UserID=$id";
						$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_assoc($res)){

							$ids=$row['UserID'];
							$noTreay=$row['noOfTreay']-$noOfTreayRecieved;
							$sql="UPDATE loyal_user SET noOfTreay=$noTreay WHERE UserID=$ids";
							$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
							header("location:loyalMaster.php?Page=sendTreay");
						}
						
		}*/

	}

?>