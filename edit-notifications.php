<?php require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);
if(isset($_POST['updatepref']))
{
	if(isset($_POST['admin_notification_web'])){ $key='admin_notification_web'; $value='Yes';}
	else{$key='admin_notification_web'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['admin_notification_email'])){ $key='admin_notification_email'; $value='Yes';}
	else{$key='admin_notification_email'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['feature_notification_web'])){ $key='feature_notification_web'; $value='Yes';}
	else{$key='feature_notification_web'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['feature_notification_email'])){ $key='feature_notification_email'; $value='Yes';}
	else{$key='feature_notification_email'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['system_status_web'])){ $key='system_status_web'; $value='Yes';}
	else{$key='system_status_web'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['system_status_email'])){ $key='system_status_email'; $value='Yes';}
	else{$key='system_status_email'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['configuration_web'])){ $key='configuration_web'; $value='Yes';}
	else{$key='configuration_web'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	if(isset($_POST['configuration_email'])){ $key='configuration_email'; $value='Yes';}
	else{$key='configuration_email'; $value='No';}
	$new=$user->get_user_meta( $uid, $key);
	if(empty($new)){$user->add_user_meta( $uid, $key, $value );}
	else{$user->update_user_meta( $uid, $key, $value );}
	
	$_SESSION['message']='Your notifications subscription preferences updated successfully.';
	echo"<script type='text/javascript'>window.location='';</script>";
	exit();
}
?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <!--<div class="row">
      <div class="col-lg-12 brdcum">
        <ol class="breadcrumb">
          <li class="active"> <i class="fa fa-bell"></i> Edit Notification </li>
          
        </ol>
      </div>
    </div>-->
    <!-- /.row -->
    <div class="row notificationtable1">
	 <div class="col-md-3 pull-right">
        <ul>
	<li class="viewdropdown"><b class="vebox">Viewing:</b>
            <ul>
              <li class="dropdown"> <a href="notifications.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> All Notifications <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li> <a href="notifications.php">Notifications</a> </li>
                  <li> <a href="edit-notifications.php">Edit Preference</a> </li>
                </ul>
              </li>
            </ul>
          </li>
		  </ul>
		  </div>
		  
      <div class="notification_note col-md-9">
        <h1>Notifications Subscription Preferences</h1>
        Choose how you wish to be alerted to new notifications from Sigmaways . If you subscribe via Web you will see a purple beacon in the header when a new message arrives. If you subscribe via Email we will send a copy to your email address. Even without a subscription, all of our messages to you will display on your Notifications tab.</div>
      <div class="col-sm-12 col-xs-12 col-md-8">
	  <form name="editpref" id="editpref" action="" method="post">
        <table class="notificationtable table table-striped">
          <thead>
            <tr>
              <th>Type Of Notification</th>
              <th>Type of Subscription</th>
            </tr>
          </thead>
          <tbody>
		  	<?php $admin_notification_web=$user->get_user_meta( $uid, 'admin_notification_web', true);
			$admin_notification_email=$user->get_user_meta( $uid, 'admin_notification_email', true); ?>
            <tr class="typescription">
              <td>Admin Announcements</td>
              <td><span class="col-md-4">
                <input type="checkbox"<?php if($admin_notification_web=='Yes'){ ?> checked="checked"<?php } ?> name="admin_notification_web" class="chkbox" />
                Web</span><span class="col-md-4">
                <input type="checkbox"<?php if($admin_notification_email=='Yes'){ ?> checked="checked"<?php } ?> name="admin_notification_email" class="chkbox" />
                Email</span></td>
            </tr>
			<?php $feature_notification_web=$user->get_user_meta( $uid, 'feature_notification_web', true);
			$feature_notification_email=$user->get_user_meta( $uid, 'feature_notification_email', true); ?>
            <tr class="typescription">
              <td>Feature  Announcements</td>
              <td><span class="col-md-4">
                <input type="checkbox"<?php if($feature_notification_web=='Yes'){ ?> checked="checked"<?php } ?> name="feature_notification_web" class="chkbox" />
                Web</span><span class="col-md-4">
                <input type="checkbox"<?php if($feature_notification_email=='Yes'){ ?> checked="checked"<?php } ?> name="feature_notification_email" class="chkbox" />
                Email</span></td>
            </tr>
			<?php $system_status_web=$user->get_user_meta( $uid, 'system_status_web', true);
			$system_status_email=$user->get_user_meta( $uid, 'system_status_email', true); ?>
            <tr class="typescription">
              <td>System Status</td>
              <td><span class="col-md-4">
                <input type="checkbox"<?php if($system_status_web=='Yes'){ ?> checked="checked"<?php } ?> name="system_status_web" class="chkbox" />
                Web</span><span class="col-md-4">
                <input type="checkbox"<?php if($system_status_email=='Yes'){ ?> checked="checked"<?php } ?> name="system_status_email" class="chkbox" />
                Email</span></td>
            </tr>
			<?php $configuration_web=$user->get_user_meta( $uid, 'configuration_web', true);
			$configuration_email=$user->get_user_meta( $uid, 'configuration_email', true); ?>
            <tr class="typescription">
              <td>Configuration issues</td>
              <td><span class="col-md-4">
                <input type="checkbox"<?php if($configuration_web=='Yes'){ ?> checked="checked"<?php } ?> name="configuration_web" class="chkbox" />
                Web</span><span class="col-md-4">
                <input type="checkbox"<?php if($configuration_email=='Yes'){ ?> checked="checked"<?php } ?> name="configuration_email" class="chkbox" />
                Email</span></td>
            </tr>
          </tbody>
        </table>
        <div class="col-md-12 submitbox">
          <input class="upload_submit btn btn-lg btn-primary btn-block" type="submit" name="updatepref" value="Save Change">
          <div class="cancelbox">or <a href="javascript:;" onclick="editpref.reset();">Cancel</a></div>
        </div>
		</form>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			var h=parseInt(jQuery(window).height())-parseInt(jQuery('.navbar-fixed-top').height())-parseInt(jQuery('footer.text-center').height());
			jQuery('#page-wrapper').css({'min-height':h+'px'});
		});
	</script>
<?php require_once('footer.php'); ?>
