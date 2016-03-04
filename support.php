<?php require_once('header.php');
$errors=array();

$name='';
$email='';
$website='';
$subject='';
$message='';

function isValidEmail($email)
{
	return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email);
}
function create_unique_id() {

	$tuid = '';
	$uid = uniqid( "", true );
	$data = '';
	$data .= isset( $_SERVER[ 'REQUEST_TIME' ] ) ? $_SERVER[ 'REQUEST_TIME' ] : rand( 1, 999 );
	$data .= isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) ? $_SERVER[ 'HTTP_USER_AGENT' ] : rand( 1, 999 );
	$data .= isset( $_SERVER[ 'LOCAL_ADDR' ] ) ? $_SERVER[ 'LOCAL_ADDR' ] : rand( 1, 999 );
	$data .= isset( $_SERVER[ 'LOCAL_PORT' ] ) ? $_SERVER[ 'LOCAL_PORT' ] : rand( 1, 999 );
	$data .= isset( $_SERVER[ 'REMOTE_ADDR' ] ) ? $_SERVER[ 'REMOTE_ADDR' ] : rand( 1, 999 );
	$data .= isset( $_SERVER[ 'REMOTE_PORT' ] ) ? $_SERVER[ 'REMOTE_PORT' ] : rand( 1, 999 );
	$tuid = substr( strtoupper( hash( 'ripemd128', $uid . md5( $data ) ) ), 0, 12 );
	return $tuid;

}
if(isset($_POST['sendmsg']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	if(trim($name)=='')
	{
		array_push($errors,'Please enter your name.');		
	}
	else if(!preg_match('/^[a-zA-Z0-9 ]+$/', trim($name)))
	{
		array_push($errors,'Please enter valid name.');
	}
	if(trim($email)=='')
	{
		array_push($errors,'Please enter email.');
	}
	else if(!isValidEmail($email))
	{
		array_push($errors,'Invalid email address');
	}
	if(trim($message)=='')
	{
		array_push($errors,'Please enter message.');
	}
	
	
	$website=$_POST['website'];
	$message1=$_POST['message'];
	if($_SESSION['captcha']['code']!=$_POST['captchacode'])
	{
		array_push($errors,'Captcha did not match.');
	}
	if(empty($errors))
	{	
	
		$ticketid=create_unique_id();
			
		$to      = 	'ram@sigmaways.com';
		$subject = $sitname.' : Sigmaways Retail Analytics Support';	
		$from = $email;
		$fromname=$sitname;
		
		$message="Dear Admin,<br /><br />
		Following user has been contact you for support. The user detail is given below<br /><br />
		Support Ticket ID: ".$ticketid."<br />
		Name: ".$name."<br />
		Email: ".$email."<br />";
		if($website != "")
		{
		 $message .= "Website: ".$website."<br />";
		}
		
		$message .= "Message: ".$message1."<br /><br />";
		$message.=$email_signature;
		Sendemail( $to, $subject, $message,$from,$from,$fromname);
		
		$to      = 	$email;
		$subject = $sitname.' : Sigmaways Retail Analytics Support';	
		$from = 'ram@sigmaways.com';
		$fromname=$sitname;
		
		$message="Dear ".$name.",<br /><br />
		Thank you for sending message. We will get back to you shortly.<br /><br />Your support ticket id is ".$ticketid;
		
		$message .= "<br /><br />";
		$message.=$email_signature;
		Sendemail( $to, $subject, $message,$from,$from,$fromname);
		
		$_SESSION['message'] = "Thank You, Your message has been sent successfully. We will get back to you shortly. Your support ticket id is ".$ticketid;
		@header('Location: support.php');
		
	}
	else
	{
		foreach($_POST as $key=>$value)
		{
			${$key}=$value;
		}
	}
}

 ?>


<div id="page-wrapper">

            <div class="container-fluid supportpage">
			
                  <div class="innerpage mainregisterbox suptboxsection col-md-10">
                  <div class="form-header">Support</div>
                      <iframe src="http://localhost/retailernew/support/my_view_page.php" width="100%" height="500px"></iframe> 
                    
                  </div>
			</div>
	</div>
<?php require_once('footer.php'); ?>