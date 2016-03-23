<?php require_once('header.php');

if($user_type == 'user')
{
	$_SESSION['message']='You do not have access this page.';
	echo "<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}
if(isset($_GET['vaction']) && trim($_GET['vaction']) == "unassign")
{	
	$users = $groupuser->getallunassignedUser($uid);		 
}else{
		$users = $groupuser->getactiveUser($uid);
}

?>
        <div id="page-wrapper" class="arrangeheight">
            <div class="container-fluid">
                <div class="row">                
                <div class="user_div">
    	<div class="manage_top">
        	<h3>All active users 6</h3>
            <ul>
            <!--<li class="usr_select"><input type="checkbox">No selected users</li>-->
           <li>
           <select>
				<option value="">Change Role</option>
				<option value="admin">Admin</option>				
				<option value="user">User</option>				
				</select></li>
               <li>
           <select>
				<option value="">Change group</option>
				
				</select></li>
                <li>Deactivate</li>
            </ul>
        </div>
        	<div class="table-responsive deactivated_usr">
             <table cellspacing="0" cellpadding="0">
              <thead>
              <tr>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($users as $user){ ?>
              <tr>
                <td><input type="checkbox" name="user_id[]" ></td>
                <td><?php echo ucfirst($user['name']);?></td>
                <td><?php echo $user['user_email'];?></td>
                <td><?php echo ucfirst($user['user_type']);?></td>
              </tr>
              <?php } ?>              
         	 </tbody>
       </table>
            </div>
	</div>
            </div>
         </div>
    </div>    
 </div>   
 
<div class="modal  fade" id="createGroups" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">   
            <h4>Create Group</h4> 
            <div class="row">
            <label class="col-lg-4">Group Name</label>
            <div class="col-lg-8"><input type="text" name="group_name" class="form-control" placeholder="Enter Group Name">
            </div>
            </div>
                        
            <div class="row">
             <div class="col-lg-12">
 					<input type="button" class="role_submit create_group" name="create_group" value="Create" />
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
    
	$(".create_group").click(function(){		
		jQuery.ajax({
		url: './ajax-manage-group.php?action=createGroup',
		type: 'post',
		data: jQuery('input[name=\'group_name\']'),
		dataType: 'json',
		beforeSend: function() {
			jQuery('.create_group').attr('disabled', true);			
		},	
		complete: function() {
			jQuery('.create_group').attr('disabled', false); 			
		},			
		success: function(json) {		
			jQuery('#createGroups .error').remove();
									
					 if (json['error']) {				
							
						if (json['error']) {												
							jQuery('#createGroups input[name=\'group_name\']').after('<span class="error">' + json['error'] + '</span>');
						}							
																																											
					}else if (json['success']) {
							$('#createGroups').modal('toggle');	
							location.reload();									
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
			
	});
});
</script>
<?php require_once('footer.php'); ?>