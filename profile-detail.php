<?php require_once('header.php');
$totalrec = 15;
if($user_type == 'user')
{
	$_SESSION['message']='You do not have access this page.';
	echo "<script type='text/javascript'>window.location='uploadfiles.php';</script>";
	exit();
}

$user_id = (int)$_GET['csid'];

$userdetail = $user->Userdetail($user_id, '*');
$name = $userdetail[1]['fname'] . " " . $userdetail[1]['lname'];
$email = $userdetail[1]['user_email'];
$phoneno = $userdetail[1]['phoneno'];
$company = $userdetail[1]['company'];
$email = $userdetail[1]['user_email'];
$user_type = $userdetail[1]['user_type'];
$type = "User";
if($user_type == "company")
{
	$type = "Admin";	
}

$mob = $userdetail[1]['mobileno'];
$mobile = false;
if($mob != "")
{
	$mobile = $mob;
}
?>
        <div id="page-wrapper" class="arrangeheight">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                <div class="shiftright"><ul class="pager adc"><li><a href="edit-user.php?user_id=<?php echo $user_id; ?>">Edit</a></li></ul></div>
                </div>
                </div>
				<div class="row">&nbsp;</div>
                <div class="row">
				<div class="col-lg-12">                      
   <div class="main_div">
	<div class="user_div">
	<div class="user_profile_left">
		<div class="icon_div profileicon_div">
		</div>
		<div class="detail">
		<ul>
		<li><?php echo $name; ?></li>
		<li><?php echo $type; ?></li>
		</ul>
		</div>
		<div class="usr_detail_div">
		<ul>
            <li><label>E-mail</label><a href="mailto: <?php echo $email; ?>"><p><?php echo $email; ?></p></a></li>
            <li><label>Phone</label><p><?php echo $phoneno; ?></p></li>
            <?php if($mobile){ ?>
            <li><label>Mobile</label><p><?php echo $mobile; ?></p></li>
            <?php } ?>
            <li><label>Company</label><p><?php echo $company; ?></p></li>		
		</ul>
		</div>
	</div>
	</div>
</div>
                    </div>                    
                </div>
            </div>
         </div>
    </div>    
<script type="text/javascript" src="js/jquery.js"></script>    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<?php require_once('footer.php'); ?>