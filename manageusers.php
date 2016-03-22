<?php require_once('header.php');
$totalrec = 15;
if($user_type == 'user')
{
	$_SESSION['message']='You do not have access this page.';
	echo "<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}
if(isset($_REQUEST['pagedid']) && $_REQUEST['pagedid']>1)
{
	$pageid = $_REQUEST['pagedid'];
	$limitstart = $totalrec*($pageid-1);
}
else
{
	$pageid = 1;
	$limitstart = 0;
	$limitsend = $totalrec;
}

$user_list_type = " and user_type='user'  AND `parent_id` = $uid AND `active` = 1";

if($user_type == 'supadmin')
{
	
	$user_list_type = " and user_type IN('user', 'admin')";
}

$userlist = $user->UserList("$user_list_type order by ID desc limit $limitstart, $totalrec");
$totalrecords=$user->UserList("$user_list_type order by ID desc");



$invities = $inviteuser->getallInvitee($uid);


?>
        <div id="page-wrapper" class="arrangeheight">
            <div class="container-fluid">
                <div class="row">                
                <div class="main_div">                                
                <ul class="demo">
  					<li class="right"><a>Active</a>
                <section>
                        <div class="user_div">
                      
                            <div class="middle_div">
                                <div class="left_div">
                                <p class="listCaption">The project roster allows you to administer all project members.</p>
                                
                                </div>
                                    <div class="right_div">
                                    <ul>
                                    <li><a class="manage" href="#">Manage user groups</a></li>
                                    <li class="icon-add"><button data-toggle="modal" data-target="#inviteuser"><img src="./images/index.png">invite user</button></li>
                                    </ul>
                                    </div>
                            </div>
                                <div class="last_div" id="activated_list">                                
                                <?php if(!empty($userlist)){ ?>
                                <?php foreach($userlist as $user1){ ?>
                                    <div class="account_profile">
                                        <div class="icon_div"></div>
                                        <div class="info">
                                            <ul>
                                            <li><a href="./profile-detail.php?csid=<?php echo $user1['ID']; ?>&action=view"><?php echo $user1['fname'] ." ". $user1['lname']; 
                                            if($user1['ID'] == $uid){ echo "(You)"; }?></a></li>
                                            <li><?php echo $user1['user_email']; ?></li>
                                            <li><select name="u_role">
                                                  <option value="">Change Role</option>
                                                  <option value="">Admin</option>							  
                                                  <option value="">Viewer</option>							  
                                                </select>or <a class="deactivelink deact" id="de_<?php echo $user1['ID']; ?>">Deactivate</a></li>
                                            </ul>
                                        </div>
                                    </div>	
                                    <?php } ?>                
                                 <?php } ?> 
                                </div>
                        </div>				
                </section>
				</li>
                
                <li class="right"><a>Deactivated</a>
   <section>
 <div class="user_div">
		<div class="middle_div">
			<div class="left_div">
			<p class="listCaption">The project roster allows you to administer all project members.</p>
			
			</div>
				<div class="right_div">
				<ul>
				<li><a class="manage" href="#">Manage user groups</a></li>
				<li class="icon-add"><button data-toggle="modal" data-target="#inviteuser"><img src="images/index.png">invite user</button></li>
				</ul>
				</div>
		</div>
			<div class="last_div" id="deactivated_list">			
				<div class="account_profile">
					<div class="icon_div"></div>
					<div class="info">
						<ul>
						<li><a href="#">kg sd (You)</a></li>
						<li>prakrutiag@gmail.com</li>
						<li><select>
							  <option value="category">Change Role</option>
							  <option value="category">Admin</option>
							  <option value="category">Editor</option>
							  <option value="category">Viewer</option>
							  <option value="category">Embedded Dashboard Only</option>
							</select><a class="deactivelink" href="#">or Activate</a></li>
						</ul>
					</div>
				</div>		
			</div>
	</div>
	</section>
  </li>
  
  
  
              <li class="right"><a>Invited</a>
                <section>
                    <div class="user_div ">
            
                    <div class="middle_div">
                        <div class="left_div"><p class="listCaption">The project roster allows you to administer all project members.</p></div>
                         <div class="right_div">
                            <ul>
                            <li><a class="manage" href="#">Manage user groups</a></li>
                            <li class="icon-add"><button data-toggle="modal" data-target="#inviteuser"><img src="images/index.png">invite user</button></li>
                            </ul>
                          </div>
                        </div>
                        
                        
                 <div class="last_div" id="invitee_list">	
                 
                 	<?php if(count($invities)): ?>	
                    <?php foreach($invities as $invitee){ ?>
                        <div class="account_profile">
                            <div class="icon_div"></div>
                            <div class="info">
                                <ul>                              
                                 <li><?php echo $invitee['email'];?></li>
                                 <li><a class="resendInvitation" id="resend_<?php echo $invitee['invited_id'];?>">Resend Invitation</a></li>
                                 <li><a class="cancelInvitation" id="cancel_<?php echo $invitee['invited_id'];?>">Cancel Invitation</a></li>						
                                </ul>
                            </div>
                        </div>	
						<?php } ?>
					<?php endif; ?>
			</div>    
                        
                </div>   
                </section>
          </li>                
   </ul>   
                                    
                </div>
            </div>
         </div>
    </div>    
 </div>   
<div class="modal  fade" id="inviteuser" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">   
            <h4>Invite User</h4> 
            <div class="row">
            <label class="col-lg-4">Email Address</label>
            <div class="col-lg-8"><textarea name="email_address" placeholder="Email Address" rows="3" cols="40"></textarea>
            </div>
            </div>
            
            <div class="row">
            <label class="col-lg-4">Role</label>
             <div class="col-lg-8">
             	<select name="user_role" >
                <option value="user">User</option>
                </select>
             </div>
            </div>
            
            <div class="row">
            <label class="col-lg-4">Personel Message</label>
             <div class="col-lg-8"><textarea name="personel_message"  placeholder="Personel Message" rows="3" cols="40"></textarea></div>
            </div>
            
            <div class="row">
             <div class="col-lg-12">
 					<input type="button" class="role_submit invite_user" name="invite_user" value="Invite" />
        		</div>
        </div>
	 </div>
 	</div>
 	</div>
 </div>   
<script type="text/javascript" src="js/jquery.js"></script>    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.bbq.js"></script>
<script src="js/jquery.atAccordionOrTabs.js"></script>
<script type="text/javascript">
$('.demo').accordionortabs();
</script>

<script type="text/javascript">
$(document).ready(function(e) {
    
	$(".invite_user").click(function(){		
		jQuery.ajax({
		url: './invite_user.php?action=inviteuser',
		type: 'post',
		data: jQuery('#inviteuser select[name=\'user_role\'], #inviteuser textarea'),
		dataType: 'json',
		beforeSend: function() {
			jQuery('.invite_user').attr('disabled', true);			
		},	
		complete: function() {
			jQuery('.invite_user').attr('disabled', false); 			
		},			
		success: function(json) {		
			jQuery('#inviteuser .error').remove();
									
					 if (json['error']) {				
							
						if (json['error']['email']) {												
							jQuery('#inviteuser textarea[name=\'email_address\']').after('<span class="error">' + json['error']['email'] + '</span>');
						}							
																																											
					}else if (json['success']) {
							$('#inviteuser').modal('toggle');	
							$("#page-wrapper").before(json['success']);										
					}
							
		   }	
		});
			
	});	
	
	
	$(".cancelInvitation").click(function(){	
		
		var currt_id = $(this).attr("id");
		
		var postdata = {invite_id : currt_id};
		
		jQuery.ajax({
		url: './invite_user.php?action=cancelinvitation',
		type: 'post',
		data: postdata,
		dataType: 'json',
		success: function(json) {				
									
					if (json['success']) {
							
							$("#invitee_list").html('');
							$("#invitee_list").html(json['success']);										
					}
							
		   }	
		});
			
	});	
	
	
	
	$(".deact").click(function(){	
		
		var currt_id = $(this).attr("id");
		
		var postdata = {deact_id : currt_id};
		
		jQuery.ajax({
		url: './invite_user.php?action=deactivate',
		type: 'post',
		data: postdata,
		dataType: 'json',
		success: function(json) {				
									
					if (json['success']) {
							
							$("#activated_list").html('');
							$("#activated_list").html(json['success']);										
					}
							
		   }	
		});
			
	});	
	
	
	
});
</script>
<?php require_once('footer.php'); ?>