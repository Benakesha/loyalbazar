<?php
    include "loyal_db.php";
	session_start();
	$ids=$_SESSION['UserId'];
	if(isset($_POST['addTreay'])){

	$noOfTreays=$_POST['noOfTreay'];
	$UserIDs=$ids;
	//echo $UserIDs;
	$noOfTreays=stripslashes($noOfTreays);
	$UserIDs=stripslashes($UserIDs);
	$noOfTreays=mysqli_real_escape_string($conn,$noOfTreays);
	$UserIDs=mysqli_real_escape_string($conn,$UserIDs);
	//echo $UserID;
	
	$sql="UPDATE loyal_user SET noOfTreay=$noOfTreays WHERE UserID=$UserIDs";
	$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    }
    if(isset($res)){
   	
   		header("location:loyalMaster.php?Page=Dashboard");
   		/*
   		$sql="SELECT * FROM loyal_user WHERE UserID=$UserIDs";
		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		while($row=mysqli_fetch_assoc($res)){
			$noOfTreays=$row['noOfTreay'];
			//echo $noOfTreays;		
		}*/  
    }
	//header("location:loyalMaster.php?Page=report");


?>