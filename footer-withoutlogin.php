<footer class="text-center ftrbox">
<div class="col-md-12 ftrmid"><div class="col-md-6 f_leftbox">&copy; Copyright 2016 Sigmaways. All rights reserved.</div>
<div class="col-md-6 f_rightbox">
<ul>
<li><a href="http://sigmaways.com/">About</a></li>
<li><a href="termsofservices.php">Terms & Conditions</a></li>
<li><a href="privacy-policy.php">Privacy Policy</a></li>

</ul>
</div></div>

  <div class="scroll-top page-scroll visible-xs visible-sm"> <a class="btn btn-primary scrolltotop" href="javascript:;"> <i class="fa fa-chevron-up"></i> </a> </div>
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->

<div id="myModal1" class="modal fade requestdemo" role="dialog">
  <div class="modal-dialog">
    <!-- Modal requestdome content-->
    <div class="modal-content">
      <div class="modal-hero">
        <p id="request_demomessage">Get in touch with us to schedule a private demo. We're here to understand your needs, show you our solutions, and answer any questions.</p>
      </div>
	  <form id="demo-form" method="post"  novalidate="novalidate">
	  <input type="hidden" name="redirect" value="<?php echo $currentpage; ?>" />
      <div class="modal-body">
        
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <label for="first_name">First Name*</label>
                    <input type="text" name="first_name" id="first_name" size="40" class="form-control input-small required" placeholder="John">
                  </div>
                  <div class="col-xs-6">
                    <label for="first_name">Last Name*</label>
                    <input type="text" name="last_name" id="last_name" size="40" class="form-control input-small required" aria-required="true" placeholder="Doe">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email*</label>
                <input type="text" name="email" size="40" aria-required="true" placeholder="johndoe@mybusiness.com" class="form-control required email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" size="40" aria-required="true" placeholder="mybusiness.com" class="form-control url">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" size="40" class="form-control company-name" aria-required="true" autocomplete="off" placeholder="My Business">
              </div>
              <div class="form-group">
                <label for="title">Title*</label>
                <input type="text" name="title" size="40" placeholder="CMO, Sales, Business Developer..." class="form-control  required">
              </div>
              <div class="form-group">
                <label for="phone">Phone*</label>
                <input type="text" name="phoneno" id="phoneno" maxlength="13" aria-required="true" placeholder="415-800-3787" class="form-control  required">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="comments">Comments*</label>
            <textarea name="comments" data-optional="true" placeholder="Anything else you would like to mention" class="form-control  required" style="height: 100px;"></textarea>
          </div>
        
      </div>
      <div class="modal-footer"><input class="btn btn-info" type="submit" name="requestdemo" id="requestdemo" value="Request Demo" /> </div>
	  </form>
    </div>
  </div>
</div>

