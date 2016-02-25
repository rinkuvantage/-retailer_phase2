<?php require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true); 
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View Token/Key
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="uploadfiles.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-key"></i> View Token/Key
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                 <div class="row">
				 <div class="login_form forgot_pwd col-sm-12 col-xs-12 col-md-8 tokenbox">
               <p class="tokenkey"> <label for="inputEmail" class="sr-only titlbox">Token:</label>
               <label for="inputEmail" class="sr-only displaybox"><?php echo $tokenid; ?></label></p>
                <p class="tokenkey"> <label for="inputEmail" class="sr-only titlbox">Key:</label>
				 <label for="inputEmail" class="sr-only displaybox"><?php echo $keyid; ?></label></p>
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
