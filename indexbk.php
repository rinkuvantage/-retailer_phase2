<?php require_once('header-withoutlogin.php');
if($login_active)
{
	@header('Location: dashboard.php');
	exit();
}
 ?>

    <!-- Header -->
    <header>
        <div class="container banner_box">
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
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row turndata">
			<h1>Turn data into insights.</h1>
			<p>In a fast-paced retail business, we must reach out to the customers real quick before they pick your competitors. Our retail analytics solutions helps you identify and focus on higher value customers, determine what actions typically precede a lost customer or sale, and better understand what factors influence customer spending. When you improve customer retention, you substantially improve the bottom line.</p>
</div>
        </div>
		<div class="container">
		 <div class="row">
		 <div class="retailer_box col-md-12">
		 <div class="col-md-4 left_img" data-animation="fadeInLeftBig" data-animation-delay="01">
		 <img src="img/img1.png" />
		 </div>
		  <div class="col-md-8">
		 <h1>Churn Analytics</h1>
		 <p>Stop the churn before it happens. You put your blood and sweat to earn a customer and our analytics helps you to keep them. Some of the features include determining your current churn rate, predict and target customers who will churn and prioritized marketing through time based online and offline customer data, and then use audience clustering to influence similar, high-value customers.</p>
		 <!-- <button type="submit" class="btn btn-default learnmore">Learn More</button>-->
		 </div>
		 </div>
		 <div class="retailer_box col-md-12">
		 <div class="col-md-4 left_img" data-animation="fadeInLeftBig" data-animation-delay="01">
		 <img src="img/img2.png" />
		 </div>
		  <div class="col-md-8">
		 <h1>Loyalty Analytics</h1>
		 <p>Retain the customer before they stops turning at you. Our loyalty solutions helps you to track their behavior and develop loyalty programs that maximize profitability.</p>
		 <!-- <button type="submit" class="btn btn-default learnmore">Learn More</button>-->
		 </div>
		 </div>
<!--		 <div class="retailer_box col-md-12">
		 <div class="col-md-4 left_img" data-animation="fadeInLeftBig" data-animation-delay="01">
		 <img src="img/img3.png" />
		 </div>
		  <div class="col-md-8">
		 <h1>Retailer Compliance Analytics</h1>
		 <p>Build better trading partner relationships while improving the predictability of your supply chain.</p>
		  <button type="submit" class="btn btn-default learnmore">Learn More</button>
		 </div>
		 </div>
		 <div class="retailer_box col-md-12">
		 <div class="col-md-4 left_img" data-animation="fadeInLeftBig" data-animation-delay="01">
		 <img src="img/img4.png" />
		 </div>
		  <div class="col-md-8">
		 <h1>Collaboration Analytics</h1>
		 <p>Perfect vendor compliance with EDI standards and your specific business rules.</p>
		  <button type="submit" class="btn btn-default learnmore">Learn More</button>
		 </div>
		 </div>-->
		 
		 <!--<div class="retailer_box col-md-12">
		 <div class="col-md-4 left_img" data-animation="fadeInLeftBig" data-animation-delay="01">
		<iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/wM6aOyh41Wk?feature=oembed&amp;enablejsapi=1&amp;amp;wmode=opaque" id="fitvid355842"></iframe>
		 </div>
		  <div class="col-md-8">
		 <h1>Point of Sale</h1>
		 <p>Our cloud-based solutions ensure that you have the right product in the right place at the right time, with immediate insights into the data and trends that drive your business.</p>
		  <button type="submit" class="btn btn-default learnmore">Learn More</button>
		 </div>
		 </div>-->
		 </div>
		 </div>
		
    </section>
	
<?php require_once('footer-withoutlogin.php'); ?>
