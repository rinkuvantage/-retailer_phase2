<?php require_once('header.php');
$totalrec=15;
if($user_type=='user')
{
	$_SESSION['message']='You do not have access this page.';
	echo"<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}
if(isset($_REQUEST['pagedid']) && $_REQUEST['pagedid']>1)
{
	$pageid=$_REQUEST['pagedid'];
	$limitstart=$totalrec*($pageid-1);
}
else
{
	$pageid=1;
	$limitstart=0;
	$limitsend=$totalrec;
}

$user_list_type = " and user_type='user'  AND `parent_id` = $uid";

if($user_type=='supadmin')
{
	
	$user_list_type = " and user_type IN('user', 'admin')";
}

$userlist=$user->UserList("$user_list_type order by ID desc limit $limitstart, $totalrec");
$totalrecords=$user->UserList("$user_list_type order by ID desc");
?>
        <div id="page-wrapper" class="arrangeheight">

            <div class="container-fluid">

                <!-- Page Heading -->
                <!--<div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-wrench"></i> Manage Users
                            </li>
                        </ol>
                    </div>
                </div>-->
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                <div class="shiftright"><ul class="pager adc"><li><a href="createuser.php">Create New User</a></li></ul></div>
                </div>
                </div>
				<div class="row">&nbsp;</div>
                <div class="row">
				<div class="col-lg-12">                      
                        <div class="table-responsive">
							<?php if(!empty($userlist)){ ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Generate Key</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach($userlist as $user1){ 
									$cuser = "User";
									if($user1['user_type'] == "admin")
									{
										$cuser = "Company";	
									}
									
									?>
                                    <tr>
                                        <td><?php echo $user1['fname']; ?> <?php echo $user1['lname']; ?></td>
                                        <td><?php echo $user1['keyid']; ?></td>
                                        <td><?php echo $cuser; ?></td>
										<td><?php if($user1['active']==1){echo 'Active';}else{echo 'Pending';} ?></td>
                                     <td><nav>
                            <ul class="pager adc">
                              <li><a href="viewfiles.php?user_id=<?php echo $user1['ID']; ?>">View Files</a></li>
                              <li><a href="edit-user.php?user_id=<?php echo $user1['ID']; ?>">Edit</a></li>
                              <li><a href="deleteuser.php?user_id=<?php echo $user1['ID']; ?>&key=<?php echo $user1['keyid']; ?>">Delete</a></li>
                            </ul>
                          </nav></td>
                                   
                                    </tr>
									<?php } ?>
                                    
                                </tbody>
                            </table>
							<?php 
							if(count($totalrecords)>count($userlist))
							{
								$url='manageusers.php?pagedid=';
								echo $user->pagination($totalrec,$pageid,$url,count($totalrecords));
							}
							}else{ ?>
							<p>There is no user</p>
							<?php } ?>
                        </div>
                    </div>
                    
                </div>


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

<?php require_once('footer.php'); ?>