<?php require_once('includes/head.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $sitname; ?></title>
<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" />
<link href="css/formcss.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&#038;subset=latin,latin-ext"  type="text/css" />
<!-- Custom CSS -->
<link href="css/freelancer.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top top_box">
  <div class="top_header col-lg-12 container-fluid">
    <div class="container"> <a class="navbar-brand logobox col-lg-3 col-xs-5" href="index.php"><img src="img/RA.png"/></a>
      <div class="right_box col-lg-9 col-sm-5 pull-right">
        <?php if($login_active){ ?>
        <a class="contact dashboard" href="uploadfiles.php">
        <button class="btn btn-success btn-lg pull-right" type="submit"> <i class="fa fa-dashboard"></i> Dashboard</button>
        </a> <a class="contact" href="contactus.php">
        <button class="btn btn-success btn-lg pull-right" type="submit"> <span class="glyphicon glyphicon-comment headericonbox"></span> Contact</button>
        </a>
       <!-- <div class="phonno pull-right"><span class="glyphicon glyphicon-phone-alt headericonbox"></span> 855-867-4473</div>-->
        <?php }else{ ?>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="glyphicon glyphicon-user headericonbox"></span> Login </button>
          <div class="dropdown-menu hdr_toglebox pull-right col-lg-4" style="padding:17px;">
            <form id="toploginuser" class="form" name="toploginuser" action="" method="post"> 
				<label class="showmsg">Login</label> 
				<div class="m_loginbox">
				<input name="email" id="email" type="email" placeholder="Email address" title="Enter your email" required="" class="required email">
				</div>
				<div class="m_loginbox">
				<input name="pwd" id="pwd" type="password" placeholder="Password" title="Enter your password" required="" autocomplete="off" class="required">
				</div>
				<button type="button" id="btnLogin" class="btn">Login</button>
			</form>
              <a href="register.php" title="Fast and free sign up!" id="btnNewUser"  class="collapsed anchortext">New User? Sign-up</a>
            <button type="button" class="btn btn-info btn-lg anchortext forgotpwdlink" data-toggle="modal" data-target="#myModal">Forgot username or password?</button>
            <a class="anchortext"href="contactus.php"><small>Need help? Contact us</small></a>
            <!-- Modal -->
          </div>
        </div>
        <a class="contact pull-right" href="contactus.php">
        <button class="btn btn-success btn-lg pull-right" type="submit"><span class="glyphicon glyphicon-comment headericonbox"></span> Contact</button>
        </a>
       <?php if($currentpage!='index.php' && $currentpage!='contactus.php' && $currentpage!='login.php' && $currentpage!='register.php' && $currentpage!='Churn-analytics.php' && $currentpage!='Loyalty-status.php' && $currentpage!='termsofservices.php' && $currentpage!='privacy-policy.php'){ ?><div class="phonno pull-right"><span class="glyphicon glyphicon-phone-alt headericonbox"></span> 855-867-4473</div><?php } ?>
        <?php } ?>
		
		
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content fgtpwd">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Password Lookup</h4>
      </div>
      <div class="modal-body resetp">
        <form class="form form-horizontal" id="formForgotPassword">
          <div class="control-group col-md-12">
            <label class="forgotemail col-md-4 text-right" for="inputEmailForgot">Email</label>
            <div class="col-md-8 text-left">
              <input class="col-md-12 form-control required email" type="email" name="email" id="fgemail" placeholder="you@youremail.com" required="">
            </div>
            <span class="help-block text-center">
            <div class="col-md-4"></div>
            <div class="col-md-8 text-left"><small>Enter the email address you used to sign-up.</small></div>
            </span> </div>
        </form>
      </div>
      <div class="modal-footer centerbox"> <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a> <a href="#" id="btnForgotPassword" class="btn btn-success">Reset Password</a> </div>
    </div>
  </div>
</div>

<?php if(isset($_SESSION['message']) && trim($_SESSION['message'])!=''){ ?>
<div class="success"><?php echo $_SESSION['message']; $_SESSION['message']=''; ?></div>
<?php } ?>


