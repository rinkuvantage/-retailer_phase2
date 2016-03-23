<?php include_once("./includes/head.php");
if(isset($_GET['action']) && $_GET['action'] == 'inviteuser')
{
	$json = array();
	
	$emails = explode(",", $_POST['email_address']);
	$role = $_POST['user_role'];
	$message_text = trim($_POST['personel_message']);
	
	if(count($emails) > 0)
	{
		
		foreach($emails as $email)
		{
			if(trim($email) == "")
			{
				$json['error']['email'] = "Please enter valid email."; 	
			}else if(trim($email) !="")	
			{
				if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", trim($email)))
				{
					$json['error']['email'] = "Invalid Email Address.";	
				}
					
			}
		}
		
		if(empty($json))
		{
			
			$userdetail = $user->Userdetail($uid, '*');
			$name = $userdetail[1]['fname'] . " " . $userdetail[1]['lname'];
			$email = $userdetail[1]['user_email'];			
						
			$message = "Message from: " .$name ."\r\n";				
			$message .= $message_text ."\r\n" . "\r\n";
			
			$message .= $name . " (". $email. ") " . "\r\n";
			$message .= "Just invited you to join the sigmaways product tour hosted by sigmaways." . "\r\n";
			$message .= "Follow the link to register and join sigmaways product tours". "\r\n";	
			
			$message_bottom = "Best regards," . "\r\n";
			$message_bottom .= "Sigmaways";
			
			
			$subject = "Sigmaways Product Tour Invitation";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";	
			$headers .= 'From: Sigmaways <invitation@sigmaways.com>' . "\r\n";
	
	
			
			foreach($emails as $useremail)
			{
				
				$rand_numb = randomstring(5) .'-'. randomstring(5) . '-' . base64_encode($uid) . '-' .base64_encode($role); 
				
				$sign_up_url = 'http://tawebserver.com/retailer_phase2/register.php?ref='.$rand_numb.'';
				
				$mailbody = $message . $sign_up_url . $message_bottom;
				
				@mail($to, $subject, $mailbody, $headers);
				
				$inviteuser->addInvite($useremail, $uid, $rand_numb, $role);
					
				
			}	
			
			$json['success'] = '<div class="success">Invitation was successfully sent.</div>'; 
					 
		}			
	}
		
  
  print(json_encode($json));
  die;
}


if(isset($_GET['action']) && $_GET['action'] == 'resend')
{
	$json = array();
	
			
			$invite_id = (int)str_replace("resend_", "", $_POST['resent_id']);			
			
			$userdetail = $user->Userdetail($uid, '*');
			$name = $userdetail[1]['fname'] . " " . $userdetail[1]['lname'];
			$email = $userdetail[1]['user_email'];
			
			$message = "Message from: " .$name ."\r\n";				
						
			$message .= $name . " (". $email. ") " . "\r\n";
			$message .= "Just invited you to join the sigmaways product tour hosted by sigmaways." . "\r\n";
			$message .= "Follow the link to register and join sigmaways product tours". "\r\n";	
			
			$message_bottom = "Best regards," . "\r\n";
			$message_bottom .= "Sigmaways";
			
			
			$subject = "Sigmaways Product Tour Invitation";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";	
			$headers .= 'From: Sigmaways <invitation@sigmaways.com>' . "\r\n";
			
	
			$invite_data = $inviteuser->getInvitee($invite_id);
						
			$to = $invite_data[1]['email'];
			$role = $invite_data[1]['role'];
			
			$rand_numb = randomstring(5) .'-'. randomstring(5) . '-' . base64_encode($uid) . '-'.base64_encode($role); 
				
			$sign_up_url = 'http://tawebserver.com/retailer_phase2/register.php?ref='.$rand_numb.'';
			
			$mailbody = $message . $sign_up_url . $message_bottom;
			
			@mail($to, $subject, $mailbody, $headers);
				
				//$inviteuser->addInvite($useremail, $uid, $rand_numb);				
				
			
			$json['success'] = '<div class="success">Invitation was resent successfully.</div>'; 
					 
	
  
  print(json_encode($json));
  die;
}


