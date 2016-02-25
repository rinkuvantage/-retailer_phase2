<?php require_once('header.php');
$userdetail=$user->Userdetail($uid, '*');

$errors=array();
$company=$userdetail[1]['company'];
$fname=$userdetail[1]['fname'];
$phoneno=$userdetail[1]['phoneno'];
$lname=$userdetail[1]['lname'];
$email=$userdetail[1]['user_email'];
$email2=$email;
if(isset($_POST['fname']))
{
	$post['company']=$_POST['company'];
	if(trim($post['company'])=='')
	{
		array_push($errors,'Please enter company name.');
	}
	$post['fname']=$_POST['fname'];
	if(trim($post['fname'])=='')
	{
		array_push($errors,'Please enter first name.');
	}
	$post['phoneno']=$_POST['phoneno'];
	if(trim($post['phoneno'])=='')
	{
		array_push($errors,'Please enter phone number.');
	}
	$post['lname']=$_POST['lname'];
	if(trim($post['lname'])=='')
	{
		array_push($errors,'Please enter last name.');
	}
	$post['user_email']=$_POST['email'];
	if(trim($post['user_email'])=='')
	{
		array_push($errors,'Please enter email address.');
	}
	if($email2!=$post['user_email'])
	{
		$check=$user->Userfield('user_email', $post['user_email']);
		if(!empty($check))
		{
			array_push($errors,'Email address already exist, please try another.');
		}
	}
	
	$post['udate']=date('Y-m-d H:i:s');
	if(isset($_POST['pwd']) && trim($_POST['pwd'])!='')
	{
		$post['user_pass']=sha1($_POST['pwd'].$userdetail[1]['cdate']);
	}
	if(empty($errors))
	{
		$res=$user->updateUser($uid ,$post);
		if($res>0)
		{
			$_SESSION['message']='Your profile updated successfully.';
			echo"<script type='text/javascript'>window.location='profile.php';</script>";
			exit();
		}
	}
	else
	{
		foreach($_POST as $key=>$value)
		{
			${$key}=$value;
		}
	}
}
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <!--<div class="row">
                    <div class="col-lg-12">
                     
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-fw fa-user"></i> Profile
                            </li>
                        </ol>
                    </div>
                </div>-->
                <!-- /.row -->

                <!-- Flot Charts -->
				
				<div class="innerpage mainregisterbox">
				 <div class="row">
					<div class="login_form col-sm-12 col-xs-12 col-md-10 col-lg-10 admprofileedit">
					  <div class="form-header">Sigmaways Retail Analytics Profile</div>
							<form class="form-signin registerbox" name="newuser" id="newuser" method="post" action="">
					  <div class="rg_top_section">
							  <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
							  <div class="reg_box">
								<label for="inputEmail" class="sr-only">First Name*</label>
								<div class="inputiconbox">
								<span class="glyphicon glyphicon-user"></span>
							  <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" class="form-control required" required="required"  />
							  </div>
							  </div>
							  <div class="reg_box lstbox">
								<label for="inputEmail" class="sr-only">Last Name*</label>
								<div class="inputiconbox">
								<span class="glyphicon glyphicon-user"></span>
							  <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" class="form-control required" placeholder="" required="required"  />
							  </div>
							  </div>
							  
							  <div class="reg_box fullreg">
							  <label for="inputEmail" class="sr-only">Company Name*</label>
							  <div class="inputiconbox">
							  <span class="glyphicon glyphicon-briefcase"></span>
							  <input type="text" id="company" name="company" value="<?php echo $company; ?>" class="form-control required" placeholder="" required="required" />
							  </div>
							  </div>
							  
							  <div class="reg_box fullreg">
										   <label for="inputEmail" class="sr-only">Phone No*</label>
										   <div class="inputiconbox">
									<i class="fa fa-phone pno"></i>
										  <input type="text" id="phoneno" name="phoneno" value="<?php echo $phoneno; ?>" class="form-control required" placeholder="" required="required"></div>
										  </div>
									<div class="reg_box fullreg">
							  <label for="inputEmail" class="sr-only">Email address*</label>
							  <div class="inputiconbox">
							  <span class="glyphicon glyphicon-envelope"></span>
							  <input type="email" id="email" name="email" value="<?php echo $email; ?>" class="form-control required email" placeholder="" required="required"  />
							  </div>
							  </div>
							  <div class="reg_box fullreg">
							  <label for="inputPassword" class="sr-only">Password</label>
							  <div class="inputiconbox">
							  <span class="glyphicon glyphicon-lock"></span>
							  <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" autocomplete="off" />
							  </div>
							  </div>
						 </div>
							
							  <div class="form-box-footer form-header">
								<input class="btn btn-block" type="submit" name="signupSubmit" value="Update" /> 
						   
							  </div>
							</form>
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

	<script type="text/javascript" src="js/validate.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#pwd').val('');
		jQuery.validator.addMethod("password",function(value,element)
		{
			return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/i.test(value); 
		},"Passwords must have a minimum of 8 characters with at least one digit and one letter.");
		jQuery.validator.addMethod("noSpace", function(value, element) { 
		  return value.indexOf(" ") < 0 && value != ""; 
		}, "No space please and don't leave it empty");
		
		jQuery.validator.addMethod("onlytext",function(value,element)
		{
			return this.optional(element) || /^[a-zA-Z ]+$/i.test(value); 
		},"Please enter only letter.");
		jQuery.validator.addMethod("validemail",function(value,element)
		{
			return this.optional(element) || /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i.test(value); 
		},"Please enter valid email.");
		jQuery.validator.addMethod("textnumber",function(value,element)
		{
			return this.optional(element) || /^[a-zA-Z][a-zA-Z0-9 ]+$/i.test(value); 
		},"Please enter only letter and number.");
		jQuery.validator.addMethod("textnumberdash",function(value,element)
		{
			return this.optional(element) || /^[a-zA-Z0-9,. ]+$/i.test(value); 
		},"Special characters are not allowed");
		
		jQuery.validator.addMethod("noSpace", function(value, element) { 
		  return value.indexOf(" ") < 0 && value != ""; 
		}, "No space please and don't leave it empty");
		jQuery('#newuser').validate({
			rules: {
				fname: {
					noSpace: true,
					onlytext:true
				},
				lname: {
					noSpace: true,
					onlytext:true
				},
				pwd: {
					minlength: 8,
					password: true,
				},
				email:{
					validemail:true
				},
				phoneno: {
					required: true,
					number: true,
					minlength: 10,
					maxlength: 13
				}
			},
			messages: {
				pwd: {
					minlength: "Your password must be at least 8 characters long",
				},
				phoneno: {
					required: "Please enter phone number",
					number: "Please enter valid phone number",
					minlength: "Your phone number must be at least 10 number"
				}
			}
		});
	});
	</script>

<?php require_once('footer.php'); ?>
