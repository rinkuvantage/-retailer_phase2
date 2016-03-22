<?php
if ( !class_exists( 'Inviteuser' ) ) {
	class Inviteuser
	{		
		/*
		Function Name: Add Invited User()		
		*/
		function addInvite($email = '',$userid = 0, $invited_key = '')
		{
			global $prefix;
			if(!empty($email) && !empty($userid))
			{
				
				$strSQL= "INSERT INTO `".$prefix."invited_users` SET `email` = '".$email."', `invited_by` = '".$userid."', `invited_rand_log` = '".$invited_key."', `invited_date` = NOW()";
				$result = mysql_query($strSQL);
				
				return mysql_insert_id();
			}
			else
			{
				return 0;
			}
		}
		
		/*
		Function Name: delete invited user()		
		*/
		
		function deleteInvite($invited_id = 0)
		{
			global $prefix;						
			
			$strSQL = "DELETE FROM `".$prefix."invited_users` where `invited_id` = '".$invited_id."'";
			$result=mysql_query($strSQL);
			if($result==1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}		
		
		/*
		Function Name: getallInvitee()
		Function Aim : To get invitee
		*/
		function getallInvitee($invited_by)
		{ 
			global $prefix;
			$strSQL = "SELECT * FROM ".$prefix."invited_users WHERE `invited_by` = '".$invited_by."' ORDER BY `invited_date` DESC";			
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_assoc($result))
				{					
					$data[$count]=$row;
					$count++;
				}
				return $data;
			}
		}		
		
		
	}
	global $inviteuser;

	$inviteuser = new Inviteuser();

}