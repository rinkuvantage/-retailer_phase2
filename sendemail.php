<?php @ob_start();
require_once('includes/head.php'); 
$errors=array();

if(isset($_GET['requestdemo']))
{	
	$json = array();
	$error = 0;
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];	
	$website=$_POST['website'];
	$company=$_POST['company'];
	$title=$_POST['title'];
	$phoneno=$_POST['phoneno'];
	$comments=$_POST['comments'];
	
	if(trim($first_name)=='')
	{
		$json['error']['name'] = 'Please enter first name.';
		$error++;
		
	}
	else if(!preg_match('/^[a-zA-Z0-9 ]+$/', trim($first_name)))
	{
		$json['error']['name'] = 'Please enter valid first name.';
		$error++;
		
	}if(trim($last_name)=='')
	{
		$json['error']['lastname'] = 'Please enter last name.';
		$error++;
		
	}else if(!preg_match('/^[a-zA-Z0-9 ]+$/', trim($last_name)))
	{
		$json['error']['lastname'] = 'Please enter valid last name.';
		$error++;
		
	}if(trim($title)=='')
	{
		$json['error']['title'] = 'Please enter title.';
		$error++;
		
	}else if(!preg_match('/^[a-zA-Z][a-zA-Z0-9 ]+$/', trim($title)))
	{
		$json['error']['title'] = 'Please enter valid title.';
		$error++;
		
	}	
	if(trim($phoneno)=='')
	{
		$json['error']['phoneno'] = 'Please enter telephone number.';
		$error++;
		
	}else if(!preg_match('/^[\d -]+$/', trim($phoneno)))
	{
		$json['error']['phoneno'] = 'Please enter valid telephone.';
		$error++;
		
	}if(trim($email)=='')
	{
		$json['error']['email'] = 'Please enter email.';
		$error++;
	}else if(!isValidEmail($email))
	{
		$json['error']['email'] = 'Invalid email address';
		$error++;			
	}if(trim($comments)=='')
	{
		$json['error']['message'] = 'Please enter message.';
		$error++;
		
	}else if(!preg_match('/^[a-zA-Z0-9,. ]+$/', trim($comments)))
	{
		$json['error']['message'] = 'Please enter valid message.';
		$error++;
		
	}
	
	if($error == 0)
	{
		
		$to   = 'sales@sigmaways.com';
		$subject = $sitname.' : Request Demo';	
		$from = $email;
		$fromname=$sitname;
		
		
		$message="Dear Admin,<br /><br />
		Following user has been contact you for demo. The user detail is given below<br /><br />
		First Name: ".$first_name."<br />
		Last Name: ".$last_name."<br />
		Email: ".$email."<br />
		Website: ".$website."<br />
		Company: ".$company."<br />
		Phone Number: ".$phoneno."<br />
		Comments: ".$comments."<br /><br />";
		$message.=$email_signature;
		Sendemail( $to, $subject, $message,$from,$from,$fromname);		
		$json['success']['confirmation'] = "Thank You,Your message has been sent successfully. We will get back to you shortly.";
		$_SESSION['message']=$json['success']['confirmation'];
		
	}
	print(json_encode($json));
}





if(isset($_GET['form']))
{
		
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$json = array();
	$error = 0;
	
	   if(trim($name)=='')
		{
			$json['error']['name'] = 'Please enter your name.';
			$error++;
			
		}else if(!preg_match('/^[a-zA-Z0-9 ]+$/', trim($name)))
		{
			$json['error']['name'] = 'Please enter valid name.';
			$error++;
			
		}if(trim($email)=='')
		{
			$json['error']['email'] = 'Please enter email.';
			$error++;
		}else if(!isValidEmail($email))
		{
			$json['error']['email'] = 'Invalid email address';
			$error++;			
		}if(trim($message)=='')
		{
			$json['error']['message'] = 'Please enter message.';
			$error++;
			
		}else if(!preg_match('/^[a-zA-Z0-9,. ]+$/', trim($message)))
		{
			$json['error']['message'] = 'Please enter valid message.';
			$error++;
			
		}
	
	
	
	$website=$_POST['website'];
	$message1=$_POST['message'];
	
	if($error == 0)
	{		
		$to      = 	'support@sigmaways.com';
		$subject = $sitname.' : Request Demo';	
		$from = $email;
		$fromname=$sitname;
		
		$message="Dear Admin,<br /><br />
		Following user has been contact you for support. The user detail is given below<br /><br />
		Name: ".$name."<br />
		Email: ".$email."<br />";
		if($website != "")
		{
		 $message .= "Website: ".$website."<br />";
		}
		
		$message .= "Message: ".$message1."<br /><br />";
		$message.=$email_signature;
		Sendemail( $to, $subject, $message,$from,$from,$fromname);
		$json['success']['confirmation'] = "Thank You, Your message has been sent successfully. We will get back to you shortly.";
		$_SESSION['message']=$json['success']['confirmation'];
		
	}
	
	print(json_encode($json));
	
}

function isValidEmail($email)
{
	return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email);
}