if(isset($_GET['action']) && $_GET['action'] == 'cancelinvitation')
{
	$json = array();
	
	$invitee_id = str_replace("cancel_", "", trim($_POST['invite_id']));
	
	$inviteuser->deleteInvite($invitee_id);	
	$invitee = $inviteuser->getallInvitee($uid);
	$invitee_list = '';
	if($invitee)
	{
		
		foreach($invitee as $invit)
		{
			$invitee_list .= '<div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li>'.$invit['email'].'</li>
                                 <li><a class="resendInvitation" id="resend_'.$invit['invited_id'].'">Resend Invitation</a></li>
                                 <li><a class="cancelInvitation" id="cancel_'.$invit['invited_id'].'">Cancel Invitation</a></li>						
                                </ul>
                            </div>
                        </div>';	
			
		}	
		
	}
	
	
	
			
	$json['success'] = $invitee_list; 		
		
  
  print(json_encode($json));
  die;
}



if(isset($_GET['action']) && $_GET['action'] == 'deactivate')
{
	$json = array();
	
	$deact_id = str_replace("de_", "", trim($_POST['deact_id']));
	
	$fields = array('active' => 0);
	
	$user->updateUser($deact_id, $fields);	
	
	
	$user_list_type = " AND `parent_id` = $uid AND `active` = '1'";

		if($user_type == 'supadmin')
		{
			
			$user_list_type = " and user_type IN('user', 'admin') AND `active` = '1'";
		}
		
	$active_lists = $user->UserList("$user_list_type order by ID desc limit 0, 20");
	$invitee_list = '';
	if($active_lists)
	{
		
		foreach($active_lists as $invit)
		{
			$invitee_list .= '<div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li><a href="./profile-detail.php?csid='.$invit['ID'].'&action=view">'.$user1['fname'] ." ". $user1['lname']; 
								 
                                            if($user1['ID'] == $uid){ $invitee_list .= "(You)"; }
											
										$invitee_list .= '</a></li> 
                                            <li>'.$user1['user_email'].'</li>
                                            <li><select name="u_role">
                                                  <option value="">Change Role</option>
                                                  <option value="">Admin</option>							  
                                                  <option value="">Viewer</option>							  
                                                </select>or <a class="deactivelink deact" id="de_'.$user1['ID'].'">Deactivate</a></li>						
                                </ul>
                            </div>
                        </div>';	
			
		}
	}
	$json['success']['activated_list'] = $invitee_list;
	// Inactive users
	
	$inactive_user_list_type = " AND `parent_id` = $uid AND `active` = '0'";

		if($user_type == 'supadmin')
		{
			
			$inactive_user_list_type = " and user_type IN('user', 'admin') AND `active` = '0'";
		}
		
	$deactive_lists = $user->UserList("$inactive_user_list_type order by ID desc limit 0, 20");
		
	$deactive_list = '';
	if($deactive_lists)
	{
		
		foreach($deactive_lists as $deactive)
		{
			$deactive_list .= '<div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li><a href="./profile-detail.php?csid='.$deactive['ID'].'&action=view">'.$deactive['fname'] ." ". $deactive['lname']; 
								 
                                            if($deactive['ID'] == $uid){ $deactive_list .= "(You)"; }
											
										$deactive_list .= '</a></li> 
                                            <li>'.$deactive['user_email'].'</li>
                                            <li><select name="u_role">
                                                  <option value="">Change Role</option>
                                                  <option value="">Admin</option>							  
                                                  <option value="">Viewer</option>							  
                                                </select>or <a class="deactivelink deact" id="act_'.$deactive['ID'].'">Activate</a></li>						
                                </ul>
                            </div>
                        </div>';	
			
		}	
		
		
		
	}
		
		$json['success']['deactivated_list'] = $deactive_list;	
  
  print(json_encode($json));
  die;
}

