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
				 
			<ul class="analytics_ul">
			<li>
			<h1>LOYALTY</h1>
			</li>
			
			<li>
			<h1>CHURN</h1>
			</li>
			
			<li>
			<h1>CUSTOMER LIFETIME VALUE</h1>
			</li>
			
			<li>
			<h1>COHORT</h1>
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
