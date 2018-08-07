<?php
   include "loyal_db.php";
   session_start();
   $id=$_SESSION['UserId'];

   $sql="SELECT * FROM loyal_user WHERE UserID=$id";
   $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

   while ($row=mysqli_fetch_assoc($res)) {
   		
   		$companyid=$row['CompanyID'];
   		$sql="SELECT * from loyal_user WHERE UserID=$companyid";
   		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

   		while ($row=mysqli_fetch_assoc($res)) {
   			$UserName=$row['Email_Id'];
   		}
   }
   if(isset($_POST['btnRequest'])){

		$noOfTray=$_POST['noOfTray'];
		//echo $noOfTray." ".$id;


		$ROOT_PATH = $_SERVER["DOCUMENT_ROOT"] . "/LoyalBazar/EmailService";
		echo $ROOT_PATH;
		include_once($ROOT_PATH.'/common_functions.php');
		$fullName ="Benakesh";
		$fromEmail ="benakesh@enermate.in";
		$toEmail = "benakeshnagaraj@gmail.com";
		$subject = '';
		$subject .= "Testing email from: ";
		$subject .="$fromEmail";
		$message = "Dear sir we need $noOfTray Tray.";
		echo $message;
		$emailService = new EnermateEmailService();
		$emailService->sendContactMail($fromEmail, $fullName, $toEmail, $subject, $message);

		//header("location: loyalMaster.php?Page=requestTray");
	}

?>