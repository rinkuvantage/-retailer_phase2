<?php require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);
?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-xs-12 col-md-8">
        <table class="notificationtable table table-striped">
          <thead>
            <tr class="nhding">
              <th>Subject</th>
              <th>When</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
            <tr>
              <td>Indicates a dangerous or potentially</td>
              <td>13/06/2014 15.53 UTC</td>
            </tr>
          </tbody>
        </table>
      </div>
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
