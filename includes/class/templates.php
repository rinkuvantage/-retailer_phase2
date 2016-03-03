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
		
		
	}	

	global $template;

	$template = new Templates();

}