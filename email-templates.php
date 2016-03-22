<?php require_once('header.php');
if($user_type=='user')
{
	$_SESSION['message']='You do not have access this page.';
	echo"<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}

$errors = array();

$notify = array();
$notify['notify_me_when_customer'] = 0;
$notify['notify_emails'] = '';
$notify['email_me_when_register'] = 0;
$notify['email_customer_when_register'] = 0;
$notify['notify_payment_success'] = 0;
$notify['notify_payment_fail'] = 0;
$notify['notify_refund_success'] = 0;
$notify['notify_when_trial_end'] = 0;
$notify['notify_account_renew'] = 0;
$notify['notify_plan_change'] = 0;
$notify['notify_billing_date_change'] = 0;
		

if(isset($_POST['Submit']))
{
		if(isset($_POST['notify_me_when_customer']) && $_POST['notify_me_when_customer'] == 1)
		{
			$notify['notify_me_when_customer'] = true;	
		}
		
		if(isset($_POST['notify_emails']) && $_POST['notify_emails'] != "")
		{
			$notify['notify_emails'] = trim($_POST['notify_emails']);	
		}
		
		if(isset($_POST['email_me_when_register']) && $_POST['email_me_when_register'] == 1)
		{
			$notify['email_me_when_register'] = true;	
		}		
		
		if(isset($_POST['email_customer_when_register']) && $_POST['email_customer_when_register'] == 1)
		{
			$notify['email_customer_when_register'] = true;	
		}		
		
		if(isset($_POST['notify_payment_success']) && $_POST['notify_payment_success'] == 1)
		{
			$notify['notify_payment_success'] = true;	
		}		
		if(isset($_POST['notify_payment_fail']) && $_POST['notify_payment_fail'] == 1)
		{
			$notify['notify_payment_fail'] = true;	
		}		
		
		if(isset($_POST['notify_refund_success']) && $_POST['notify_refund_success'] == 1)
		{
			$notify['notify_refund_success'] = true;	
		}		
		
		if(isset($_POST['notify_when_trial_end']) && $_POST['notify_when_trial_end'] == 1)
		{
			$notify['notify_when_trial_end'] = true;	
		}		
		
		if(isset($_POST['notify_account_renew']) && $_POST['notify_account_renew'] == 1)
		{
			$notify['notify_account_renew'] = true;	
		}		
		if(isset($_POST['notify_plan_change']) && $_POST['notify_plan_change'] == 1)
		{
			$notify['notify_plan_change'] = true;	
		}		
		
		if(isset($_POST['notify_billing_date_change']) && $_POST['notify_billing_date_change'] == 1)
		{
			$notify['notify_billing_date_change'] = true;	
		}
		
		$template->addNotification($_SESSION["User_id"], $notify);
		
		$_SESSION['message']='Your email notification setting updated successfully.';
		@header('Location: email-templates.php');
		exit();		
}

$email_settings = 	$template-> getNotification($_SESSION["User_id"]);

$notify['notify_me_when_customer'] = 0;
$notify['notify_emails'] = '';
$notify['email_me_when_register'] = 0;
$notify['email_customer_when_register'] = 0;
$notify['notify_payment_success'] = 0;
$notify['notify_payment_fail'] = 0;
$notify['notify_refund_success'] = 0;
$notify['notify_when_trial_end'] = 0;
$notify['notify_account_renew'] = 0;
$notify['notify_plan_change'] = 0;
$notify['notify_billing_date_change'] = 0;

if(count($email_settings))
{
	if($email_settings['notify_me_when_customer'] == 1)
	{
		$notify['notify_me_when_customer'] = 1;	
	}	
	if($email_settings['notify_emails'] == 1)
	{
		$notify['notify_emails'] = $email_settings['notify_emails'];	
	}	
	if($email_settings['email_me_when_register'] == 1)
	{
		$notify['email_me_when_register'] = 1;	
	}	
	if($email_settings['email_customer_when_register'] == 1)
	{
		$notify['email_customer_when_register'] = 1;	
	}
	
	if($email_settings['notify_payment_success'] == 1)
	{
		$notify['notify_payment_success'] = 1;	
	}
	
	if($email_settings['notify_payment_fail'] == 1)
	{
		$notify['notify_payment_fail'] = 1;	
	}
	
	if($email_settings['notify_refund_success'] == 1)
	{
		$notify['notify_refund_success'] = 1;	
	}
	
	if($email_settings['notify_when_trial_end'] == 1)
	{
		$notify['notify_when_trial_end'] = 1;	
	}
	
	if($email_settings['notify_account_renew'] == 1)
	{
		$notify['notify_account_renew'] = 1;	
	}
	
	if($email_settings['notify_plan_change'] == 1)
	{
		$notify['notify_plan_change'] = 1;	
	}
	
	if($email_settings['notify_billing_date_change'] == 1)
	{
		$notify['notify_billing_date_change'] = 1;	
	}	
}

?>
        <div id="page-wrapper">

            <div class="container-fluid">

				<div class="innerpage mainregisterbox">
				 <div class="row editusersectionblock">
					<div class="login_form col-sm-12 col-xs-12 col-md-10 col-lg-10 admprofileedit useredit">
					  <div class="form-header">Email Setting & Templates</div>
							<form class="form-signin registerbox" name="newuser" id="newuser" method="post" action="">
					  <div class="rg_top_section">
							  <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
                              
                              
                                <div class="fullreg alignleft"><h3>BCC Email Settings</h3></div>
							  <div class="fullreg alignleft">
							<p class="checkbx"><input type="checkbox" <?php if($notify['notify_me_when_customer'] == 1) echo 'checked'; ?>  class="form-checkbox" name="notify_me_when_customer" value="1" />&nbsp;Sigmaways should also notify me when a customer is notified</p>
								
							  </div>
							 
							 
                              <div class="reg_box fullreg alignleft">
								<label for="inputEmail" class="sr-only">Multiple emails addresses allowed separated by commas</label>
								<div class="inputiconbox">
									<span class="glyphicon glyphicon-envelope"></span>
							  		<input type="text" id="notify_emails" name="notify_emails" class="form-control" value="<?php echo $notify['notify_emails'] ?>" />
							 		 </div>
							  	</div>
							  
							  <div class="fullreg alignleft"><h3>Signup Emails</h3></div>
							  
							  <div class="fullreg alignleft">
								<p>Emails to Me</p>
								<p class="checkbx"><input type="checkbox" <?php if($notify['email_me_when_register'] == 1) echo 'checked'; ?> class="form-checkbox" name="email_me_when_register" value="1" />Email me when a subscription is created</p>
                                <p>These emails will be sent to "<?php echo $account_log_email; ?>"</p>                                          
                                </div>
							
                            
                            <div class="fullreg alignleft">
								<p>Emails to my Customers</p>
								<p class="checkbx"><input type="checkbox" <?php if($notify['email_customer_when_register'] == 1) echo 'checked'; ?> name="email_customer_when_register" value="1" />Email my customers when they sign up</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=1" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                                     
                                     
                            <div class="fullreg alignleft"><h3>Receipt Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_payment_success'] == 1) echo 'checked'; ?> name="notify_payment_success" value="1" />Email my customers a receipt when they are billed</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=2" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            <div class="fullreg">&nbsp;</div>
                            
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_payment_fail'] == 1) echo 'checked'; ?> name="notify_payment_fail" value="1" />Email my customers a receipt when payment failed</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=3" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            <div class="fullreg">&nbsp;</div>
                            
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_refund_success'] == 1) echo 'checked'; ?> name="notify_refund_success" value="1" />Email my customers a receipt when refund success</p>
							</div>
                            
                            <div class="fullreg reg_box alignleft">
								<a href="email-template.php?tmp_id=4" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>    
                            
                                                     
                            <div class="fullreg alignleft"><h3>End of Trial Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_when_trial_end'] == 1) echo 'checked'; ?> name="notify_when_trial_end" value="1" />Email my customers when their trial is about to expire</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=6" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            <div class="fullreg alignleft"><h3>Upcoming Renewal Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_account_renew'] == 1) echo 'checked'; ?> name="notify_account_renew" value="1" />Email my customers when their subscription is about to renew</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=7" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            
                            
                            <div class="fullreg alignleft"><h3>Subscriptions Plan Change</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_plan_change'] == 1) echo 'checked'; ?> name="notify_plan_change" value="1" />Email my customers when their subscription plan change</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=8" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            
                            <div class="fullreg alignleft"><h3>Subscriptions Billing Date Change</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" <?php if($notify['notify_billing_date_change'] == 1) echo 'checked'; ?> name="notify_billing_date_change" value="1" />Email my customers when their billing date change</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=9" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                                                                                         
                            
							  <div class="form-box-footer form-header border_bott_none">
								<input class="btn btn-block" type="submit" name="Submit" value="Save Settings" /> 
						   
							  </div>
                              </div>
							</form>
						  </div>
						  </div>
				  </div>
            </div>
           
        </div>
     

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<?php require_once('footer.php'); ?>
