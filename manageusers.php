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

$user_list_type = " AND `parent_id` = $uid AND `active` = 1";

if($user_type == 'supadmin')
{
	
	$user_list_type = " and user_type IN('user', 'admin') AND `active` = 1";
}

$active_user_lists = $user->UserList("$user_list_type order by ID desc limit $limitstart, $totalrec");
$totalrecords=$user->UserList("$user_list_type order by ID desc");



$invities = $inviteuser->getallInvitee($uid);


$deactive_user_list_type = " AND `parent_id` = $uid AND `active` = 0";

if($user_type == 'supadmin')
{
	
	$deactive_user_list_type = " and user_type IN('user', 'admin') AND `active` = 0";
}

$deactive_user_lists = $user->UserList("$deactive_user_list_type order by ID desc limit $limitstart, $totalrec");

?>
        <div id="page-wrapper" class="arrangeheight">
            <div class="container-fluid">
                <div class="row">                
                <div class="main_div">  
                
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#active_user">Active</a></li>
                  <li><a data-toggle="tab" href="#deactive_user">Deactivated</a></li>
                  <li><a data-toggle="tab" href="#invited_user">Invited</a></li>
                </ul>
        <form action="" method="post">           
        <div class="tab-content">   
                                              
         <div id="active_user" class="tab-pane fade in active">
  					
                        <div class="user_div">
                      
                            <div class="middle_div">
                                <div class="left_div">
                                <p class="listCaption">The project roster allows you to administer all project members.</p>
                                
                                </div>
                                    <div class="right_div">
                                    <ul>
                                    <li><a class="manage" href="./manage-groups.php">Manage user groups</a></li>
                                    <li class="icon-add"><button data-toggle="modal" data-target="#inviteuser"><img src="./images/index.png">invite user</button></li>
                                    </ul>
                                    </div>
                            </div>
                                <div class="last_div" id="activated_list">                                
                                <?php if(!empty($active_user_lists)){ ?>
                                <?php foreach($active_user_lists as $user1){ ?>
                                    <div class="account_profile">
                                        <div class="icon_div"></div>
                                        <div class="info">
                                            <ul>
                                            <li><a href="./profile-detail.php?csid=<?php echo $user1['ID']; ?>&action=view"><?php echo $user1['fname'] ." ". $user1['lname']; 
                                            if($user1['ID'] == $uid){ echo "(You)"; }?></a></li>
                                            <li><?php echo $user1['user_email']; ?></li>
                                            <li><select name="u_role" class="urole" id="u<?php echo $user1['ID']; ?>">
                                                  <option value="">Change Role</option>                                                  						  
                                                  <option value="u<?php echo $user1['ID']; ?>-user-<?php echo $user1['ID']; ?>"<?php if($user1['user_type'] =='user'){ echo 'selected'; } ?>>User</option>
                                                  <option value="u<?php echo $user1['ID']; ?>-admin-<?php echo $user1['ID']; ?>"<?php if($user1['user_type'] =='admin'){ echo 'selected'; } ?>>Admin</option>								  
                                                </select>or <a class="deactivelink deact" id="de_<?php echo $user1['ID']; ?>">Deactivate</a></li>
                                            </ul>
                                        </div>
                                    </div>	
                                    <?php } ?>                
                                 <?php }else{ ?> 
                                 <p class="listCaption">Sorry, no result found</p>
                                 <?php } ?>
                                </div>
                        </div>				
              
			</div>	
                
    <div id="deactive_user" class="tab-pane fade in">           
 <div class="user_div">
		<div class="middle_div">
			<div class="left_div">
			<p class="listCaption">The project roster allows you to administer all project members.</p>
			
			</div>
				<div class="right_div">
				<ul>
				<li><a class="manage" href="./manage-groups.php">Manage user groups</a></li>
				<li class="icon-add"><button data-toggle="modal" data-target="#inviteuser"><img src="images/index.png">invite user</button></li>
				</ul>
				</div>
		</div>
			<div class="last_div" id="deactivated_list">	
            
            <?php if($deactive_user_lists): ?>
            <?php foreach($deactive_user_lists as $deactive_user_list){ ?>		
				<div class="account_profile">
					<div class="icon_div"></div>
					<div class="info">
						<ul>
						<li><a href="#"><?php echo $deactive_user_list['fname'] ." ". $deactive_user_list['lname'];if($deactive_user_list['ID'] == $uid){ echo "(You)"; } ?></a></li>
						<li><?php echo $deactive_user_list['user_email']; ?></li>
						<li><select name="user_role" class="urole" id="u<?php echo $$deactive_user_list['ID']; ?>">
							  <option value="">Change Role</option>  
							  <option value="u<?php echo $deactive_user_list['ID']; ?>-user-<?php echo $deactive_user_list['ID']; ?>"<?php if($deactive_user_list['user_type'] =='user'){ echo 'selected'; } ?>>User</option>
							   <option value="u<?php echo $deactive_user_list['ID']; ?>-admin<?php echo $deactive_user_list['ID']; ?>"<?php if($deactive_user_list['user_type'] =='admin'){ echo 'selected'; } ?>>Admin</option>
							</select><a class="deactivelink acti" id="act_<?php echo $deactive_user_list['ID']; ?>">or Activate</a></li>
						</ul>
					</div>
				</div>	
              <?php } ?>  
              <?php else: ?> 
                                 <p class="listCaption">Sorry, no result found</p>
             <?php endif; ?>
			</div>
	</div>	  
  </div>
  				 <div id="invited_user" class="tab-pane fade in">                 
                    <div class="user_div ">            
                    <div class="middle_div">
                        <div class="left_div"><p class="listCaption">The project roster allows you to administer all project members.</p></div>
                         <div class="right_div">
                            <ul>
                            <li><a class="manage" href="./manage-groups.php">Manage user groups</a></li>
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
           </div>     
         </div>      
        </form>                    
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
                <option value="admin">Admin</option>
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
	
	
	$(".resendInvitation").click(function(){	
		
		var currt_id = $(this).attr("id");
		
		var postdata = {resent_id : currt_id};
		
		jQuery.ajax({
		url: './invite_user.php?action=resend',
		type: 'post',
		data: postdata,
		dataType: 'json',
		success: function(json) {				
									
					if (json['success']) {								
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
							$("#deactivated_list").html('');							
							$("#activated_list").html(json['success']['activated_list']);
							$("#deactivated_list").html(json['success']['deactivated_list']);										
					}
							
		   }	
		});
			
	});
	
	$(".acti").click(function(){	
		
		var currt_id = $(this).attr("id");
		
		var postdata = {act_id : currt_id};
		
		jQuery.ajax({
		url: './invite_user.php?action=activate',
		type: 'post',
		data: postdata,
		dataType: 'json',
		success: function(json) {				
									
					if (json['success']) {
							
							$("#activated_list").html('');
							$("#deactivated_list").html('');							
							$("#activated_list").html(json['success']['activated_list']);
							$("#deactivated_list").html(json['success']['deactivated_list']);										
					}
							
		   }	
		});
			
	});	
	
	
	$(".urole").on("change", function(){
		
		var selected_val = $(".urole").val();
		
		if(selected_val !=="")
		{
		
				jQuery.ajax({
				url: './invite_user.php?action=changerole',
				type: 'post',
				data: { "changerole" : selected_val},
				dataType: 'json',
				success: function(json) {				
											
							if (json['success']) {							
									$('#' + json['success']['id']).html('');
									$('#' + json['success']['id']).html(json['success']['optionval']);	
									$("#page-wrapper").before(json['success']['message']);	
									
																
									$(".success").delay(5000).fadeOut('slow');
									
								/*	
								if(json['success']['redirect'])
								{
									window.location = "./uploadfiles.php";
								}	*/								
							}
									
				   }	
				});
		   }
		
			
	});
});
</script>
<?php require_once('footer.php'); ?>