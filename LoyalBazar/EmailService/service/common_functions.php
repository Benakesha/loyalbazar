<?php
$ROOT_PATH = $_SERVER["DOCUMENT_ROOT"] . "/LoyalBazar/EmailService/";
include_once($ROOT_PATH.'common_functions.php');
#include_all_php($_SERVER["DOCUMENT_ROOT"].'vendor');
class EnermateEmailService {
	public $mail;

	private $emailLib = array();

	public function __construct(){
		$this->mail = new PHPMailer();   
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = 'server15.hostingraja.in';  // Specify main and backup SMTP servers
		$this->mail->Port =  465;
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = 'benakesh@enermate.in';                 // SMTP username
		$this->mail->Password = 'BNag18@1991';                           // SMTP password
		$this->mail->SMTPSecure = 'ssl'; //ssl                       // Enable encryption, 'ssl' also accepted
		$this->mail->From = 'benakesh@enermate.in';
		$this->mail->FromName = 'Enermate';
		$this->mail->IsHTML(true);
	}


	public function sendContactMail($fromEmail, $fromName, $toEmail, $subject, $body){
		$this->mail->SetFrom($fromEmail, $fromName);
		$this->mail->addAddress($toEmail);     // Add a recipient
		$this->mail->Subject = $subject;
		$this->mail->Body = $body;
		$this->mail->Send();
		
		if(!$this->mail->Send()) {
			$error = 'Mail error: '.$this->mail->ErrorInfo; 
			return false;
		} else {
			$error = 'Message sent!';
			return true;
		}
	}
}

?>