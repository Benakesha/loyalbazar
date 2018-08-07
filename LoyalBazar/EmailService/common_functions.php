<?php

include_all_php();


function include_all_php(){
	$ROOT_PATH = $_SERVER["DOCUMENT_ROOT"] . "/LoyalBazar/EmailService/";	
	$directories = array($ROOT_PATH."/vendor/EnermateMailer/",
						 $ROOT_PATH."/service/"
						 );

	foreach ($directories as $directory) { //print $directory;
		foreach(glob($directory . "*.php") as $class) {
			include_once $class;
		}
	}
}
?>