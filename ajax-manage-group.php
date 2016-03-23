<?php include_once("./includes/head.php");
if(isset($_GET['action']) && $_GET['action'] == 'createGroup')
{
	$json = array();
	$group_name = trim($_POST['group_name']);
	
	if($group_name == "")
	{
		$json["error"] = "Please enter group name.";	
	}else if(!preg_match("/^[a-zA-Z0-9\d\-_\s]+$/i", $group_name))
	{
		$json["error"] = "Please enter valid group name.";	
	}
	
		if(empty($json))
		{
			
			$group->addGroup($uid, $group_name);
			
			$_SESSION['message'] = 'Group created successfully.';
			$json['success'] = 'Success'; 					 
					
	}
		
  
  print(json_encode($json));
  die;
}


?>