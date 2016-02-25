<?php require_once('header-withoutlogin.php');
if($login_active)
{
	@header('Location: uploadfiles.php');
	exit();
}
$errors=array();
$email='';
$pwd='';
$rember=false;
if(isset($_COOKIE['ret_usrname'])){
	$email=$_COOKIE['ret_usrname'];
	$rember=true;
}
if(isset($_COOKIE['ret_password'])){
	$pwd=$_COOKIE['ret_password'];
}
if(isset($_POST['email']))
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
		$password=sha1($pwd.$cdate);
		if(isset($_POST['rememberme'])){$rememberme=true;}
		else{$rememberme=false;}
		$check=$user->checkUserLogin($email, $password, $rememberme);
		if($check>0)
		{
			@header('Location: uploadfiles.php');
		}
		else
		{
			$check=array();
		}
	}
	if(empty($check) && $active)
	{
		array_push($errors,'Login detail is incorrect.');
	}
	if(!$active)
	{
		array_push($errors,'Your account is not active.');
	}
}

 ?>
 <div class="container innerpage mainregisterbox common_cntr">
	<div class="top-titlebar">
    <div class="container">
      <h1>Login</h1>
    </div>
  </div>
	<br/>
		 <div class="row">
<div class="login_form col-sm-12 col-xs-12 col-md-6 col-lg-6">
        <div class="form-header">Sigmaways Retail Analytics Login</div>
        <form class="form-signin" id="loginuser" name="loginuser" action="" method="post">
 	 	<div class="rg_top_section">
		  <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
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
          <input type="password" id="pwd" name="pwd" class="form-control required" value="<?php echo $pwd; ?>" placeholder="Password" autocomplete="off" required="required"  />
		  </div>
		  </div>
		  <div class="reg_box fullreg lgnbox">
			  <label class="col-xs-3"><input type="checkbox" name="rememberme"<?php if($rember){echo' checked="checked"';} ?> style="width:20px; float:left; height:20px; min-height:20px;" /> Remember me </label>
		
			  
			</div>
			
	 	</div>
		
        
		
          <div class="form-box-footer form-header ftr_loginsection">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<div class="col-md-12 lgnbox">
			<div class="col-xs-6"> <i class="fa fa-unlock-alt"></i> <button data-target="#myModal" data-toggle="modal" class="btn btn-info btn-lg anchortext forgotpwdlink" type="button">Forgot username or password?</button> </div>
			  <div class="col-md-3"><a href="register.php"><i class="fa fa-pencil-square-o"></i> Signup</a></div>
       </div>
          </div>
        </form>
      </div>
	  </div>
	  </div>
<!-- Header -->

<?php require_once('footer-withoutlogin.php'); ?>