if(isset($_GET['action']) && $_GET['action'] == 'activate')
{
	$json = array();
	
	$deact_id = str_replace("act_", "", trim($_POST['act_id']));
	
	$fields = array('active' => 1);
	
	$user->updateUser($deact_id, $fields);	
	
	
	$active_list_type = " AND `parent_id` = $uid AND `active` = 1";

		if($user_type == 'supadmin')
		{
			
			$active_list_type = " and user_type IN('user', 'admin') AND `active` = 1";
		}
		
	$active_lists = $user->UserList("$active_list_type order by ID desc limit 0, 20");
	$active_list_str = '';
	if($active_lists)
	{
		
		foreach($active_lists as $active)
		{
			$active_list_str .= '<div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li><a href="./profile-detail.php?csid='.$active['ID'].'&action=view">'.$active['fname'] ." ". $active['lname']; 
								 
                                            if($active['ID'] == $uid){ $active_list_str .= "(You)"; }
											
										$active_list_str .= '</a></li> 
                                            <li>'.$active['user_email'].'</li>
                                            <li><select name="u_role">
                                                  <option value="">Change Role</option>
                                                  <option value="">Admin</option>							  
                                                  <option value="">Viewer</option>							  
                                                </select>or <a class="deactivelink deact" id="de_'.$active['ID'].'">Deactivate</a></li>						
                                </ul>
                            </div>
                        </div>';	
			
		}	
		
		$json['success']['activated_list'] = $active_list_str;
		
	}
	
	// Inactive users
	
	$inactive_user_list_type = " AND `parent_id` = $uid AND `active` = '0'";

		if($user_type == 'supadmin')
		{
			
			$inactive_user_list_type = " and user_type IN('user', 'admin') AND `active` = '0'";
		}
		
	$deactive_lists = $user->UserList("$inactive_user_list_type order by ID desc limit 0, 20");
	$deactive_list = '';
	if($deactive_lists)
	{
		
		foreach($deactive_lists as $deactive)
		{
			$deactive_list .= '<div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li><a href="./profile-detail.php?csid='.$deactive['ID'].'&action=view">'.$deactive['fname'] ." ". $deactive['lname']; 
								 
                                            if($deactive['ID'] == $uid){ $deactive_list .= "(You)"; }
											
										$deactive_list .= '</a></li> 
                                            <li>'.$deactive['user_email'].'</li>
                                            <li><select name="u_role">
                                                  <option value="">Change Role</option>
                                                  <option value="">Admin</option>							  
                                                  <option value="">Viewer</option>							  
                                                </select>or <a class="deactivelink deact" id="act_'.$deactive['ID'].'">Activate</a></li>						
                                </ul>
                            </div>
                        </div>';	
			
		}	
		
		$json['success']['deactivated_list'] = $deactive_list;
		
	}
		
			
  
  print(json_encode($json));
  die;
}

if(isset($_GET['action']) && $_GET['action'] == 'changerole')
{
	$json = array();
	
	
	
	$data = explode("-", $_POST['changerole']);
	$change_id = $data[0];
	$user_id = $data[1];
	$role = $data[2];
	
	$fields = array('user_type' => $role);	
	$user->updateUser($user_id, $fields);
	
	$json['success']['id'] = $change_id;
	
	 $option = '<option value="">Change Role</option>';
	 
	 if($role == 'admin'):
			$option .=	'<option value="'.$change_id.'-user-'.$user_id.'">User</option>';
			$option .=	'<option value="'.$change_id.'-admin-'.$user_id.'" selected="selected">Admin</option>';
			
	 else:
	 		$option .=	'<option value="'.$change_id.'-user-'.$user_id.'" selected="selected">User</option>';
			$option .=	'<option value="'.$change_id.'-admin-'.$user_id.'">Admin</option>';
			
	endif;							 
									 
	$json['success']['optionval'] = $option;								 
									 
	$json['success']['message'] = '<div class="success">User Role Updated.</div>';
	
	//$_SESSION['User_type'] = $role;
	
	$json['redirect'] = true;
	
	if($role == 'admin')
	{
		$json['redirect'] = false;	
	}
		
  
  print(json_encode($json));
  die;
}











function randomstring($len)
{
	$string = "";
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	for($i=0;$i<$len;$i++)
	$string.=substr($chars,rand(0,strlen($chars)),1);
	return $string;
}
?>