<!-- Portfolio Modals -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('a.reloadimg').click(function(){
		jQuery.ajax({
		  url: "capcha/captchaimage.php"
		})
		  .done(function( data ) {
			jQuery('img.captchaimg').attr('src',data);
		  });
	});
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
	
	jQuery('#support-form').validate({
		rules: {
			name: {
				onlytext: true
			}
		}
	});
	jQuery('#demo-form').validate({
		rules: {
			phoneno: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 13
			},
			first_name: {
				noSpace: true,
				onlytext: true
			},
			last_name: {
				noSpace: true,
				onlytext: true
			},
			title: {
				textnumber: true
			}
		},
		messages: {
			phoneno: {
				required: "Please enter phone number",
				number: "Please enter valid phone number",
				minlength: "Your phone number must be at least 10 number"
			}
		}
	});
	
	jQuery("#demo-form").submit(function(){	
		if(jQuery("#demo-form input, #demo-form textarea").hasClass('error'))
		{
			return false;
		}	
		jQuery.ajax({
		url: './sendemail.php?requestdemo=true',
		type: 'post',
		data: jQuery('#demo-form input[type=\'text\'], #demo-form textarea'),
		dataType: 'json',
		beforeSend: function() {
			jQuery('#requestdemo').attr('disabled', true);			
		},	
		complete: function() {
			jQuery('#requestdemo').attr('disabled', false); 			
		},			
		success: function(json) {		
			jQuery('label.error, #message').remove();
									
					 if (json['error']) {				
							
						if (json['error']['name']) {												
							jQuery('#demo-form input[name=\'first_name\']').after('<label for="name" generated="true" class="error">' + json['error']['name'] + '</label>');
						}
						
						if (json['error']['lastname']) {												
							jQuery('#demo-form input[name=\'last_name\']').after('<label for="name" generated="true" class="error">' + json['error']['lastname'] + '</label>');
						}
						
						
						if (json['error']['title']) {												
							jQuery('#demo-form input[name=\'title\']').after('<label for="name" generated="true" class="error">' + json['error']['title'] + '</label>');
						}
						
						
						if (json['error']['phoneno']) {												
							jQuery('#demo-form input[name=\'phoneno\']').after('<label for="name" generated="true" class="error">' + json['error']['phoneno'] + '</label>');
						}
						
						if (json['error']['email']) {												
							jQuery('#demo-form input[name=\'email\']').after('<label for="name" generated="true" class="error">' + json['error']['email'] + '</label>');
						}
						
						
						
						
					if (json['error']['message']) {
											
						jQuery('#demo-form textarea[name=\'comments\']').after('<label for="name" generated="true" class="error">' + json['error']['message'] + '</label>');
					}
														
																																											
					}else if (json['success']) {	
						window.location='<?php echo $currentpage; ?>';														
					}
							
		   }	
		});
		return false;
	});
	
	jQuery('a.scrolltotop').click(function(){
		jQuery('html, body').animate({
			scrollTop:0
		}, 2000);
	});
	jQuery('#btnLogin').click(function(){
		jQuery('#toploginuser').validate();
		var error=false;
		var email=jQuery('#toploginuser #email').val();
		if(jQuery.trim(email)==''){error=true;}
		var pwd=jQuery('#toploginuser #pwd').val();
		if(jQuery.trim(pwd)==''){error=true;}
		if(!error)
		{
			jQuery.ajax({
				url: 'update.php',
				type: 'post',
				data: {email:email, pwd:pwd, login:'1'},
				success: function(res) {
					if(jQuery.trim(res)=='Done'){
						jQuery('label.showmsg').next('.showingerror').remove();
						window.location='uploadfiles.php';
					}
					else
					{
						jQuery('label.showmsg').next('.showingerror').remove();
						jQuery('label.showmsg').after('<div class="showingerror">'+res+'</div>');
					}
				}	
			});
			return false;
		}
		jQuery('#toploginuser').submit();
	});
	
	
	jQuery('#toploginuser input[name=\'email\'], #pwd').on('keydown', function(e) {
		if (e.keyCode == 13) {
			jQuery('#btnLogin').trigger('click');
		}
	});
	
	jQuery('#btnForgotPassword').click(function(){
		jQuery('#formForgotPassword').validate();
		var error=false;
		var email=jQuery('#formForgotPassword #fgemail').val();
		if(jQuery.trim(email)==''){error=true;}
		if(!error)
		{
			jQuery.ajax({
				url: 'update.php',
				type: 'post',
				data: {email:email, forgotpwd:'1'},
				success: function(res) {
					jQuery('#formForgotPassword .showingerror').remove();
					jQuery('#formForgotPassword').prepend('<div class="showingerror">'+res+'</div>');
				}	
			});
			return false;
		}
		jQuery('#formForgotPassword').submit();
	});
	
	
	
});
</script>
<?php if($currentpage=='index.php' || $currentpage=='slider.php'){ ?>
 <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
<!-- Plugin JavaScript -->
<script>
$('*').each(function(){
		if($(this).attr('data-animation')) {
			var $animationName = $(this).attr('data-animation'),
				$animationDelay = "delay-"+$(this).attr('data-animation-delay');
			$(this).appear(function() {
				$(this).addClass('animated').addClass($animationName);
				$(this).addClass('animated').addClass($animationDelay);
			});
		}
	});
	
</script>
<?php } ?>
<?php if($currentpage=='login.php' || $currentpage=='register.php'){ ?>
<!-- Plugin JavaScript -->
<?php } ?>
<?php if($currentpage=='register.php'){ ?>
<link rel="stylesheet" type="text/css" href="css/all.min.css" />
<script type="text/javascript">
jQuery(document).ready(function(){
	
	jQuery.validator.addMethod("password",function(value,element)
	{
		return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/i.test(value); 
	},"Passwords must have a minimum of 8 characters with at least one digit and one letter.");
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
			email:{
				validemail:true
			},
			pwd: {
				required: true,
				minlength: 8,
				password: true,
			},
			phoneno: {
				required: true,
				number: true,
				minlength: 10
			}
		},
		messages: {
			pwd: {
				required: "Please provide a password",
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
<?php } ?>
<?php if($currentpage=='login.php' || $currentpage=='forgot-password.php'){ ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#loginuser').validate();
});
</script>
<?php } ?>
<?php if($currentpage=='contactus.php'){ ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	
	jQuery('#loginuser').validate({
		rules: {
			name:{
					onlytext: true,
				}
		}
	});
});
</script>
<?php } ?>
</body></html>