<?php 
@ob_start();
require_once('header-withoutlogin.php');
if($login_active)
{
	$_SESSION['message']='You do not have access of registration page after login.';
	@header('Location: uploadfiles.php');
	exit();
}
$errors=array();
$company='';
$fname='';
$phoneno='';
$lname='';
$email='';
if(isset($_POST['fname']))
{
	$post['fname']=$_POST['fname'];
	if(trim($post['fname'])=='')
	{
		array_push($errors,'Please enter first name.');
	}else if(!preg_match('/^[a-zA-Z]*$/', trim($post['fname'])))
	{
		array_push($errors,'Please enter valid first name.');		
	}
	$post['lname']=$_POST['lname'];
	if(trim($post['lname'])=='')
	{
		array_push($errors,'Please enter last name.');
	}else if(!preg_match('/^[a-zA-Z]*$/', trim($post['lname'])))
	{
		array_push($errors,'Please enter valid last name.');		
	}
	$post['company']=$_POST['company'];
	if(trim($post['company'])=='')
	{
		array_push($errors,'Please enter company name.');
	}else if(!preg_match('/^[a-zA-Z][a-zA-Z ]*$/', trim($post['company'])))
	{
		array_push($errors,'Please enter valid company name.');		
	}
	
	$post['phoneno']=$_POST['phoneno'];
	if(trim($post['phoneno'])=='')
	{
		array_push($errors,'Please enter phone number.');
	}
	
	$post['user_email']=$_POST['email'];
	if(trim($post['user_email'])=='')
	{
		array_push($errors,'Please enter email address.');
	}elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", trim($post['user_email'])))
	{
		
	}
	$check=$user->Userfield('user_email', $post['user_email']);
	if(!empty($check))
	{
		array_push($errors,'Email address already exist, please try another.');
	}
	$post['user_type']='user';
	$post['cdate']=date('Y-m-d H:i:s');
	$post['udate']=$post['cdate'];
	$post['active']=0;
	$post['activationkey']=sha1($post['user_email'].$_salt.$post['udate']);
	$post['user_pass']=sha1($_POST['pwd'].$post['cdate']);
	$token=$user->generatePassword(6,8);
	$post['tokenid']=md5($token.$_salt.$post['user_email']);
	$key=$user->generatePassword(9,5);
	$post['keyid']=md5($key.$_salt.$post['user_email']);
	if(empty($errors))
	{
		$fieldnames='';
		$fieldvalues='';
		$cnt=1;
		foreach($post as $key=>$value)
		{
			if($cnt==1)
			{
				$fieldnames.="`$key`";
				$fieldvalues.="'$value'";
			}
			else
			{
				$fieldnames.=", `$key`";
				$fieldvalues.=", '$value'";
			}
			$cnt++;
		}
		$res=$user->addUser($fieldnames,$fieldvalues);
		if($res>0)
		{
			$activatationlink=$siteurl.'?activateaccount='.$post['activationkey'].'&email='.$post['user_email'];
			
			//Email to site owner
			$to      = 	$owner_email;
			$subject = 'Welcome to Sigmaways Retail Analytics';	
			$from = $post['user_email'];
			$fromname=$sitname;
			
			$message="Dear ".$post['fname']." ".$post['lname'].",<br /><br />
			Thanks for signing up with us. Please make a note of your credentials to send analytics request.<br /><br />
			Token: ".$post['tokenid']."<br />
			Key: ".$post['keyid']."<br /><br />
			Your login details are given below:<br /><br />
			Email: ".$post['user_email']."<br />
			Password: ".$_POST['pwd']."<br /><br />
			Also, click on this link to activate your account: <a href='".$activatationlink."'>".$activatationlink."</a><br />";
			$message.=$email_signature;
			Sendemail( $to, $subject, $message,$from,$from,$fromname);
			
			//Email to user
			$to      = 	$post['user_email'];
			$subject = 'Welcome to Sigmaways Retail Analytics';	
			
			$from = $owner_email;
			$fromname=$sitname;
			
			$message="Dear ".$post['fname']." ".$post['lname'].",<br /><br />
			Thanks for signing up with us. Your account is pending activation. Once activated you will receive an email from the website. You will be able to access your account then using the following credentials:<br /><br />
			Token: ".$post['tokenid']."<br />
			Key: ".$post['keyid']."<br /><br />
			Your login details are given below:<br /><br />
			Email: ".$post['user_email']."<br />
			Password: ".$_POST['pwd']."<br /><br />";
			$message.=$email_signature;
			Sendemail( $to, $subject, $message,$from,$from,$fromname);
			
			$_SESSION['message']='You have registered successfully, please wait for the admin to activate your account.';
			@header('Location: register.php');
			exit();
		}
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


    <!-- Portfolio Grid Section -->
	<div class="container innerpage mainregisterbox common_cntr">
	<div class="top-titlebar">
    <div class="container">
      <h1>Register</h1>
    </div>
  </div>
	<br/>
		 <div class="row">
<div class="login_form col-sm-12 col-xs-12 col-md-6 col-lg-6">
        <div class="form-header">Sigmaways Retail Analytics Signup</div>
        <form class="form-signin registerbox" name="newuser" id="newuser" method="post" action="">
  <div class="rg_top_section">
		  <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
		  <div class="reg_box">
		    <label for="inputEmail" class="sr-only">First Name*</label>
			<div class="inputiconbox">
			<span class="glyphicon glyphicon-user"></span>
		  <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" class="form-control required" required="required"  />
		  </div>
		  </div>
		  <div class="reg_box lstbox">
		    <label for="inputEmail" class="sr-only">Last Name*</label>
			<div class="inputiconbox">
			<span class="glyphicon glyphicon-user"></span>
		  <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" class="form-control required" required="required"  />
		  </div>
		  </div>
		  
		  <div class="reg_box fullreg">
		  <label for="inputEmail" class="sr-only">Company Name*</label>
		  <div class="inputiconbox">
		  <span class="glyphicon glyphicon-briefcase"></span>
		  <input type="text" id="company" name="company" value="<?php echo $company; ?>" class="form-control required" required="required" />
		  </div>
		  </div>
		  
		  <div class="reg_box fullreg">
					   <label for="inputEmail" class="sr-only">Phone No*</label>
					   <div class="inputiconbox">
				<i class="fa fa-phone pno"></i>
					  <input type="text" id="phoneno" maxlength="13" name="phoneno" value="<?php echo $phoneno; ?>" class="form-control required" required="required"></div>
					  </div>
		  		<div class="reg_box fullreg">
          <label for="inputEmail" class="sr-only">Email address*</label>
		  <div class="inputiconbox">
		  <span class="glyphicon glyphicon-envelope"></span>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>" class="form-control required email" required="required"  />
		  </div>
		  </div>
		  <div class="reg_box fullreg">
          <label for="inputPassword" class="sr-only">Password*</label>
		  <div class="inputiconbox">
		  <span class="glyphicon glyphicon-lock"></span>
          <input type="password" id="pwd" name="pwd" class="form-control required" placeholder="Password" autocomplete="off" required="required"  />
		  </div>
		  </div>
		    <p class="digittext">Passwords must have a minimum of 8 characters with at least one digit and one letter.</p>
	 </div>
		
          <div class="form-box-footer form-header">
            <p>By signing up, you agree to the <a href="termsofservices.php" target="_blank">Terms of Service</a> and <a href="privacy-policy.php" target="_blank">Privacy Policy</a>.</p>
            <input class="btn btn-block" type="submit" name="signupSubmit" value="Continue" /> 
       
          </div>
        </form>
      </div>
	  </div>
	  </div>
	
<?php require_once('footer-withoutlogin.php'); ?>
