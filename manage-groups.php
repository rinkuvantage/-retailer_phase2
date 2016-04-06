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

$all_created_groups = 	$groupuser->userGroups($uid);


$heading_title = "Active";

if(isset($_GET['vaction']) && $_GET['vaction'] == "unassign")
{
	$heading_title = "Ungrouped";	
}

if(isset($_GET['vaction']) && $_GET['vaction'] == "assign_grp")
{
	$group_id = (int)$_GET['gip'];
	
	$group_name = $groupuser->getGroup($group_id);		
	$heading_title = ucfirst($group_name['name']);
	
	$users = $groupuser->getalluserGroups($group_id);
		
}
?>
        <div id="page-wrapper" class="arrangeheight">
            <div class="container-fluid">
                <div class="row">
				<div class="main_div">
				<ul class="nav nav-tabs">
					<li><a data-toggle="modal" data-target="#createGroups">+ Create Groups</a></li>
            <li <?php if($heading_title=='Active'){ ?> class="active"<?php } ?>><a href="manage-groups.php?vaction=active">All Active Users</a></li>
            <li <?php if($heading_title=='Ungrouped'){ ?> class="active"<?php } ?>><a href="manage-groups.php?vaction=unassign">Ungrouped Users</a></li>
            </ul>
                <div class="user_div">
    	<div class="manage_top">
        	<h3>All <?php echo $heading_title; ?> Users</h3>
            <ul>
            <!--<li class="usr_select"><input type="checkbox">No selected users</li>-->
           <li>
           <select name="user_role">
				<option value="">Change Role</option>
				<option value="admin">Admin</option>				
				<option value="user">User</option>				
				</select></li>
               <li>
           <select name="group_list">
				<option value="">Change group</option>
                <?php foreach($all_created_groups as $all_created_group){?>
                <option value="<?php echo $all_created_group['group_id']; ?>"><?php echo $all_created_group['name']; ?></option>
                <?php } ?>				
				</select></li>
				<li <?php if($_GET['vaction'] == "assign_grp"){ ?> class="active"<?php } ?> >
			<select id="gip" >
			<?php $groups =	$groupuser->userGroups($uid); 
			foreach($groups as $groupname){ ?>
            <option <?php if($groupname['group_id']==$group_id){ echo "selected='selected'" ;} ?> value="<?php echo $groupname['group_id']; ?>"><?php echo $groupname['name']; ?></option>
			<?php } ?>
			</select></li>
                <!--<li>Deactivate</li>-->
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
              <?php if(count($users)):
			  	foreach($users as $user){ ?>
              <tr>
                <td><input type="checkbox" name="user_id[]" value="<?php echo $user['ID']; ?>" ></td>
                <td><?php echo ucfirst($user['name']);?></td>
                <td><?php echo $user['user_email'];?></td>
                <td><?php echo ucfirst($user['user_type']);?></td>
              </tr>
              <?php } 
			  else: 
			  
			  echo '<tr><td colspan="4">Sorry! no result found.</td></tr>';
			   endif;
			  ?>              
         	 </tbody>
       </table>
            </div>
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
			<button data-dismiss="modal" class="close" type="button">x</button>  
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
		
	$("select[name='user_role']").live("change", function(){		
		
		var selected_val = $("select[name='user_role']").val();
		
		var selected_checkbox = $("input[name='user_id[]']:checked").val()
		
		var user_values = new Array();
		
		$.each($("input[name='user_id[]']:checked"), function() {
			  user_values.push($(this).val());			  
		});
		
		
		
		if(user_values.length > 0)
		{
		
					jQuery.ajax({
					url: './invite_user.php?action=updaterole',
					type: 'post',
					data: { "role" : selected_val, "user" : user_values},
					dataType: 'json',
					success: function(json) {				
												
								if (json['success']) {							
									$(".deactivated_usr tbody").html('');
									$(".deactivated_usr tbody").html(json['success']['html']);
									
									$("#page-wrapper").before(json['success']['message']);	
								}
										
					   }	
					});
		}else{
			   alert("Please select a user.");
				
		}		
			
	});
	
	$("#gip").live("change", function(){		
		
		var selected_val = $("#gip").val();
		
		//alert(selected_val);
		
		window.location = location.pathname+'?vaction=assign_grp&gip='+selected_val;
		  
		});
	$("select[name='group_list']").live("change", function(){		
		
		var selected_val = $("select[name='group_list']").val();
		
		var selected_checkbox = $("input[name='user_id[]']:checked").val()
		
		var user_values = new Array();
		
		$.each($("input[name='user_id[]']:checked"), function() {
			  user_values.push($(this).val());			  
		});
		
		
		
		if(user_values.length > 0)
		{
		
					jQuery.ajax({
					url: './invite_user.php?action=updategroup',
					type: 'post',
					data: { "group" : selected_val, "user" : user_values},
					dataType: 'json',
					success: function(json) {				
												
								if (json['success']) {								
									$("#page-wrapper").before(json['success']['message']);	
								}
										
					   }	
					});
		}else{
			   alert("Please select a user.");
				
		}		
			
	});
	
});
</script>
<?php require_once('footer.php'); ?>