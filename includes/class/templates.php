<?php
if ( !class_exists( 'Templates' ) ) {
	class Templates
	{		
	
		/*
		Function Name: addEmailTemplate()
		Function Aim : To create new seperate email template for there own customers
		*/
		
		function addTemplate($user_id, $data = array())
		{
			global $prefix;			
			mysql_query("DELETE FROM `".$prefix."templates` WHERE `template_id` = '".$data['template_id']."' AND `ID` = '".$user_id."'");
							
				$sql = "INSERT INTO `".$prefix."templates`  SET `template_id` = '".$data['template_id']."', `ID` = '".$user_id."', `email_from` = '".$data['email_from']."', `email_subject` = '".$data['email_subject']."', `email_body_text` = '".$data['email_body_text']."'";
				
				$result = mysql_query($sql);
				
				return mysql_insert_id();			
		}
		/*
		Function Name: deleteTemplate()
		Function Aim : delete email template
		*/
		
		function deleteTemplate($user_id, $template_id)
		{
			global $prefix;			
			$strselect = "DELETE FROM `".$prefix."templates` where `ID` = `$user_id` AND `template_id` = '$template_id'";
			$selectresult = mysql_query($strselect);
			return true;			
		}
		
		/*
		Function Name: getTemplateinfo()
		Function Aim : To get fetch template details
		*/
		function getTemplate($user_id, $template_id)
		{ 
			global $prefix;			
			$strSQL = "SELECT * FROM `".$prefix."templates` WHERE `ID` = '$user_id' AND `template_id` = '$template_id'";			
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$data=array();				
				while($row = mysql_fetch_assoc($result))
				{					
					$data = $row;					
				}				
				return $data;			
				
			}
		}
		
		/*
		Function Name: addNotification()
		Function Aim : To save user notification settings
		*/
		function addNotification($user_id, $fields)
		{
			global $prefix;
			if(!empty($fields) )
			{
				$del = "DELETE FROM `".$prefix."user_notifications_settings` WHERE `user_id` = '".$user_id."'";
				mysql_query($del);
				
				$sql = "INSERT INTO `".$prefix."user_notifications_settings` SET `user_id` = '".$user_id."'";				
				
				foreach($fields as $key=> $val)
				{					
					$sql .= ", `$key` = '".$val."'";
				}
				
				$result=mysql_query($sql);
				
				return mysql_insert_id();
			}
			else
			{
				return 0;
			}
		}
		
		
		// Get Notification Settings
		
		function getNotification($user_id)
		{
			global $prefix;			
			$data = array();								
			$sql = "SELECT * FROM `".$prefix."user_notifications_settings` WHERE `user_id` = '".$user_id."'";
			$result = mysql_query($sql);			
			while($row = mysql_fetch_assoc($result)){				
				$data = $row;
			}	
			
			return $data;		
		}
		
		
		/*
		Function Name: addNotification()
		Function Aim : To save user notification settings
		*/
		function addNotications($user_id, $subject, $message)
		{
			global $prefix;							
							
				$add_date = date('Y-m-d h:i:s');			
				
			$sql = "INSERT INTO `".$prefix."notifications` SET `user_id` = '".$user_id."', `subject` = '".$subject."', `msg` = '".$message."', notification_date = NOW()";					
				
				$result=mysql_query($sql);				
				return mysql_insert_id();		
		}		
		
		// DELETE Notifications
		
		function deleteNotification($notifi_id)
		{
			 global $prefix;				
			 $sql = "DELETE FROM `".$prefix."notifications` WHERE  `notification_id` = '".$notifi_id."'";
			 $result=mysql_query($sql);														
			 return true;		
		}
		
		
		// Get Notification Settings		
		function getAllnotifications($user_id)
		{
			global $prefix;			
			$data = array();								
			$sql = "SELECT * FROM `".$prefix."notifications` WHERE `user_id` = '".$user_id."'";
			$result = mysql_query($sql);			
			while($row = mysql_fetch_assoc($result)){				
				$data[] = $row;
			}			
			return $data;		
		}
		
		// get notification by notification ID		
		function viewNotification($notification_id){			
			global $prefix;			
			$data = array();								
			$sql = "SELECT * FROM `".$prefix."notifications` WHERE `notification_id` = '".$notification_id."'";
			$result = mysql_query($sql);			
			while($row = mysql_fetch_assoc($result)){				
				$data = $row;
			}			
			return $data;			
		}
		
	}	

	global $template;
	$template = new Templates();

}