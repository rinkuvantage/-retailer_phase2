<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('header-withoutlogin.php');
$errors=array();

$name='';
$email='';
$website='';
$subject='';
$message='';
function isValidEmail($email)
{
	return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email);
}


if(isset($_POST['sendmsg']))
{
	$name=$_POST['name'];
	if(trim($name)=='')
	{
		array_push($errors,'Please enter your name.');
	}elseif(!preg_match('/^[a-zA-Z ]*$/', trim($name)))
	{
		array_push($errors,'Please enter valid  name.');	
	}
	$email=$_POST['email'];
	if(trim($email)=='')
	{
		array_push($errors,'Please enter your email.');
	}else if(!isValidEmail($email))
	{
		array_push($errors, 'Invalid email address');
		
	}
	$message=$_POST['message'];
	if(trim($message)=='')
	{
		array_push($errors,'Please enter message.');
	}
	if($_SESSION['captcha']['code']!=$_POST['captchacode'])
	{
		array_push($errors,'Captcha did not match.');
	}
	if(empty($errors))
	{	
		$to  = 	$owner_email;
		$subject = $sitname.' : Contact Us';	
		$from = $email;
		$fromname=$sitname;
				
		$message="Dear Admin,<br /><br />
		The following user has contacted you. The user detail is given below<br /><br />
		Name: ".$name."<br />
		Email: ".$email."<br />
		Message: ".$message."<br /><br />";
		$message.=$email_signature;
		Sendemail( $to, $subject, $message,$from,$from,$fromname);		
		$_SESSION['message']='Thanks for sending message.';	
		@header('Location: contactus.php');
		
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
<!-- Header -->
<!-- Portfolio Grid Section -->

<div class="container common_cntr innerpage">
<div class="top-titlebar">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>

  <div class="row contactusblock innermidbox">
  
   
    <div class="col-sm-5 col-xs-10 col-md-6 cntleftblock contactshadow cntboxsectmain">
	 <h1>Contact Us</h1>
      <div class="gf_browser_gecko gform_wrapper cntmidbox" id="gform_wrapper_1"><a id="gf_1" class="gform_anchor"></a>
        <form method="post" name="loginuser" id="loginuser" action="">
          <div class="gform_body">
		  <?php if(!empty($errors)){foreach($errors as $error){echo '<span class="error">'.$error.'</span><br />';}} ?>
          
            <ul id="gform_fields_1" class="gform_fields left_label form_sublabel_below description_below">
            	
              <li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                
                <div class="ginput_container ginput_container_text">
				<div class="inputiconbox">
			<span class="glyphicon glyphicon-user"></span>
                  <input name="name" id="name" type="text" placeholder="Name" value="<?php echo $name; ?>" class="medium required" tabindex="1">
				  </div>
                </div>
              </li>
              <li id="field_1_2" class="gfield gfield_contains_required field_sublabel_below field_description_below">
               
                <div class="ginput_container ginput_container_email">
				 <div class="inputiconbox">
							  <span class="glyphicon glyphicon-envelope"></span>
                  <input name="email" id="email" type="email" placeholder="Email" value="<?php echo $email; ?>" class="medium required email" tabindex="2">
                </div>
				</div>
              </li>
              <li id="field_1_6" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                
                <div class="ginput_container ginput_container_textarea">
					<div class="inputiconbox">
		<i class="fa fa-pencil"></i>
                  <textarea name="message" id="input_1_6" placeholder="Message" class="textarea medium required" tabindex="5" rows="10" cols="50"><?php echo $message; ?></textarea>
                </div>
				</div>
              </li>
			  <li class="gfield gfield_contains_required field_sublabel_below field_description_below">
			  <img src="<?php require_once('capcha/captchaimage.php'); ?>" class="captchaimg" alt="Catcha" /><a href="javascript:;" class="reloadimg"><img src="img/reload_icon.gif" alt="reload" /></a>
			  </li>
			      <li id="field_1_2" class="gfield gfield_contains_required field_sublabel_below field_description_below">
               
                <div class="ginput_container ginput_container_email">
                  <input name="captchacode" id="captchacode" type="text" value="" class="medium required" tabindex="6">
                </div>
              </li>
            </ul>
          </div>
          <div class="gform_footer left_label">
            <input type="submit" class="gform_button button" value="Send" name="sendmsg" tabindex="7">
          </div>
        </form>
      </div>
    </div>
 <!--   <div class="hidden-xm col-md-1">&nbsp;</div>-->
    <div class="col-sm-6 col-xs-10 col-md-5 conrightblock contactshadow">
	 <h1>Additional Info</h1>
	 
	
	 <div class="cntmidbox">
	 <div class="adrsblock">
	 <P>Office Address: 39737 Paseo Padre
Parkway Fremont, CA 94538<P/>

<p><b>Phone No:</b> 855-867-4473</P>
    </div>
	<div class="mapbox">
	   
	   
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.3003363386138!2d-121.9731088850734!3d37.54798723294867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc07f1320855f%3A0x9c39604edc3ea1ec!2sSigmaways!5e0!3m2!1sen!2sin!4v1454137087949" max-width="500" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	   </div>
     
	  </div>
    </div>
  </div>
</div>
<!-- Footer -->
<?php require_once('footer-withoutlogin.php'); ?>