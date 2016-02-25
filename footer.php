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
        <p>Get in touch with us to schedule a private demo. We're here to understand your needs, show you our solutions, and answer any questions.</p>
      </div>
	  <form id="demo-form" method="post" action="">
	  <input type="hidden" name="redirect" value="<?php echo $currentpage; ?>" />
      <div class="modal-body">
        
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <label for="first_name">First Name*</label>
                    <input type="text" name="first_name" id="first_name" value="" size="40" class="form-control input-small required" placeholder="John">
                  </div>
                  <div class="col-xs-6">
                    <label for="first_name">Last Name*</label>
                    <input type="text" name="last_name" id="last_name" value="" size="40" class="form-control input-small required" aria-required="true" placeholder="Doe">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email*</label>
                <input type="text" name="email" value="" size="40" aria-required="true" placeholder="johndoe@mybusiness.com" class="form-control required email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" value="" size="40" aria-required="true" placeholder="mybusiness.com" class="form-control url">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" value="" size="40" class="form-control company-name" aria-required="true" autocomplete="off" placeholder="My Business">
              </div>
              <div class="form-group">
                <label for="title">Title*</label>
                <input type="text" name="title" value="" size="40" placeholder="CMO, Sales, Business Developer..." class="form-control  required">
              </div>
              <div class="form-group">
                <label for="phone">Phone*</label>
                <input type="text" name="phoneno" id="phoneno" value="" size="40" aria-required="true" placeholder="415-800-3787" class="form-control  required">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="comments">Comments*</label>
            <textarea name="comments" data-optional="true" value="" placeholder="Anything else you would like to mention" class="form-control  required" style="height: 100px;"></textarea>
          </div>
        
      </div>
      <div class="modal-footer"><input class="btn btn-info" type="submit" name="requestdemo" value="Request Demo" /> </div>
	  </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('a.scrolltotop').click(function(){
		jQuery('html, body').animate({
			scrollTop:0
		}, 2000);
	});
	jQuery.validator.addMethod("onlytext",function(value,element)
	{
		return this.optional(element) || /^[a-zA-Z ]+$/i.test(value); 
	},"Please enter only letter.");
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
			},
			comments: {
				textnumberdash: true
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
	
	
	
});
</script>
<?php if($currentpage=='dashboard.php'){ ?>
<script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
<?php } ?>
</body>
</html>