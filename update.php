<?php require_once('includes/head.php'); 
$errors=array();
if(isset($_POST['login']))
{
	
	$email=$_POST['email'];
	if(trim($email)=='')
	{
		array_push($errors,'Please enter email address.');
	}
	$pwd=$_POST['pwd'];
	if(trim($email)=='')
	{
		array_push($errors,'Please enter password.');
	}
	$check=$user->Userfield('user_email', $email);
	$active=true;
	if(!empty($check))
	{
		$uid=$check[1]['ID'];
		$checkactive=$user->Userdetail($uid, 'active', true);
		if($checkactive==1){
			$active=false;
		}
		else
		{
			array_push($errors,'Your account is not active.');
		}
	}
	if(!empty($check))
	{
		$cdate=$user->Userdetail($uid, 'cdate', true);
		$password=sha1($pwd.$cdate);
		if(isset($_POST['rememberme'])){$rememberme=true;}
		else{$rememberme=false;}
		$check=$user->checkUserLogin($email, $password, $rememberme);
		if($check>0)
		{
			echo'Done';
		}
		else
		{
			$check=array();
		}
	}
	if(empty($check))
	{
		array_push($errors,'Login detail is incorrect.');
	}
	
}
if(isset($_POST['forgotpwd']))
{
	
	$email=$_POST['email'];
	if(trim($email)=='')
	{
		array_push($errors,'Please enter email address.');
	}
	$check=$user->Userfield('user_email', $email);
	$active=false;
	if(!empty($check))
	{
		$uid=$check[1]['ID'];
		$checkactive=$user->Userdetail($uid, 'active', true);
		if($checkactive==1){
			$active=true;
		}
		else
		{
			array_push($errors,'Your account is not active.');
		}
	}
	else
	{
		array_push($errors,'Your email is not registered.');
	}
	if($active)
	{
		$cdate=$user->Userdetail($uid, 'cdate', true);
		$pwd=$user->generatePassword(6,8);
		$password=sha1($pwd.$cdate);
		$post['user_pass']=$password;
		$res=$user->updateUser($uid ,$post);
		if($res>0)
		{
			$username=$user->Userdetail($uid, 'fname', true).' '.$user->Userdetail($uid, 'lname', true);
			$to      = 	$email;
			$subject = $sitname.' : Forgot Password';	
			$from = $owner_email;
			$fromname=$sitname;
		
			
			$message="Dear ".$username.",<br /><br />Thank you for contacting us regarding your lost password. Your password has been reset to <strong>".$pwd."</strong>, please log in and change the password to something more memorable.<br />";
			$message.=$email_signature;
			
			Sendemail( $to, $subject, $message,$from,$from,$fromname);
			
			echo 'Your new password has been sent to your email '.$email.'.';
		}
	}
	
	
}
if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}}