<?php require_once('header-withoutlogin.php');
if($login_active)
{
	@header('Location: dashboard.php');
	exit();
}
 ?>
   
    <!-- End of head section HTML codes -->
    
<div class="retailerhomemain" style="margin-top:80px;">
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1340px;margin:0px auto 48px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/analytics-shutterstock-139983946.jpg" />
<a href="register.php"><button class="as-btn-blue-medium">Get Started Now</button></a>
                </li>
                <li><img src="images/ban0.jpg" />
<button class="as-btn-blue-medium"><a href="register.php">Get Started Now</a></button>
                </li>
                <li><img src="images/UnderstandingYourAnalytics.jpg" />
<button class="as-btn-blue-medium"><a href="register.php">Get Started Now</a></button>
                </li>
            </ul>
        
        </div>
    </div>
	</div>
    <!-- End of body section HTML codes -->
    
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