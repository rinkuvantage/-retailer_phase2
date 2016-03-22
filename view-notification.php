<?php 	
//error_reporting(E_ALL);
require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);

 $notification_id = (int)base64_decode($_GET['noti']);
$view_info = $template->viewNotification($notification_id);
if(count($view_info) == 0)
{
	@header('Location: notifications.php');	
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-xs-12 <?php if($user_type=='admin' || $user_type=='supadmin' )echo ' col-md-8'; else ' col-md-12' ?>">
        <table class="notificationtable table table-striped">           
           <tbody>
           <tr>
              <td width="20%"><b>Subject</b></th>
              <td width="80%"><?php echo $view_info['subject']; ?></th>              
            </tr>          
           <tr>
              <td><b>Message:</b></th>
              <td><?php echo $view_info['msg']; ?></th>              
            </tr>         
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