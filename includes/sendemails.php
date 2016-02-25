<?php 
require_once('phpmailer/class.phpmailer.php');
function Sendemail( $to, $subject, $message,$repyto,$from,$fromname)
{

	
	
	try {
		$mail = new PHPMailer(true); //New instance, with exceptions enabled
	
	
		$mail->IsSMTP();                           // tell the class to use SMTP
		$mail->SMTPAuth   = false;                  // enable SMTP authentication
		
		$mail->IsSendmail();  // tell the class to use Sendmail
	
		$mail->AddReplyTo($repyto,$fromname);
	
		$mail->From       = $from;
		$mail->FromName   = $fromname;
	
		$mail->AddAddress($to);
	
		$mail->Subject  = $subject;
	
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap   = 80; // set word wrap
	
		$mail->MsgHTML($message);
	
		$mail->IsHTML(true); // send as HTML
	
		$mail->Send();
		return true;
	} catch (phpmailerException $e) {
		//echo $e->errorMessage();
	}
}