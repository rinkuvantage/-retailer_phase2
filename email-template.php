<?php require_once('header.php');
if($user_type=='user')
{
	$_SESSION['message']='You do not have access this page.';
	echo"<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}

$template_id = (int)$_GET['tmp_id'];
$errors = array();

if(isset($_POST['templateSubmit']) && $_POST['templateSubmit']!="")
{

	if(isset($_POST['email_from']) && strlen(trim($_POST['email_from'])) < 14)
	{
		array_push($errors,'Please enter from email address.');		
	}
	if(isset($_POST['email_subject']) && strlen(trim($_POST['email_subject'])) < 5)
	{
		array_push($errors,'Please enter email subject.');		
	}if(isset($_POST['email_body_text']) && strlen(trim($_POST['email_body_text'])) < 10)
	{
		array_push($errors,'Please enter email body message.');		
	}

	if(empty($errors))
	{
		$data = array();
		
		$data['email_from'] = $_POST['email_from'];
		$data['email_subject'] = $_POST['email_subject'];
		$data['email_body_text'] = $_POST['email_body_text'];
		$data['template_id'] = $template_id;
		$template->addTemplate($uid, $data);
		
		array_push($errors,'Template saved successfully.');
	}
}


if($template_id ==1)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Signup Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Welcome to {{from_subject}}';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>You\'ve successfully signed up your account with us.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==2)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Billing Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Receipt for your purchase of {{purchase_plan}}';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>You were just charged {{purchase_amount}} for {{purchase_plan}}.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==3)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Payment Failed Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Payment Failed for your purchase of {{purchase_plan}}';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your {{purchase_plan}} has been failed for payment. Please make your payment successfull or call/email us for support.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==4)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Refund Successfull Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Refund success for {{purchase_plan}}';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your payment amount {{purchase_amount}} has been refunded successfully.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==5)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Card Expired Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Your credit card on file is about to expire';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your credit card {{credit_card_number}} is set to expire in {{card_expire_in_days}} day(s).<br/><br/>
		Please login into your account to update new card details.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==6)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "End of Trial Period Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Trial Ending: Your trial period on {{purchase_plan}} will end soon';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your trial period for {{purchase_plan}} will be end on {{trial_end_date}}. Please update your plan to continue services.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==7)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Renew of Subscriptions Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Renewal Notice: Your subscription to {{purchase_plan}} will renew soon';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your subscription to {{purchase_plan}} will renew on {{renew_date}}. You will not be billed again for this subscription.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==8)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Plan Changed Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Plan Changed Notice: Your subscription to {{purchase_plan}} is updated now';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your subscription to {{purchase_plan}} is update now.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}else if($template_id ==9)
{
	
	$templates = $template->getTemplate($uid, $template_id);	
	
	$template_name = "Changes of Billing Date Emails Template";
	
	if($templates)
	{		
		
		$email_from = $templates['email_from'];
		$email_subject = $templates['email_subject'];
		$email_body_text = $templates['email_body_text'];	
		
	}else{
		
		$email_from = '{{from_email}}';
		$email_subject = 'Billing Date Changed';
		$email_body_text = 'Dear {{customer_name}},<br/><br/>Your subscription account billing date {{change_billing_date}} changed.<br/><br/>Thanks,<br/>{{company_name}}';	
	}
}
?>
        <div id="page-wrapper">
            <div class="container-fluid">
				<div class="innerpage mainregisterbox">
				 <div class="row editusersectionblock">
					<div class="login_form col-sm-12 col-xs-12 col-md-10 col-lg-10 admprofileedit useredit">
					  <div class="form-header"><?php echo $template_name; ?></div>
							<form class="form-signin registerbox" name="email_temp" id="email_temp" method="post" action="">
					  <div class="rg_top_section">							  
							 <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?> 
                              <div class="fullreg">
								<label for="inputEmail" class="sr-only">From</label>
								<div class="inputiconbox">
									<span class="glyphicon glyphicon-user"></span>
							 		 <input type="text" placeholder="Enter " id="email_from" name="email_from" value="<?php echo $email_from; ?>" class="form-control required" required="required"  />
							  		</div>
							  </div>                              
                              <div class="fullreg reg_box">
								<label for="inputEmail" class="sr-only">Subject</label>
								<div class="inputiconbox">
									<i class="fa fa-pencil pno"></i>
                                    <input type="hidden" name="email_template" value="<?php echo $_GET['tmp_id']; ?>" >
							 		 <input type="text" placeholder="Enter your email subject" id="email_subject" name="email_subject" value="<?php echo $email_subject; ?>" class="form-control required" required="required"  />
							  		</div>
							  </div>
                              <div class="fullreg">								
								<div class="inputiconbox">								
							 	<textarea id="email_body_text" name="email_body_text" class="ckeditor form-control required" required="required"><?php echo $email_body_text; ?></textarea>
							  		</div>
							  </div>
							  <div class="form-box-footer form-header border_bott_none">
								<input class="btn btn-block template_save" type="submit" name="templateSubmit" value="Save" /> 
                                <input class="btn btn-block template_preview" type="button" name="templatepreview" value="Preview" />						   
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
<div id="myModal21" class="modal fade" role="dialog"></div>      

<script src="./js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
		
	
  CKEDITOR.config.removePlugins = 'about';
					
		jQuery('#email_temp').validate({
			rules: {
				email_from: {					
					required: true,
				},
				email_subject: {					
					required: true,
				},
				email_body_text: {
									required: function() {
										  CKEDITOR.instances.email_body_text.updateElement();
										},
                         				minlength:20
				}
			},
			messages: {				
				email_body_text: {
					required: "Please enter message",					
					minlength: "Email body text at least 20 character"
				},
				email_from: {
					required: "Please enter sender detail"
				},
				email_subject: {
					required: "Please enter subject of message"
				}
			}
		});
		
		
		jQuery(".template_preview").click(function(){				
			
		jQuery.ajax({
		url: './email_preview.php?preview=show',
		type: 'post',
		data: jQuery('#email_temp input[type=\'text\'], #email_temp input[type=\'hidden\'], #email_temp textarea'),
		dataType: 'json',
		beforeSend: function() {
			jQuery('.template_preview').attr('disabled', true);			
		},	
		complete: function() {
			jQuery('.template_preview').attr('disabled', false); 			
		},			
		success: function(json) {													
					if (json['success']) {	
							
							jQuery("#myModal21").html('');
							jQuery("#myModal21").html(json['success']);		
							$("#myModal21").modal('show');											
					}
							
		  	 	}	
			});						
		});		
		
	});
</script>
<?php require_once('footer.php'); ?>