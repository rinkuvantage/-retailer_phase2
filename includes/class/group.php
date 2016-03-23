<?php
if ( !class_exists( 'Group' ) ) {
	class Group
	{		
		/*
		Function Name: Add User Group()		
		*/
		function addGroup($uid = 0, $name = "")
		{
			global $prefix;
			if(!empty($uid) && !empty($name))
			{
				
				$strSQL= "INSERT INTO `".$prefix."group` SET `group_owner_id` = '".$uid."', `name` = '".$name."', `add_date` = NOW()";
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
		
		function deleteGroup($group_id)
		{
			global $prefix;						
			
			$strSQL = "DELETE FROM `".$prefix."group` WHERE `group_id` = '".$group_id."'";
			$result = mysql_query($strSQL);
			
			$strSQL = "DELETE FROM `".$prefix."group_users` WHERE `group_id` = '".$group_id."'";
			$result = mysql_query($strSQL);
			
			if($result == 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}		
			
		
		/*
		Function Name: getallUserBy Group()
		Function Aim : To get invitee
		*/
		function getalluserGroups($group_id)
		{ 
			global $prefix;
			$strSQL = "SELECT user_id FROM ".$prefix."group_users WHERE `group_id` = '".$group_id."'";			
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
					$data = $this->userDetails($result['user_id']);
										
					$data[$count] = $data;
					
					
					
					$count++;
				}
				return $data;
			}
		}	
				
				
				
		function userDetails($user_id)
		{
				global $prefix;
			$strSQL = "SELECT `ID`, `user_email`, `user_type`, `fname`, `lname` FROM ".$prefix."users WHERE `ID` = '".$user_id."'";			
			$result = mysql_query($strSQL);	
			
			$user_info = array();	
			$count = 0;		
			while($data = mysql_fetch_assoc($result))
			{
				$user_info[$count] = $data;
				$count++;
			}
			
			return $user_info;
			
		}				
		
		/*
		Function Name: get unassigned user()
		*/
		
		function getallunassignedUser($id)
		{ 
			$all_users = $this->getadminUser($id);	
			$user = '';			
			foreach($all_users as $all_user)
			{
				$user .= $all_user['ID'] . ",";
			}
			
			$user_data = explode(",", rtrim($user, ","));
			
			
			$all_groups = $this->getalluserGroups($id);
			$all_dat_groups = "";
			foreach($all_groups as $all_group)
			{
				$all_dat_groups .= $all_group['user_id'];
			}
			
			$group_data = explode(",", rtrim($all_dat_groups, ","));
			
		 $diff =	array_diff($user_data, $group_data);
		 
		 $ids = implode(',', $diff);
		 
		 $data = $this->getadminuserByID($ids);
		 
			return $data;		 			
		}
		
		function getadminUser($id)
		{ 
			global $prefix;
			$strSQL = "SELECT ID FROM ".$prefix."users WHERE `parent_id` = '".$id."'";			
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
					$data[] = $row;
					$count++;
				}
				return $data;
			}
		}	
		
		
		function getadminuserByID($id)
		{ 
			global $prefix;
			 $strSQL = "SELECT *, CONCAT(`fname` , ' ', `lname`) AS `name` FROM ".$prefix."users WHERE `ID` IN(".$id.")";			
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
					$data[] = $row;
					
				}
				return $data;
			}
		}
		
		
		
		
		
		function userGroups($user_id)
		{
			global $prefix;
			$strSQL = "SELECT * FROM ".$prefix."group WHERE `group_owner_id` = '".$user_id."'";			
			$result = mysql_query($strSQL);	
			
			$user_info = array();	
			$count = 0;		
			while($data = mysql_fetch_assoc($result))
			{
				$user_info[$count] = $data;
				$count++;
			}
			
			return $user_info;
		}	
		
		
		
		function getactiveUser($user_id)
		{
			global $prefix;
			 $strSQL = "SELECT *, CONCAT(`fname`, ' ', `lname`) as `name` FROM ".$prefix."users WHERE `parent_id` = '".$user_id."'";			
			$result = mysql_query($strSQL);	
			
			$user_info = array();	
			$count = 0;		
			while($data = mysql_fetch_assoc($result))
			{
				$user_info[$count] = $data;
				$count++;
			}
			
			return $user_info;
		}	
		
		
		
		
		
	}
	
	global $groupuser;

	$groupuser = new Group();
}