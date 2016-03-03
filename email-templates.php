<?php require_once('header.php');
if($user_type=='user')
{
	$_SESSION['message']='You do not have access this page.';
	echo"<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}

$errors = array();
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
							<p class="checkbx"><input type="checkbox" class="form-checkbox" name="notify_me_when_customer" value="1" />&nbsp;Sigmaways should also notify me when a customer is notified</p>
								
							  </div>
							 
							 
                              <div class="reg_box fullreg alignleft">
								<label for="inputEmail" class="sr-only">Multiple emails addresses allowed separated by commas</label>
								<div class="inputiconbox">
									<span class="glyphicon glyphicon-envelope"></span>
							  		<input type="text" id="notify_emails" name="notify_emails" class="form-control" />
							 		 </div>
							  	</div>
							  
							  <div class="fullreg alignleft"><h3>Signup Emails</h3></div>
							  
							  <div class="fullreg alignleft">
								<p>Emails to Me</p>
								<p class="checkbx"><input type="checkbox" class="form-checkbox" name="email_when_subscriptions" value="1" />Email me when a subscription is created</p>
                                <p>These emails will be sent to "<?php echo $account_log_email; ?>"</p>                                          
                                </div>
							
                            
                            <div class="fullreg alignleft">
								<p>Emails to my Customers</p>
								<p class="checkbx"><input type="checkbox" name="email_when_subscriptions" value="1" />Email my customers when they sign up</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=1" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                                     
                                     
                            <div class="fullreg alignleft"><h3>Receipt Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_billing" value="1" />Email my customers a receipt when they are billed</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=2" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            <div class="fullreg">&nbsp;</div>
                            
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_billing_fail" value="1" />Email my customers a receipt when payment failed</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=3" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            <div class="fullreg">&nbsp;</div>
                            
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_billing_fail" value="1" />Email my customers a receipt when refund success</p>
							</div>
                            
                            <div class="fullreg reg_box alignleft">
								<a href="email-template.php?tmp_id=4" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>    
                            
                            <div class="fullreg alignleft"><h3>Card Expiration Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_card_expire" value="1" />Email my customers when their card on file is set to expire</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=5" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            <div class="fullreg alignleft"><h3>End of Trial Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_when_trial_end" value="1" />Email my customers when their trial is about to expire</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=6" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            <div class="fullreg alignleft"><h3>Upcoming Renewal Emails</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_account_renew" value="1" />Email my customers when their subscription is about to renew</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=7" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            
                            
                            <div class="fullreg alignleft"><h3>Subscriptions Plan Change</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_account_renew" value="1" />Email my customers when their subscription plan change</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=8" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                            
                            
                            <div class="fullreg alignleft"><h3>Subscriptions Billing Date Change</h3></div>       
                            <div class="fullreg alignleft">								
								<p class="checkbx"><input type="checkbox" name="notify_account_renew" value="1" />Email my customers when their billing date change</p>
							</div>
                            
                            <div class="fullreg alignleft">
								<a href="email-template.php?tmp_id=9" class="btn btn-default"><i class="fa fa-pencil"></i> Edit Template</a>
							</div>
                                                                                         
                            
							  <div class="form-box-footer form-header">
								<input class="btn btn-block" type="submit" name="Submit" value="Save Settings" /> 
						   
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
