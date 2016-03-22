<?php include_once("./includes/head.php");
if(isset($_GET['action']) && $_GET['action'] == 'inviteuser')
{
	$json = array();
	
	$emails = explode(",", $_POST['email_address']);
	$roles = $_POST['user_role'];
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
				
				$rand_numb = randomstring(5) .'-'. randomstring(5) . '-' . base64_encode($uid); 
				
				$sign_up_url = 'http://tawebserver.com/retailer_phase2/register.php?ref='.$rand_numb.'';
				
				$mailbody = $message . $sign_up_url . $message_bottom;
				
				@mail($to, $subject, $mailbody, $headers);
				
				$inviteuser->addInvite($useremail, $uid, $rand_numb);
					
				
			}	
			
			$json['success'] = '<div class="success">Invitation was successfully sent.</div>'; 
					 
		}			
	}
		
  
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
	
	
	$user_list_type = " and user_type='user'  AND `parent_id` = $uid AND `active` = 1";

		if($user_type == 'supadmin')
		{
			
			$user_list_type = " and user_type IN('user', 'admin')";
		}
		
	$userlist = $user->UserList("$user_list_type order by ID desc limit 0, 20");
	$invitee_list = '';
	if($invitee)
	{
		
		foreach($userlist as $invit)
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
	
	
	
			
	$json['success'] = $invitee_list; 		
		
  
  print(json_encode($json));
  die;
}

if(isset($_GET['action']) && $_GET['action'] == 'activate')
{
	$json = array();
	
	$act_id = str_replace("act_", "", trim($_POST['act_id']));
	
	$fields = array('active' => 1);
	
	$user->updateUser($act_id, $fields);	
	
	
	$user_list_type = " and user_type='user'  AND `parent_id` = $uid AND `active` = 0";

		if($user_type == 'supadmin')
		{
			
			$user_list_type = " and user_type IN('user', 'admin')";
		}
		
	$userlist = $user->UserList("$user_list_type order by ID desc limit 0, 20");
	$invitee_list = '';
	if($invitee)
	{
		
		foreach($userlist as $invit)
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
	
	
	
			
	$json['success'] = $invitee_list; 		
		
  
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