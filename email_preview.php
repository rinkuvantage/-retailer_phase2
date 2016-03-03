<?php require_once('includes/head.php');
if(isset($_GET['preview']) && $_GET['preview'] == 'show')
{
	$json = array();
	
	$email_template = $_POST['email_template'];
	
	$from = str_replace("{{from_email}}", $account_log_email, trim($_POST['email_from']));
	
	$msgbody = "";
	
	if($email_template == 1)
	{
		$default_subject = "Billing Fee";		
		$subject = str_replace("{{from_subject}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msgbody = 	str_replace("{{company_name}}", $account_company, trim($msg));	
	}
	
	if($email_template == 2)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = 	str_replace("{{purchase_amount}}", "$10.00", trim($msg));
		$msg2 = 	str_replace("{{purchase_plan}}", "Free Plan", trim($msg1));
		$msgbody = 	str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	
	if($email_template == 3)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	if($email_template == 4)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_amount}}", "$10.00", trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	if($email_template == 5)
	{
		
		$subject = trim($_POST['email_subject']);
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{credit_card_number}}", "xxxx-xxxx-xxxx-xxxx", trim($msg));		
		$msg2 = str_replace("{{card_expire_in_days}}", '7', trim($msg1));	
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));	
	}
	if($email_template == 6)
	{
		$default_subject = "Free Plan";	
		
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));			
		$msg2 = str_replace("{{trial_end_date}}", $end_date, trim($msg1));			
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	if($email_template == 7)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
		
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));
		$msg2 = str_replace("{{renew_date}}", $end_date, trim($msg1));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	if($email_template == 8)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", $default_subject, trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	if($email_template == 9)
	{
		$default_subject = "Free Plan";		
		$subject = trim($_POST['email_subject']);
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{change_billing_date}}", $end_date, trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	
	$json['success'] = '<div class="modal-dialog" style=" width:800px;">   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">'.$subject.'</h4>
      </div>
	   <div class="subtitle"> <p style="">From: '.$from.'	</p>
 		<p =>To: vantage.krishna@gmail.com</p>
  	</div>
      <div class="modal-body">'.$msgbody.'
	  <p>&nbsp;</p>
 		<div class="inputblock"><input type="text" name="previewmail" value="'.$account_log_email.'" />
 		<input class="smitbox" type="submit" value="Send Preview" />
		<p class="msgsuccess"></p>
 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  	jQuery(document).ready(function(){
		jQuery(".smitbox").click(function(){			
		jQuery.ajax({
		url: \'./email_preview.php?preview=email\',
		type: \'post\',
		data: jQuery("#email_temp input[type=\'text\'], #email_temp input[type=\'hidden\'], input[name=\'previewmail\'], #email_temp textarea"),
		dataType: \'json\',
		beforeSend: function() {
			jQuery(\'.smitbox\').attr(\'disabled\', true);			
		},	
		complete: function() {
			jQuery(\'.smitbox\').attr(\'disabled\', false); 			
		},			
		success: function(json) {	
					jQuery(".msgsuccess").html("");									
					if (json[\'success\']) {							
							jQuery(".msgsuccess").html("Email Sent Successfully");	
																
					}
							
		  	 	}	
			});						
		});
	});
  </script>';
  
  print(json_encode($json));
  die;
}

if(isset($_GET['preview']) && $_GET['preview'] == 'email')
{
	$json = array();
	
	$email_template = $_POST['email_template'];
	
	$from = str_replace("{{from_email}}", $account_log_email, trim($_POST['email_from']));
	
	$msgbody = "";
	
	if($email_template == 1)
	{
		$default_subject = "Billing Fee";		
		$subject = str_replace("{{from_subject}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msgbody = 	str_replace("{{company_name}}", $account_company, trim($msg));	
	}
	
	if($email_template == 2)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = 	str_replace("{{purchase_amount}}", "$10.00", trim($msg));
		$msg2 = 	str_replace("{{purchase_plan}}", "Free Plan", trim($msg1));
		$msgbody = 	str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	
	if($email_template == 3)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	if($email_template == 4)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_amount}}", "$10.00", trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	if($email_template == 5)
	{
		
		$subject = trim($_POST['email_subject']);
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{credit_card_number}}", "xxxx-xxxx-xxxx-xxxx", trim($msg));		
		$msg2 = str_replace("{{card_expire_in_days}}", '7', trim($msg1));	
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));	
	}
	if($email_template == 6)
	{
		$default_subject = "Free Plan";	
		
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));			
		$msg2 = str_replace("{{trial_end_date}}", $end_date, trim($msg1));			
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	if($email_template == 7)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
		
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", "Free Plan", trim($msg));
		$msg2 = str_replace("{{renew_date}}", $end_date, trim($msg1));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg2));		
	}
	if($email_template == 8)
	{
		$default_subject = "Free Plan";		
		$subject = str_replace("{{purchase_plan}}", $default_subject, trim($_POST['email_subject']));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{purchase_plan}}", $default_subject, trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	if($email_template == 9)
	{
		$default_subject = "Free Plan";		
		$subject = trim($_POST['email_subject']);
		$today = date('Y-m-d');		
		$end_date = date('m/d/Y', strtotime($today. ' + 7 day'));
			
		$msg = 	str_replace("{{customer_name}}", "Ram", trim($_POST['email_body_text']));
		$msg1 = str_replace("{{change_billing_date}}", $end_date, trim($msg));		
		$msgbody = str_replace("{{company_name}}", $account_company, trim($msg1));		
	}
	
	
	$to = $_POST['previewmail'];	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
	$headers .= 'From: Sigmaways <noreply@sigmaways.com>' . "\r\n";
	
	mail($to, $subject, $msgbody, $headers);
		
	
	$json['success'] = "Email Sent Successfully";
  
  print(json_encode($json));
  die;
}
?>