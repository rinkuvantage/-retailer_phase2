<?php require_once('header-withoutlogin.php');
if($login_active)
{
	@header('Location: uploadfiles.php');
	exit();
}
 ?>
<!-- End of head section HTML codes -->

<div class="retailerhomemain" style="margin-top:80px;">
  <!--<div class="top-titlebar">
    <div class="container">
      <h1>Home</h1>
    </div>
  </div>-->
  <div id="amazingslider-wrapper-1" style="display:block;position:relative;width:100%;margin:0px auto 48px;">
    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
      <ul class="amazingslider-slides" style="display:none;">
        <li><img src="images/analytics-shutterstock-139983946.jpg" />
          <button class="as-btn-blue-medium" OnClick=" location.href='register.php' "><img class="bkimg" src="img/book.png"/> Get Started Now</button>
        </li>
        <!--<li><img src="images/ban0.jpg" />
          <button class="as-btn-blue-medium" OnClick=" location.href='register.php' "><img class="bkimg" src="img/book.png"/>  Get Started Now</button>
        </li>-->
        <li><img src="images/UnderstandingYourAnalytics.jpg" />
          <button class="as-btn-blue-medium" OnClick=" location.href='register.php' "><img class="bkimg" src="img/book.png"/>  Get Started Now</button>
        </li>
        <li><img src="images/ban4.jpg" />
          <button class="as-btn-blue-medium" OnClick=" location.href='register.php' "><img class="bkimg" src="img/book.png"/>  Get Started Now</button>
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
    <div class="row">
      <div class="col-md-4 firstbsctn">
        <div class=" show-grid">
          <div class="entry-image">
            <div class="work-item"> <img src="img/1.png"/>
              <div class="image-extra">
                <div class="extra-content">
                  <div class="inner-extra">
                    <h2 class="extra-title">Churn Analytics</h2>
					<div class="zoomcontent">
					 
					<a class="anchorbox" href="Churn-analytics.php"><i class="fa fa-link"></i></a>
					<a class="anchorbox" data-toggle="modal" data-target="#myModa14"><i class="fa fa-plus"></i></a>
					
					</div>
                  </div>
                  <!--/ .inner-extra-->
                </div>
                <!--/ .extra-content-->
              </div>
              <!--/ .image-extra-->
            </div>
            <!--/ .work-item-->
          </div>
          <!--/ .entry-image-->
          <div class="offering"> <a href="Churn-analytics.php" class="rdmore">Read More</a> </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class=" show-grid">
          <div class="entry-image">
            <div class="work-item"> <img src="img/loyalty.png"/>
              <div class="image-extra">
                <div class="extra-content">
                  <div class="inner-extra">
                    <h2 class="extra-title">Loyalty Analytics</h2>
					<div class="zoomcontent">
					 
					<a class="anchorbox" href="Loyalty-status.php"><i class="fa fa-link"></i></a>
					<a class="anchorbox" data-toggle="modal" data-target="#myModa15"><i class="fa fa-plus"></i></a>
					
					</div>
                  </div>
                  <!--/ .inner-extra-->
                </div>
                <!--/ .extra-content-->
              </div>
              <!--/ .image-extra-->
            </div>
            <!--/ .work-item-->
          </div>
          <!--/ .entry-image-->
          <div class="offering"> <a href="Loyalty-status.php" class="rdmore">Read More</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4 mainservices">
        <div class="block1box">
          <h1>Ready to go? Call us at<br />
            855-867-4473</h1>
          <div style="text-align:center;"> <img src="img/3.png"/> </div>
          <div class="readmorebox"> <a class="socialicons" href="https://www.facebook.com/sigmaways" target="_blank"><img src="img/fbook.png"/></a> <a class="socialicons" href="https://twitter.com/sigmaways" target="_blank"><img src="img/twitter.png"/></a> <a class="socialicons" href="https://www.linkedin.com/company/sigmaways" target="_blank"><img src="img/l.png"/></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="myModa14" class="modal fade modelboxmain" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content fgtpwd">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body resetp">
  <img src="img/1.png"/>
      </div>
      
    </div>
  </div>
</div>

<div id="myModa15" class="modal fade modelboxmain" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content fgtpwd">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body resetp">
<img src="img/loyalty.png"/>
      </div>
      
    </div>
  </div>
</div>
<?php require_once('footer-withoutlogin.php'); ?>
