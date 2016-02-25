<?php require_once('header-withoutlogin.php');

$errors=array();
if(isset($_POST['email']))
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
			$username=$user->Userdetail($uid, 'user_login', true);
			$to      = 	$email;
			$subject = $sitname.' : Forgot Password';	
			$from = $owner_email;
			$fromname=$sitname;
			
			$message="Dear ".$username.",<br /><br />Thank you for contacting us regarding your lost password. Your password has been reset to <strong>".$pwd."</strong>, please log in and change the password to something more memorable.<br />";
			$message.=$email_signature;
			
			Sendemail( $to, $subject, $message,$from,$from,$fromname);
			
			$_SESSION['message']='Your new password has been sent to your email '.$email.'.';
			echo"<script type='text/javascript'>window.location='login.php';</script>";
			exit();
		}
	}
	if(!$active)
	{
		array_push($errors,'Your account is not active.');
	}
}
 ?>
    <!-- Header -->


    <!-- Portfolio Grid Section -->
	<div class="container innerpage">
		 <div class="row">
<div class="login_form forgot_pwd col-sm-7 col-xs-12 col-md-5">
        <div class="form-header"> <i class="fa fa-user"></i> </div>
		<?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
		<form class="form-signin" id="loginuser" name="loginuser" action="" method="post">
          <h2 class="form-signin-heading">Reset Password</h2>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" required="" autofocus="">
           
          <button class="btn btn-lg btn-primary btn-block" type="submit">SEND</button>
        </form>
      </div>
	  </div>
	  </div>
	
<?php require_once('footer-withoutlogin.php'); ?>
