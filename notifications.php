<?php 	
//error_reporting(E_ALL);
require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);


if(isset($_GET['del_notification']) && trim($_GET['del_notification']) == 'del')
{
	$notif_id = (int)base64_decode(trim($_GET['noti']));
	$template->deleteNotification($notif_id);
	
	$_SESSION['message']='Notifications message deleted successfully.';
	@header('Location: notifications.php');	
}

	$notifications = $template->getAllnotifications($uid);
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-xs-12 <?php if($user_type=='admin' || $user_type=='supadmin' )echo ' col-md-8'; else ' col-md-12' ?>">
        <table class="notificationtable table table-striped">
          <thead>
            <tr class="nhding">
              <th width="65%">Subject</th>
              <th width="25%">Date</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>          
          <?php if(count($notifications)){		  
		  foreach($notifications as $notification){  ?>          
            <tr>
              <td><?php echo $notification['subject']; ?></td>
              <td><?php echo date('m/d/Y h:i:s', strtotime($notification['notification_date'])); ?></td>
              <td><a href="./view-notification.php?noti_type=view&noti=<?php echo base64_encode($notification['notification_id']); ?>">View</a>&nbsp;&nbsp;<a href="./notifications.php?del_notification=del&noti=<?php echo base64_encode($notification['notification_id']); ?>">Delete</a></td>
            </tr>
          <?php }		  
		  
		  }else{ ?>  
           <tr>
              <td colspan="4">You dont' have any notifications.</td>              
            </tr>          
          <?php } ?>
          </tbody>
        </table>
      </div>
      
     <?php if($user_type=='admin' || $user_type=='supadmin'){ ?>
      
      <div class="col-md-4">
        <ul>
          <li class="viewdropdown"><b class="vebox">Viewing:</b>
            <ul>
              <li class="dropdown"> <a href="notifications.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><img src="img/n.png"/> All Notifications <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li> <a href="notifications.php">Notifications</a> </li>                  
                  <li> <a href="edit-notifications.php">Edit Preference</a> </li>                  
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>  
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			var h=parseInt(jQuery(window).height())-parseInt(jQuery('.navbar-fixed-top').height())-parseInt(jQuery('footer.text-center').height());
			jQuery('#page-wrapper').css({'min-height':h+'px'});
		});
	</script>
<?php require_once('footer.php'); ?>