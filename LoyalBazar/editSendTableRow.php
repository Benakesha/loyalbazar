<?php
	
	include "loyal_db.php";
	$id= $_GET['ids'];
	echo $id;


	header("location:loyalMaster.php?Page=editTreay&id=$id");
?>
