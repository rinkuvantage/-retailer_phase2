<?php require_once('header-withoutlogin.php');
if($login_active)
{
	@header('Location: uploadfiles.php');
	exit();
}
 ?>

    <!-- Header -->
    <header>
	<div class="banner homebnr">
	<img src="img/bannernew.png"/>
	<div class="getstartdbutton"><a href="register.php"></a></div>
	</div>
        <!--<div class="container banner_box">
            <div class="row">
                
				
				<div class="col-lg-12">
				<div class="col-lg-7 col-sm-12 banner_left">
				<h1 class="text-left">Retail Analytics as Service</h1>
				<p>Do more with your sales data.</p>
				<a href="register.php"><button type="submit" class="btn btn-default learnmore text-left">Get started today</button></a>
				</div>
				<div class="col-lg-5 col-sm-12 map_img">
				<img src="img/analytic.png" alt=""/>
				</div>
                   
                    
                </div>
            </div>
        </div>-->
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row turndata">
			<h1>Turn data into insights.</h1>
			<p>In a fast-paced retail business, we must reach out to the customers real quick before they pick your competitors. Our retail analytics solutions helps you identify and focus on higher value customers, determine what actions typically precede a lost customer or sale, and better understand what factors influence customer spending. When you improve customer retention, you substantially improve the bottom line.</p>
</div>
        </div>
		<div class="container offeringblock">
		<h1>Our Offerings</h1>
		<div class="col-md-12">
		<div class="col-md-4 col-xs-12 col-sm-4 mainservices">
		<div class="col-md-12 block1box">
		<h1>Churn Analytics</h1>
		<img src="img/1.png"/>
		<div class="readmorebox">
		<a href="Churn-analytics.php">Read More</a>
		</div>
		</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-4 mainservices">
		<div class="col-md-12 block1box">
		<h1>Loyalty Status</h1>
		<img src="img/2.png"/>
		<div class="readmorebox">
		<a href="loyalty.php">Read More</a>
		</div>
		</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-4 mainservices lastservice">
		<div class="col-md-12 block1box">
		<h1>Ready to go? Call us at<br />
		855-867-4473</h1>
		<img src="img/3.png"/>
		<div class="readmorebox">
		<a href="contactus.php">Read More</a>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
    </section>
	
<?php require_once('footer-withoutlogin.php'); ?>
