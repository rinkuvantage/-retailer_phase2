<?php require_once('header-withoutlogin.php'); ?>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="fonts/stylesheet.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/tabcontent.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>


<script type="text/javascript">
jQuery(document).ready(function(e) {
	//jQuery('.pricing_content3').hide();
	//jQuery('.inclusion_right_box').hide();
	//jQuery('#view2 div.pricing_content3:first').show();
	//jQuery('#view2 div.inclusion_right_box:first').show();
   jQuery('.inclus').click( function(){
		jQuery('.inclusions_ul a').removeClass('in_active');
		jQuery(this).addClass('in_active');
		jQuery('.pricing_content3').hide();
		var cl=jQuery(this).attr('coords');
		jQuery('.'+cl).show();
	});
	
	 /* jQuery('.sidebarpackinclude').click( function(){
		jQuery('.inclusions_sidebar a').removeClass('active_sidebar');
		jQuery(this).addClass('active_sidebar');
		jQuery('.inclusion_right_box').hide();
		var cl=jQuery(this).attr('coords');
		jQuery('.'+cl).show();
	});*/
});
</script>

<div class="container innerpage cont_page common_cntr">
  <div class="banner"><img src="img/loyaltyimg.png"/></div>
  <div class="pricing_box row contactusblock">
    <ul class="tabs" data-persist="true">
      <li class="selected"><a href="#view1">Overview</a></li>
      <li><a href="#view2">Marketing Mix Modeling</a></li>
      <li><a href="#view3">Digital & Social Media ROI</a></li>
      <li><a href="#view4">Cross-Media Attribution</a></li>
      <li><a href="#view5">Promotional Effectiveness</a></li>
      <li><a href="#view6">Pricing Strategy</a></li>
	  <li><a href="#view7">Marketing Optimization</a></li>
	  <li><a href="#view8">Customer Segmentation</a></li>
	  <li><a href="#view9">Customer Loyalty Analysis</a></li>
	  <li><a href="#view10">Brand Equity</a></li>
	  
    </ul>
    <div class="tabcontents">
      <div id="view1">
        <h1>Our approach</h1>
        <div class="pricing_content entry cntboxinner">
          <p> Everyone has data, and some commentators even view "big data" as a problem. At Analytic Partners, we view data not as a problem, but as an opportunity. </p>
          <p>Different businesses and different industries have different business intelligence and data challenges. A cookie-cutter, one-size-fits-all approach will only provide a superficial view of the opportunities underlying your data. Our customized, high-touch approach includes a disciplined discovery and consultative process where we identify your unique business needs and opportunity areas. Our goal is not to be another vendor providing yet another report, but our goal is to be a consultative partner that helps you drive business performance and improve your ROI on marketing investments.</p>
          <p>We offer comprehensive analytic services and marketing consulting focused on strategic and tactical marketing issues.</p>
        </div>
        <div class="clr"></div>
      </div>
      <div id="view2">
        <div class="inclusions_top_menu">
          <ul class="inclusions_ul">
            <li><a class="in_active inclus" coords="packinclude" href="#">Overview</a></li>
            <li><a class="inclus" coords="packnotinclude" href="#">Perspective</a></li>
          </ul>
        </div>
        <div class="pricing_content packinclude pricing_content3">
          <div class="package_doesnot_include">
            <div class="page-content"><h3 class="no-border">Custom Analytics to Improve your Sales Performance &amp; Maximize Marketing ROI</h3><p>Through <strong>marketing mix modeling</strong>, we use advanced statistical techniques coupled with a deep understanding of your industry and market to measure the performance of your marketing mix. The Analytic Partners approach is customized to address your specific market, your unique brand, and your business challenges. We provide actionable insights to increase sales, market share, and marketing ROI.&nbsp;</p><p>We identify the strengths and weaknesses of your marketing programs and address your key issues with your media mix: traditional media, digital media, social media, price, promotions and other factors. We examine external influences such as competitive actions, seasonality and economic conditions to understand how these other factors impact your sales performance. The results of our marketing mix modeling are used to improve performance by improving the effectiveness of marketing and reallocating spending for increased marketing ROI.</p><div class="graph-holder">
	<div class="holder" id="marketingBoard"><svg height="740" version="1.1" width="510" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px; top: -0.671875px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><linearGradient id="55690-_9c465c-_b9526d" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#9c465c" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#b9526d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="55790-_950027-_ac3654" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#950027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#ac3654" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="55890-_75011f-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#75011f" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="55990-_6c021d-_780120" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#6c021d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#780120" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="56090-_4c0618-_6c021d" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#4c0618" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#6c021d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="56190-_950027-_ac3654" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#950027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#ac3654" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="56290-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="56390-_082236-_0f2f48" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#082236" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#0f2f48" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient></defs><text x="255" y="50" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 25px; line-height: normal; font-family: Arial;" font-size="25px"><tspan dy="-7.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Leveraging Marketing Mix</tspan><tspan dy="30" x="255" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Simulations for Business Planning</tspan></text><text x="255" y="95" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Adjust the sliders to simulate spending changes</tspan></text><rect x="100" y="150" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="190" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="230" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="270" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="310" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="150" y="150" width="10" height="160" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="225" y="150" width="10" height="160" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="300" y="150" width="10" height="160" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="375" y="150" width="10" height="160" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="450" y="150" width="10" height="160" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><text x="15" y="230" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px" transform="matrix(0,-1,1,0,-215,245)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Spending Change</tspan></text><text x="55" y="150" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">+20%</tspan></text><text x="55" y="190" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">+10%</tspan></text><text x="55" y="230" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="55" y="270" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">-10%</tspan></text><text x="55" y="310" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">-20%</tspan></text><text x="55" y="310" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">-20%</tspan></text><text x="155" y="340" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan></text><text x="230" y="340" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Banner</tspan></text><text x="305" y="340" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Promotion</tspan></text><text x="380" y="340" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">DTC</tspan></text><text x="455" y="340" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan></text><rect x="0" y="370" width="510" height="1" r="0" rx="0" ry="0" fill="#c8c8c8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><text x="255" y="410" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 25px; line-height: normal; font-family: Arial;" font-size="25px"><tspan dy="7.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Simulation Results</tspan></text><text x="255" y="440" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Business impact from above simulation scenario</tspan></text><rect x="100" y="480" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="520" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="560" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="600" width="410" height="1" r="0" rx="0" ry="0" fill="#444444" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="640" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="100" y="680" width="410" height="1" r="0" rx="0" ry="0" fill="#dbd9d9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><text x="15" y="600" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px" transform="matrix(0,-1,1,0,-584.9922,615.0078)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Simulation Results</tspan></text><text x="55" y="560" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">+</tspan></text><text x="55" y="600" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="55" y="640" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">–</tspan></text><text x="175" y="720" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Change in Spend</tspan></text><text x="305" y="720" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Change in Sales</tspan></text><text x="435" y="720" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Change in ROI</tspan></text><rect x="136" y="222" width="38" height="18" r="0" rx="0" ry="0" fill="url(#55690-_9c465c-_b9526d)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1; cursor: pointer;"></rect><rect x="211" y="222" width="38" height="18" r="0" rx="0" ry="0" fill="url(#55790-_950027-_ac3654)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1; cursor: pointer;"></rect><rect x="286" y="222" width="38" height="18" r="0" rx="0" ry="0" fill="url(#55890-_75011f-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1; cursor: pointer;"></rect><rect x="361" y="222" width="38" height="18" r="0" rx="0" ry="0" fill="url(#55990-_6c021d-_780120)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1; cursor: pointer;"></rect><rect x="436" y="222" width="38" height="18" r="0" rx="0" ry="0" fill="url(#56090-_4c0618-_6c021d)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1; cursor: pointer;"></rect><rect x="135" y="600" width="80" height="0" r="0" rx="0" ry="0" fill="url(#56190-_950027-_ac3654)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="265" y="600" width="80" height="0" r="0" rx="0" ry="0" fill="url(#56290-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="395" y="600" width="80" height="0" r="0" rx="0" ry="0" fill="url(#56390-_082236-_0f2f48)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><text x="175" y="700" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial;" font-size="18px"><tspan dy="700" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan></text><text x="305" y="700" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial;" font-size="18px"><tspan dy="700" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan></text><text x="435" y="700" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial;" font-size="18px"><tspan dy="700" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan></text></svg></div>
	<div class="" id="optimizeBtn">Optimize</div>
</div><h3>Innovation and understanding the evolving digital ecosphere are key</h3><p>Whether you call it new media, or social media, or digital, or screen convergence, we all agree that it is constantly evolving. With constantly changing media and data, our clients require a partner that has expertise in the Digital space. The Analytic Partners customized, consultancy-based approach means that our consultants have their fingers on the pulse of the changing media landscape. At Analytic Partners, we are immersed in Digital data, and we are uniquely positioned to evaluate and leverage new and evolving data sources.</p><h3>Our ongoing committment</h3><p>As part of the Marketing Mix Modeling analysis process, Analytic Partners works with you to recommend changes to your marketing plans and to meet your business goals of improved revenue, sales and profit. Plus, as a commitment to our partnership and your long-term success, we will forecast, monitor, and periodically assess the impact of newly executed marketing plans to assess progress and continually improve top-line revenue and ROI. &nbsp;In addition, our GPS platform will provide you with your key model insights, a business monitoring dashboard and tools for&nbsp;<a href="#" title="Dashboard &amp; Planner – GPS">planning and optimization</a>.</p><div class="page-bottom-aside">
	          
		
        <div class="box-half">
          <h3>Perspective</h3>
          <p>Read about our perspective on marketing mix modeling.</p>
          <a class="button button-red tabjax" href="#">Find out more</a>
        </div>


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Marketing Mix Modeling questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div></div>
          </div>
        </div>
        <div class="pricing_content pricing_content1 packnotinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content">
                <h3 class="no-border">The true value of a model is enhanced when savvy modelers and consultants get hands-on (and minds-on) with your business challenges</h3>
                <p><strong>The Analytic Partners approach is customized</strong></p>
                <p>In the consumer goods (CPG and FMCG) space, some have argued that marketing mix models have been commoditized, and wondered, “why not get your marketing intelligence from the cheapest/quickest/most factory farm-like vendor out there?” Our position, at Analytic Partners, is that while many data formats and data feeds have been standardized, the true value of a model is enhanced when savvy modelers and consultants get hands-on (and minds-on) with your business challenges in mind. Yes, anyone can run a statistical model (of varying quality), but the true value of a model is in the interpretation of the model results and an understanding of the real-world implications and actionability of model findings.</p>
                <p>At Analytic Partners, the analysts and consultants who review your data sources, who vet your data, who participate in data prep and quality control are the ones who model your marketing mix. Our analysts and consultants work with your teams to understand your unique challenges and opportunities. Then, we provide advice and guidance based on the real-life challenges, constraints, and opportunities that your business faces. We offer our clients consulting partners who are industry experts, and, in short order, our industry experts become immersed in the particular challenges and opportunities of our clients’ businesses. You’re not going to get that level of engagement from a vendor that outsources modeling work to the cheapest labor markets they can find.</p>
                <p><strong>Customization means we can face any industry challenge</strong></p>
                <p>Because our approach is customized, Analytic Partners is uniquely positioned to assist clients and brands outside of the traditional CPG/FMCG space. We are constantly approached by executives who tell us that they want to leverage econometric analytics for their business, but that they are concerned because they don’t sell packaged goods in supermarkets. We are happy to report that at Analytic Partners we have a great deal of experience in industries outside of packaged goods. We have extensive experience in custom analytics for industries such as pharma, automotive, gaming, hospitality, retail, and financial services to name a few. Precisely because we do not have a cookie cutter approach, and we do not treat analytics like a commodity to be completed by the lowest cost labor on the planet, Analytic Partners is positioned to complete high complexity work to a high standard while serving as a true consulting partner to our clients.</p>
                <p><strong>Quality is paramount; Independence is key</strong></p>
                <p>At Analytic Partners, we live and die by the quality of our work, our deliverables, and our relationship with our clients. We succeed when our clients succeed. We are focused purely on marketing analytics. Analytic Partners is independent of media agencies, copy testing vendors, and data providers, and as such, we can provide completely unbiased analytics that are perfectly aligned with our clients’ business interests.</p>
                <div class="page-bottom-aside">
                  <div class="box-half">
                    <h3>Learn more</h3>
                    <p>For more answers to your Marketing Mix Modeling questions, please contact us.</p>
                    <a class="button button-red" href="contactus.php">Contact us</a> </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div id="view3">
        <div class="inclusions_top_menu">
          <ul class="inclusions_ul">
            <li><a class="in_active inclus" coords="packinclude" href="#">Overview</a></li>
            <li><a class="inclus" coords="packnotinclude" href="#">In detail</a></li>
          </ul>
        </div>
        <div class="pricing_content packinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content">
                <h3 class="no-border">In an increasingly digital world, using attribution methods to understand and improve your digital and social media marketing efforts has never been more critical</h3>
                <p>The reach and influence of Digital and Social Media are rapidly increasing. Therefore, organizations are increasing focus, budgets, and internal resources on the digital space. Given the strong interactions between digital, social media, and other elements of the marketing mix (e.g. offline media, pricing, and promotions), Analytic Partners recommends a holistic approach that isolates the individual and synergistic effects&nbsp;of each channel and activity.</p>
                <p>&nbsp;</p>
                <div>
                  <p><strong>Digital attribution: Capturing the true impact of Digital and Social Media</strong></p>
                  <p>Within our Digital and Marketing Mix analyses, each digital and social media tactic is individually measured within the context of the full range of marketing activities. This helps capture the “true” ROI of each tactic, and assists in understanding both the direct and indirect effects, as well as synergies, across activities.&nbsp;</p>
                </div>
                <div class="graph-holder">
                  <h4>Digital and social media example insights</h4>
                  <p class="graph-hint">Hover over blue bars for more details</p>
                  <div class="holder in-view" id="digitalSocial">
                    <svg height="345" version="1.1" width="510" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px; top: -0.015625px;">
                      <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
                      <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <linearGradient id="690-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="890-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1090-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1190-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1290-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1390-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1490-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1590-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1690-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1790-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1890-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                        <linearGradient id="1990-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                          <stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                          <stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop>
                        </linearGradient>
                      </defs>
                      <rect x="0" y="270" width="510" height="1" r="0" rx="0" ry="0" fill="#444444" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="45" y="290" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Banner</tspan>
                      </text>
                      <text x="150" y="290" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Paid Search</tspan>
                      </text>
                      <text x="255" y="290" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Online Video</tspan>
                      </text>
                      <text x="360" y="290" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Social</tspan>
                      </text>
                      <text x="465" y="290" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="15" y="320" width="18" height="18" r="0" rx="0" ry="0" fill="url(#690-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <text x="45" y="330" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Current ROI</tspan>
                      </text>
                      <rect x="145" y="320" width="18" height="18" r="0" rx="0" ry="0" fill="url(#890-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <text x="175" y="330" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Optimized ROI</tspan>
                      </text>
                      <rect x="15" y="140" width="30" height="130" r="0" rx="0" ry="0" fill="url(#1090-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <rect x="120" y="196" width="30" height="74" r="0" rx="0" ry="0" fill="url(#1190-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <rect x="225" y="175" width="30" height="95" r="0" rx="0" ry="0" fill="url(#1290-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <rect x="330" y="140" width="30" height="130" r="0" rx="0" ry="0" fill="url(#1390-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <rect x="435" y="178" width="30" height="92" r="0" rx="0" ry="0" fill="url(#1490-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      <a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <rect x="45" y="84" width="30" height="186" r="0" rx="0" ry="0" fill="url(#1590-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      </a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <rect x="150" y="135" width="30" height="135" r="0" rx="0" ry="0" fill="url(#1690-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      </a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <rect x="255" y="150" width="30" height="120" r="0" rx="0" ry="0" fill="url(#1790-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      </a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <rect x="360" y="30" width="30" height="240" r="0" rx="0" ry="0" fill="url(#1890-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      </a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <rect x="465" y="115" width="30" height="155" r="0" rx="0" ry="0" fill="url(#1990-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect>
                      </a></svg>
                  </div>
                </div>
                <h3>Our Digital attribution approach – beyond 'last click'</h3>
                <p>Analytic Partners <strong>Digital Attribution Modeling</strong> goes beyond ‘last click’ and measurement in silos to provide a full view of ROI and online/offline interactions. Our approach is customized given client data and business objectives with a focus on gaining a clear understanding of what is driving conversions and the role each touchpoint has in the decision process. It allows for optimal cross-media spend allocation (e.g. Search vs. Display vs. TV vs. Mobile, etc.) and in-depth recommendations within Digital (e.g. Search by keyword, Banner by site, size, etc.)</p>
                <p>&nbsp;</p>
                <p><strong>We answer your key Digital and Social Media questions:</strong></p>
                <ul>
                  <li>What are the most efficient Digital and Social Media activities?</li>
                  <li>Which online tactics are most scalable?&nbsp;</li>
                  <li>Are there opportunities to reallocate spend across our digital activities to improve ROI?</li>
                  <li>What is the role of <a href="#" title="Cross-Media Attribution">paid, owned and earned media</a> in the overall mix?</li>
                  <li>How can we improve timing of online and offline tactics?</li>
                  <li>What are the most efficient formats, websites and sizes?</li>
                  <li>How does each tactic influence consumers at upper vs. lower funnel?</li>
                  <li>Is <a href="#" title="Promotional Effectiveness">offline media</a> improving our online efforts?</li>
                  <li>What are the marginal returns on our investments?</li>
                  <li>How does response compare across <a href="#" title="Customer Segmentation">customer segments</a>?</li>
                </ul>
                <div class="page-bottom-aside">
                  <div class="box-half">
                    <h3>In detail</h3>
                    <p>Read a detailed discussion about our approach to Digital Attribution.</p>
                    <a class="button button-red tabjax" href="#">Find out more</a> </div>
                  <div class="box-half">
                    <h3>Learn more</h3>
                    <p>For more answers to your Digital &amp; Social Media questions, please contact us.</p>
                    <a class="button button-red" href="contactus.php">Contact us</a> </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <div class="pricing_content pricing_content1 packnotinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content">
                <h3 class="no-border">Strategic and tactical insights - a deep-dive into digital effectiveness</h3>
                <p>With an in-depth analysis of Paid, Owned and Earned Media, our tailored analysis reveals insights into the consumer path to purchase across both online and offline channels.</p>
                <p>Within our marketing mix models, we identify ‘how’ your campaigns are working in terms of the interactions that consumers have across the different touch-points. For example, we analyze Paid media such as TV, Earned media such as Facebook, and Owned media such as your website to reveal where and how your sales are generated.&nbsp; In addition, advanced analytics allow us to understand and quantify the direct and indirect impacts of each touchpoint; ensuring credit is given to the real driver of sales.</p>
                <p>Our Digital Attribution models provide the greatest level of insight into digital and social media effectiveness. Digital Attribution models are custom-built and apply an algorithmic approach to get an accurate understanding of the ‘true’ impact of each consumer touch-point.&nbsp; By leveraging detailed user, cookie-level data and advanced modeling techniques we are able to link consumer purchase decisions back to the 'indirect' stimulus to capture the ‘true’ influencer of conversion.&nbsp; This approach has proven a valuable way to eliminate last-click attribution bias.&nbsp; Given each client is unique in how they leverage digital media, our digital attribution analyses are customized based on data availability and client specific business questions encompassing Search, Display Ads, Social Media, Emails, Online Video, Mobile with deep dives into each for very tactical insights on how to improve conversions and return on investment.</p>
                <p>In addition, Analytic Partners provides custom dashboards and web-based software for ongoing tracking of attribution results and what-if simulations. Our platforms provide a foundation for scenario planning via customized management dashboards as well as the ability to provide for ongoing performance updates.&nbsp; Our simulation tools allow for the development of online tests to quickly evaluate new activities, campaigns or changes in execution.&nbsp; Furthermore, our tools can be used to simulate a number of potential marketing budgets and plans to project future performance.</p>
                <div class="page-bottom-aside">
                  <div class="box-half">
                    <h3>Learn more</h3>
                    <p>For more answers to your Digital &amp; Social Media questions, please contact us.</p>
                    <a class="button button-red" href="/contact-us/">Contact us</a> </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div id="view4">
        <div class="inclusions_top_menu">
          <ul class="inclusions_ul">
            <li><a class="in_active inclus" coords="packinclude" href="#">Overview</a></li>
            <li><a class="inclus" coords="packnotinclude" href="#">In Detail</a></li>
          </ul>
        </div>
        <div class="pricing_content packinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content">
                <h3 class="no-border">Media fragmentation is increasing, the digital space is constantly evolving, and multi-screen interactions are changing consumer behavior</h3>
                <p>Marketers face the challenge of deciphering&nbsp;the role of each channel in the consumer purchase decision. Managing marketing in silos is no longer effective.&nbsp;Consumers are exposed to multiple online and offline channels and interact with <strong>Paid, Owned and Earned Media</strong>, often across multiple devices (computers, tablets, mobile).&nbsp;In order to optimize marketing spending, the individual impact or ROI of each channel needs to be understood in relation to the role it played in the consumer buying decision and the complete path to conversion.</p>
                <p>Our <strong>Cross-Media Attribution</strong> Analysis provides a full view of ROI, including online and offline interactions. It allows for optimal cross-channel spend allocation (e.g. Search vs. Display vs. TV vs. Mobile vs. Promotions, etc.), and in-depth recommendations within each channel (e.g. Search by keyword, Banner by site, creative, size, etc.)</p>
                <div class="graph-holder">
                  <h4>Cross-Media Attribution</h4>
                  <div class="cross-callout">
                    <h3 class="cross-head" id="crossOneHead" style="display: none;">Overall Sales Contributions</h3>
                    <h3 class="cross-head" id="crossTwoHead" style="display: block;">Digital Sales Contributions</h3>
                    <h3 class="cross-head" id="crossThreeHead" style="display: none;">Detailed Digital Attribution</h3>
                    <p id="crossOne" style="display: none;">% of Total Sales Driven by Tactic</p>
                    <p id="crossTwo" style="display: block;">% of Digital Sales Driven by Tactic</p>
                    <p id="crossThree" style="display: none;">% of Digital Sales Driven by Tactic &amp; Execution</p>
                  </div>
                  <div class="holder in-view" id="crossMedia">
                    <svg height="530" version="1.1" width="510" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px; top: -0.015625px;">
                      <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
                      <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                      <path fill="#8dbce5" stroke="#8dbce5" d="M255,220L395,220A140,140,0,1,0,165.00973464388449,327.2462220366569Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#3882c4" stroke="#3882c4" d="M255,220L165.00973464388449,327.2462220366569A140,140,0,0,0,184.99999999999994,341.2435565298214Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#2b69a8" stroke="#2b69a8" d="M255,220L184.99999999999994,341.2435565298214A140,140,0,0,0,218.7653336856471,355.2296156804696Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#2a5575" stroke="#2a5575" d="M255,220L218.7653336856471,355.2296156804696A140,140,0,0,0,235.5157658655908,358.63752962381983Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#163a55" stroke="#163a55" d="M255,220L235.5157658655908,358.63752962381983A140,140,0,0,0,272.06170807672066,358.9564612297851Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#0c2a41" stroke="#0c2a41" d="M255,220L272.06170807672066,358.9564612297851A140,140,0,0,0,362.2462220366569,309.9902653561155Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:title="Cross-Digital">
                      <path fill="#900022" stroke="#900022" d="M255,220L395,220A140,140,0,1,0,394.9999978676781,220.0244346094039Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="0.9997143673236218" transform="matrix(1,0,0,1,0,0)"></path>
                      </a>
                      <path fill="#900126" stroke="#900126" d="M255,220L395,220A140,140,0,1,0,132.55324100048458,287.87334683448717Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" stroke-width="1"></path>
                      <path fill="#cc385e" stroke="#cc385e" d="M255,220L132.55324100048458,287.87334683448717A140,140,0,0,0,137.58612048764064,296.2494649021038Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" stroke-width="1"></path>
                      <path fill="#f5a4b9" stroke="#f5a4b9" d="M255,220L137.58612048764064,296.2494649021038A140,140,0,0,0,187.12665316551283,342.4467589995154Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" stroke-width="1"></path>
                      <path fill="#2b69a8" stroke="#2b69a8" d="M255,220L187.12665316551283,342.4467589995154A140,140,0,0,0,272.06170807672066,358.9564612297851Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" stroke-width="1"></path>
                      <a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:title="A deeper understanding across digital tactics">
                      <path fill="#91bfe6" stroke="#91bfe6" d="M255,220L272.06170807672066,358.9564612297851A140,140,0,0,0,395,220.00000000000003Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" stroke-width="1"></path>
                      </a>
                      <path fill="#5a0119" stroke="#5a0119" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#6e001d" stroke="#6e001d" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#7c0020" stroke="#7c0020" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#900126" stroke="#900126" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#cc385e" stroke="#cc385e" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#ef88a2" stroke="#ef88a2" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#f5a4b9" stroke="#f5a4b9" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#0a3867" stroke="#0a3867" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#12467b" stroke="#12467b" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#18508a" stroke="#18508a" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#2b69a8" stroke="#2b69a8" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#91bfe6" stroke="#91bfe6" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#a8ceee" stroke="#a8ceee" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <path fill="#bfdaf0" stroke="#bfdaf0" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      <a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:title="A deeper understanding within digital tactics">
                      <path fill="#d1e4f4" stroke="#d1e4f4" d="M255,220L255,220A0,0,0,0,0,255,220Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;" stroke-width="1"></path>
                      </a>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900022" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Digital</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#3882c4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Direct Mail</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan>
                      </text>
                      <rect x="130" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#8dbce5" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Everyday Sales</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PR</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Radio</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email Blasts</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#5a0119" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search A</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#6e001d" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search B</tspan>
                      </text>
                      <rect x="260" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#7c0020" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search C</tspan>
                      </text>
                      <rect x="390" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search D</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#ef88a2" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email A</tspan>
                      </text>
                      <rect x="130" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email B</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0a3867" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display A</tspan>
                      </text>
                      <rect x="130" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#12467b" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display B</tspan>
                      </text>
                      <rect x="260" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#18508a" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display C</tspan>
                      </text>
                      <rect x="390" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display D</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband A</tspan>
                      </text>
                      <rect x="130" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#a8ceee" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband B</tspan>
                      </text>
                      <rect x="260" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#bfdaf0" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband C</tspan>
                      </text>
                      <rect x="390" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#d1e4f4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband D</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900022" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Digital</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#3882c4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Direct Mail</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan>
                      </text>
                      <rect x="130" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#8dbce5" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Everyday Sales</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PR</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Radio</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email Blasts</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#5a0119" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search A</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#6e001d" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search B</tspan>
                      </text>
                      <rect x="260" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#7c0020" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search C</tspan>
                      </text>
                      <rect x="390" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search D</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#ef88a2" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email A</tspan>
                      </text>
                      <rect x="130" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email B</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0a3867" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display A</tspan>
                      </text>
                      <rect x="130" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#12467b" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display B</tspan>
                      </text>
                      <rect x="260" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#18508a" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display C</tspan>
                      </text>
                      <rect x="390" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display D</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband A</tspan>
                      </text>
                      <rect x="130" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#a8ceee" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband B</tspan>
                      </text>
                      <rect x="260" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#bfdaf0" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband C</tspan>
                      </text>
                      <rect x="390" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#d1e4f4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband D</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900022" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Digital</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#3882c4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Direct Mail</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan>
                      </text>
                      <rect x="130" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#8dbce5" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Everyday Sales</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PR</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Radio</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email Blasts</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#5a0119" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search A</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#6e001d" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search B</tspan>
                      </text>
                      <rect x="260" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#7c0020" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search C</tspan>
                      </text>
                      <rect x="390" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search D</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#ef88a2" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email A</tspan>
                      </text>
                      <rect x="130" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email B</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0a3867" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display A</tspan>
                      </text>
                      <rect x="130" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#12467b" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display B</tspan>
                      </text>
                      <rect x="260" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#18508a" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display C</tspan>
                      </text>
                      <rect x="390" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display D</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband A</tspan>
                      </text>
                      <rect x="130" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#a8ceee" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband B</tspan>
                      </text>
                      <rect x="260" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#bfdaf0" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband C</tspan>
                      </text>
                      <rect x="390" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#d1e4f4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband D</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900022" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Digital</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#3882c4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Direct Mail</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan>
                      </text>
                      <rect x="130" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#8dbce5" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Everyday Sales</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PR</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Radio</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email Blasts</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#5a0119" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search A</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#6e001d" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search B</tspan>
                      </text>
                      <rect x="260" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#7c0020" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search C</tspan>
                      </text>
                      <rect x="390" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search D</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#ef88a2" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email A</tspan>
                      </text>
                      <rect x="130" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email B</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0a3867" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display A</tspan>
                      </text>
                      <rect x="130" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#12467b" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display B</tspan>
                      </text>
                      <rect x="260" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#18508a" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display C</tspan>
                      </text>
                      <rect x="390" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display D</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband A</tspan>
                      </text>
                      <rect x="130" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#a8ceee" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband B</tspan>
                      </text>
                      <rect x="260" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#bfdaf0" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband C</tspan>
                      </text>
                      <rect x="390" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#d1e4f4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband D</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900022" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Digital</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#3882c4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Direct Mail</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan>
                      </text>
                      <rect x="130" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#8dbce5" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Everyday Sales</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">PR</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Radio</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#0c2a41" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email Blasts</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband</tspan>
                      </text>
                      <rect x="0" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#5a0119" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search A</tspan>
                      </text>
                      <rect x="130" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#6e001d" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search B</tspan>
                      </text>
                      <rect x="260" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#7c0020" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search C</tspan>
                      </text>
                      <rect x="390" y="390" width="18" height="18" r="0" rx="0" ry="0" fill="#900126" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="400" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search D</tspan>
                      </text>
                      <rect x="0" y="420" width="18" height="18" r="0" rx="0" ry="0" fill="#cc385e" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="430" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan>
                      </text>
                      <rect x="0" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#ef88a2" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email A</tspan>
                      </text>
                      <rect x="130" y="450" width="18" height="18" r="0" rx="0" ry="0" fill="#f5a4b9" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="460" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Email B</tspan>
                      </text>
                      <rect x="0" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#0a3867" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display A</tspan>
                      </text>
                      <rect x="130" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#12467b" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display B</tspan>
                      </text>
                      <rect x="260" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#18508a" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display C</tspan>
                      </text>
                      <rect x="390" y="480" width="18" height="18" r="0" rx="0" ry="0" fill="#2b69a8" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="490" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Display D</tspan>
                      </text>
                      <rect x="0" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#91bfe6" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="30" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband A</tspan>
                      </text>
                      <rect x="130" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#a8ceee" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="160" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband B</tspan>
                      </text>
                      <rect x="260" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#bfdaf0" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="290" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband C</tspan>
                      </text>
                      <rect x="390" y="510" width="18" height="18" r="0" rx="0" ry="0" fill="#d1e4f4" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: none;"></rect>
                      <text x="420" y="520" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial; display: none;" font-size="13px">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Broadband D</tspan>
                      </text>
                    </svg>
                  </div>
                </div>
                <p><strong>Analytic Partners' Cross-Media Attribution Analysis delivers accurate credit to each media channel</strong>&nbsp;</p>
                <p>Analytic Partners Cross-Media Attribution solution involves innovative modeling that directly links comprehensive Marketing Mix Models with Digital Attribution insights.&nbsp;Our approach delivers a complete view of the customer path to conversion, while providing a big picture view of the interactions across channels and the impact that they have on each other. This allows for accurate attribution; eliminating double counting due to ‘last click’ or isolated channel measurement.</p>
                <p>Our Cross-Media Attribution models apply an algorithmic approach. Models are data-driven and custom-built for the defined project scope, data availabiity, and client-specific business objectives.&nbsp;By incorporating all possible drivers, including online and offline media, other marketing, and external factors such as seasonality and competitive actions, we are able to effectively capture the true drivers of ‘incremental’ sales.&nbsp;&nbsp;&nbsp;</p>
                <p>Unlike other solutions, our approach delivers the ‘incremental’ ROI of each channel in the context of the full marketing mix.&nbsp;This allows for more meaningful recommendations on the optimal expenditures for each channel and opportunities to achieve higher ROI, increased share, and improved sales, revenue and profit.&nbsp;</p>
                <p><strong>We answer your questions:</strong></p>
                <ul>
                  <ul>
                    <li>How much is each channel impacting sales?</li>
                    <li>What is the optimal spend allocation across our online and offline marketing channels?</li>
                    <li>How is our offline marketing impacting online, and vice versa?&nbsp;</li>
                    <li>What is the optimal timing of activities, given factors such as cross-channel synergies, seasonality, and competitive tactics?</li>
                    <li>Are there any opportunities to improve execution by DMA, by&nbsp;<a href="/services/customer-segmentation/" title="Customer Segmentation">customer segment</a>?</li>
                    <li>How can we optimize&nbsp;the sequencing of messages across Social, Display, Paid and Organic&nbsp;Search?</li>
                    <li>What is the ROI by&nbsp;different match types (Exact/Phrase/Broad)?</li>
                    <li>What are the most efficient Display Ad formats, websites, and&nbsp;sizes?</li>
                    <li>How effective and&nbsp;efficient are our retargeting efforts?</li>
                    <li>What are the marginal returns on our investments?&nbsp;</li>
                    <li>What is the optimal number of ad exposures? &nbsp;</li>
                    <li>What is the frequency cap by website&nbsp;genre?</li>
                  </ul>
                </ul>
                <div class="page-bottom-aside">
                  <div class="box-half">
                    <h3>In detail</h3>
                    <p>Read a detailed discussion about Cross-Media Attribution.</p>
                    <a class="button button-red tabjax" href="#">Find out more</a> </div>
                  <div class="box-half">
                    <h3>Learn more</h3>
                    <p>For more answers to your questions on Cross-Media Attribution, please contact us.</p>
                    <a class="button button-red" href="/contact-us/">Contact us</a> </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <div class="pricing_content pricing_content1 packnotinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content">
                <h3 class="no-border">Our customized approach goes beyond measurement in silos and ‘last click’ to more completely and accurately capture all sales drivers</h3>
                <p>As data has become more robust, and detailed cookie-level data and pixel tracking has become more prominent, the ability to capture both the direct and indirect impacts of digital marketing and other cross-channel tactics has greatly improved.&nbsp;Through advanced modeling techniques, Analytic Partners is able to link consumer purchase decisions back to the 'indirect' stimulus to capture the ‘true’ influencer of conversion.&nbsp;This approach has proven valuable to eliminate last-click attribution bias.&nbsp;Our attribution models not only isolate the influence of each digital tactic on sales, conversions or other KPIs, but they also reveal how other marketing efforts such as TV, Print, Outdoor, Radio, PR, Sponsorship, etc. have influenced the purchase decision.&nbsp;In addition, our approach also controls for non-marketing drivers, and therefore delivers the true ‘incremental’ ROI of each activity.&nbsp;</p>
                <p>Our approach delivers actionable recommendations on the optimal cross-channel mix (e.g. Search vs. TV) as well as the optimal intra-channel mix (e.g. Display Ad by site or Search by keyword).&nbsp;The complementary insights from Marketing Mix Models and Digital Attribution Analysis deliver a holistic assessment to inform business planning strategy.</p>
                <p>Analytic Partners works with you to implement analysis results into future marketing plans.&nbsp; We have a great deal of experience in developing test and learns, tracking and measuring the impact of various scenarios and adjusting plans accordingly.&nbsp;Simulations and optimization capabilities can be provided as part of our consulting support, or through our GPS platform.&nbsp;</p>
                <p>While your competitors continue to measure individual channel success in silos or via last-click methodologies, Analytic Partners cross-media attribution will provide you with the tools to more confidently and accurately reallocate budget to deliver the best returns and drive competitive advantage.</p>
                <div class="page-bottom-aside">
                  <div class="box-half">
                    <h3>Learn more</h3>
                    <p>For more answers to your questions on Cross-Media Attribution, please contact us.</p>
                    <a class="button button-red" href="/contact-us/">Contact us</a> </div>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div id="view5">
        <div class="inclusions_top_menu">
          <ul class="inclusions_ul">
            <li><a class="in_active inclus" coords="packinclude" href="#">Overview</a></li>
            <li><a class="inclus" coords="packnotinclude" href="#">Dashboard</a></li>
          </ul>
        </div>
        <div class="pricing_content packinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
            <div class="page-content">

      <h3 class="no-border">Promotions can be expensive, and their performance must be understood and executed well to achieve goals</h3>
	        
	  <p>Analytic Partners applies sophisticated quantitative techniques to evaluate all the promotion elements of your <strong>shopper marketing</strong> – price discounts, coupons, online offers, special packs, incentives, displays, packaging, special events, loyalty rewards, promotional interest rates, etc., to understand their effect on business performance and promotion ROI.</p>
<p>Our <strong>Promotional Effectiveness analysis</strong> goes beyond immediate sales impact to understand longer-term implications, including future cannibalization, portfolio cannibalization and promotion profitability. We perform in-depth analysis of the promotion mix, including factors like the impact of creative, variance of price levels, the combination of different promotions, and the performance of event-based promotions.</p>
<p>Analytic Partners’ promotion effectiveness analysis will also assess the synergy benefits across your promotion activities and media elements to provide you with insights on promotion timing. These promotion analytics include insights such as optimal number of promotions per year, ROI by promotion type, sales trade-offs between types of promotions, and the contribution of promotions to total portfolio performance.</p>

	  


	  

<div class="graph-holder">
	<h4>ACTIONABLE PROMOTION INSIGHTS FOR DRIVING GROWTH</h4>
	<div class="static-holder">
		<img src="img/pro.png" alt="">
	</div>
</div>


      <h3>Promotion Effectiveness for Retail (Brick &amp; Mortar and eCommerce)</h3>
<p>Our approach to promotional analysis involves a strong partnership with the retailer/account teams to align on planning and strategy, and to develop key questions that will have the most actionability with the retailer.&nbsp;The insights identified by Analytic Partners feed directly into sales stories, and provide profitable action steps that benefit both your business, as well as the retailer.&nbsp;With a clear understanding of how to structure your promotional strategy, we will provide you with hard facts that will improve your promotional plans for market impact, enhanced ROI, and increased profitability.</p>
<p>Armed with the important facts and insights about promotion performance, you will be able to improve promotion effectiveness, make better decisions about promotion resource allocation, enhance promotion planning, and ultimately improve promotion ROI.</p>
	  	  
	  


      <p><strong>We Answer Your Questions</strong></p>
<ul>
<li>Which promotion strategies and tactics drive the greatest ROI for my business?</li>
<li>Should I re-allocate promotions between types for greater sales and profit impact?</li>
<li>How do my promotional events compare across products? Across markets?</li>
<li>Do my promotions cannibalize future sales?</li>
<li>Should I promote more or less often?</li>
<li>What is the optimal level of discount for my promotions?</li>
<li>How do I create win-wins for my business and the account?</li>
</ul>

      <div class="page-bottom-aside">
	          
		
        <div class="box-half">
          <h3>Dashboard</h3>
          <p>Learn more about how our Promotional Dashboard can help your business.</p>
          <a class="button button-red tabjax" href="/services/promotional-effectiveness/Details">Find out more</a>
        </div>


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your questions on Promotional Effectiveness, or our Promotional Dashboard, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div>

    </div>
            </ul>
          </div>
        </div>
        <div class="pricing_content pricing_content1 packnotinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content"><h3 class="no-border">Planning, adapting and implementing promotions appropriately is key for winning consumers in a constantly evolving market, and Analytic Partners’ Trade Promotion &amp; Optimization Dashboard was developed with this in mind.</h3><p>We know that every business faces unique challenges, and customization is key to account for these differences.&nbsp; Our web-based dashboard is<strong> completely customizable</strong> and provides <strong>detailed tracking</strong> of promotional events from a volume, activity, and financials perspective.</p><p>The Trade Promotion &amp; Optimization Dashboard leverages historical data and provides a view of the true net incrementality of promotions net of cannibalization.&nbsp; This information also feeds our forecasting module, which allows simulation of current promotional plans, drilling down into the key drivers of incremental sales, ROI and profit.&nbsp; <strong>Real-time planning</strong> is possible at a SKU level, helping our clients to determine the optimal mix of promotion types and prices, and establishing clear guidance on how to optimize strategy given planned spend and available budgets.</p><p>Some key features of the promotional dashboard and forecasting module include:</p><ul>
<li>Completely customizable based on how events are planned and executed</li>
<li>Visualization of results</li>
<li>Waterfall view of Incremental Revenue and Incremental Profit by Event</li>
<li>Detailed SKU/Customer planning tool</li>
<li>Drill-down to lowest level of detail from Aggregated view</li>
<li>Customized metrics</li>
<li>Scenario Planning &amp; Trade Promotion Optimization</li>
</ul><div class="page-bottom-aside">		

        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your questions on Promotional Effectiveness, or our Promotional Dashboard, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div></div>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div id="view6">
        <div class="inclusions_top_menu">
          <ul class="inclusions_ul">
            <li><a class="in_active inclus" coords="packinclude" href="#">Overview</a></li>
            <li><a class="inclus" coords="packnotinclude" href="#">Optimizer</a></li>
          </ul>
        </div>
        <div class="pricing_content packinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
            <div class="page-content"><h3 class="no-border">In an increasingly competitive environment, an effective pricing strategy is key to managing your brand</h3><p>Your approach to pricing can work against you as easily as it can work for you. The difference between success and failure, profit or loss, growth vs stagnation, often hinge on critical pricing decisions.&nbsp;</p><p>Analytic Partners’ Strategic Pricing Consulting provides a framework for optimizing your brand’s pricing strategy via comprehensive measurement designs that reveal pricing opportunities and risks.&nbsp;</p><p>In order to develop a well-thought out <strong>price optimization strategy</strong>, the key is to understand tradeoffs between the pricing options available, and how to structure price for your brand or portfolio accordingly.&nbsp;</p><p>It all starts with sophisticated modeling to assess consumers’ sensitivity to your pricing, measured in the context of your marketing and other marketplace elements, in order to properly isolate the true response to your pricing mechanisms.</p><div class="graph-holder">
	<h4>PRICING STRATEGY</h4>
	<div class="static-holder">
		<img src="img/g.png" alt="">
	</div>
</div><p>Once we understand the impact of your everyday price, promotion price, and promotion frequency on your business, we develop pricing recommendations working with you and tailoring the strategy to meet your sales, financial, and growth objectives.&nbsp;</p><p>Analytic Partners’ in-depth pricing measurement is aligned with the level at which your promotion decisions are made.&nbsp; We look across your different price tiers, price offerings and distribution channels to incorporate each dimension within our pricing recommendations.&nbsp; We analyze your price at the deepest levels, from changes in the competitive environment to measuring the mitigating benefits from advertising and customer loyalty.&nbsp;</p><p>The analysis uncovers detailed pricing opportunities by reviewing specific price points, price gaps, and price threshold, and how they all work together.&nbsp;</p><p>Results are delivered through a <a href="#" title="Dashboard &amp; Planner – GPS">price optimization tool</a> and we work with you to analyze different price strategies and scenarios to assess further opportunities. Our software is designed to incorporate and build around your business targets and constraints, and to provide you with implementable and high-impact recommendations.</p><p><strong>We answer your questions</strong></p><ul>
<li>How should we strategically price the different segments and brands in our portfolio to drive growth?</li>
<li>Do we have an opportunity to optimize pricing between every day price points and promotion price points to maintain volume yet drive profit growth?</li>
<li>What is the importance of our price gap vs. our key competitors and how should it factor in pricing guidelines?</li>
<li>Where are the most important price thresholds and what is the best approach to cross them?</li>
<li>Do we have the right balance between promotion, depth of discount, and the number of promotion events?</li>
<li>How will a price increase affect our revenue, volume, penetration and buy rate?</li>
<li>Management wants to take a 5% price increase. What will be the impact on sales, revenue, and profitability?</li>
</ul><div class="page-bottom-aside">
	          
		
        <div class="box-half">
          <h3>Optimizer</h3>
          <p>Learn more about our Price Optimization Tool.</p>
          <a class="button button-red tabjax" href="#">Find out more</a>
        </div>


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Pricing Strategy questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div></div>
            </ul>
          </div>
        </div>
        <div class="pricing_content pricing_content1 packnotinclude pricing_content3">
          <div class="package_doesnot_include">
            <ul>
              <div class="page-content"><h3 class="no-border">Grow your sales through better pricing strategy. Our Price Optimization Tool can help</h3><p>Analytic Partners’ pricing studies go beyond price elasticity, providing clear guidance across everyday, promoted, and portfolio pricing strategy. Results of Analytic Partners’ pricing studies are delivered through a Price Optimization Tool&nbsp;and we work with you to analyze different price scenarios to assess further opportunities. Our software is designed to incorporate and build around your business targets and constraints, and to provide you with implementable and high-impact recommendations.&nbsp;</p><p>By using the Analytic Partners Price Optimization Tool, you will be able to:</p><ul>
<li>Identify optimal price points at the product group &amp; retailer level</li>
<li>Simulate impacts on the entire breadth of the product portfolio</li>
<li>Incorporate real-world market constraints</li>
<li>Simulate pricing lead vs. follow action with key competitors</li>
</ul><p>The Price Optimization Tool can be customized as per client needs on pricing actions, supporting features such as unit price, size price, promoted price, portfolio pricing, price gap and thresholds.&nbsp; This allows for real-time optimization of portfolio sales, revenue and profit.</p><div class="page-bottom-aside">		

        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Pricing Strategy questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div></div>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
	  
	  <div id="view7" style="display: block;">
      
        <div class="page-content">

      <h3 class="no-border removemarginbox">Optimization and Business Planning to make the most of your Marketing Budget</h3>
	        
	  <p>You strive to maximize sales and profit while operating within constraints such as finite budgets, defined marketing plans, and even limited production capabilities. Your challenge lies in determining how to measure performance and apply resources to achieve the greatest success and marketing ROI within real-world constraints.</p>
<p>Our <strong>Marketing Optimization</strong> services and tools can help improve efficiency and profitability by pinpointing the level of marketing activity required to maximize your sales and profit and minimize costs. Our approach leverages advanced econometric models that first determine the performance and ROI of your various marketing tactics. We then incorporate cost components and budget constraints to find the optimal allocation of resources in your portfolio to reach the required sales and profit goals.</p>

	  


	  


      <div class="graph-holder">
        <h4>Marketing Budget Optimization Example</h4>
        <div class="callout" style="display: block;">
          <h3>+$28 million in additional revenue</h3>
          <p>with the same spend</p>
        </div>
        <div class="holder in-view" id="marketingBudget"><svg height="420" version="1.1" width="510" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px; top: -0.828125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><linearGradient id="890-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1090-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1290-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1390-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1490-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1590-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1690-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1790-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1890-_70011e-_960027" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#70011e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#960027" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="1990-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2090-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2190-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2290-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2390-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2490-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient><linearGradient id="2590-_303e4d-_2b68a7" x1="0" y1="1" x2="6.123233995736766e-17" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#303e4d" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#2b68a7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient></defs><rect x="0" y="336" width="510" height="1" r="0" rx="0" ry="0" fill="#444444" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><text x="30" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">TV</tspan></text><text x="105" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Print</tspan></text><text x="180" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mobile</tspan></text><text x="255" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Search</tspan></text><text x="330" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Banner</tspan></text><text x="405" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Promotions</tspan></text><text x="480" y="356" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">DTC</tspan></text><rect x="0" y="386" width="18" height="18" r="0" rx="0" ry="0" fill="url(#890-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><text x="30" y="396" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Current Spend</tspan></text><rect x="130" y="386" width="18" height="18" r="0" rx="0" ry="0" fill="url(#1090-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><text x="160" y="396" text-anchor="start" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: start; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Arial;" font-size="13px"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Optimized Spend</tspan></text><rect x="0" y="120" width="30" height="216" r="0" rx="0" ry="0" fill="url(#1290-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="75" y="261" width="30" height="75" r="0" rx="0" ry="0" fill="url(#1390-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="150" y="306" width="30" height="30" r="0" rx="0" ry="0" fill="url(#1490-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="225" y="248" width="30" height="88" r="0" rx="0" ry="0" fill="url(#1590-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="300" y="288" width="30" height="48" r="0" rx="0" ry="0" fill="url(#1690-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="375" y="206" width="30" height="130" r="0" rx="0" ry="0" fill="url(#1790-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><rect x="450" y="228" width="30" height="108" r="0" rx="0" ry="0" fill="url(#1890-_70011e-_960027)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="30" y="150" width="30" height="186" r="0" rx="0" ry="0" fill="url(#1990-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="105" y="201" width="30" height="135" r="0" rx="0" ry="0" fill="url(#2090-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="180" y="216" width="30" height="120" r="0" rx="0" ry="0" fill="url(#2190-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="255" y="96" width="30" height="240" r="0" rx="0" ry="0" fill="url(#2290-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="330" y="181" width="30" height="155" r="0" rx="0" ry="0" fill="url(#2390-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="405" y="181" width="30" height="155" r="0" rx="0" ry="0" fill="url(#2490-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a><a style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect x="480" y="181" width="30" height="155" r="0" rx="0" ry="0" fill="url(#2590-_303e4d-_2b68a7)" stroke="none" opacity="1" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></rect></a></svg></div>
      </div>


<p>Our marketing optimization tools help you plan budgets, manage multi-channels, create pricing strategies and produce optimal revenue for a single brand or across a portfolio of businesses and/or countries. We’re able to quantify the most profitable level of marketing and sales activities so you can be confident that every dollar spent is working its hardest for your business.</p>
<p><strong>We Answer Your Questions</strong></p>
<ul>
<li>What is the highest level of revenue/profit we can achieve with the current marketing spending by re-allocating across tactics and maintaining our budget?</li>
<li>If we have to cut marketing expenditures by 5%, which component should we eliminate to have the least impact on our sales?</li>
<li>If we increased our marketing budget, what is the most profitable place to make additional investments?</li>
<li>Can we improve total revenue/profits by reallocating marketing or sales resources from one brand to another within a portfolio of products?</li>
<li>Can we improve global profit performance by moving marketing resources from one country to another geographic region?</li>
</ul>
	  	  
	  


      

      <div class="page-bottom-aside">
	          
		


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Optimization questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div>

    </div>
        <div class="clr"></div>
      </div>
	  
	  <div id="view8" style="display: block;">
        
        <div class="page-content">

      <h3 class="no-border removemarginbox">Defining Customer Segments to Enhance Marketing ROI</h3>
	        
	  <p>Our <strong>Customer Segmentation</strong> analyses leverage advanced analytics to help provide a holistic understanding of the traits and attributes that define the different types of customers within your customer base. Our analyses identify and separate your customer base into distinct groups with common characteristics to help you gain a deeper understanding of the profile of each segment, as well as to uncover the significant similarities and differences between the behavior and demographics of each segment. The end result is to help inform business planning and marketing decisions to improve overall business performance.&nbsp;</p>
<p>Armed with insights from our segmentation research, you can create advertising and promotional plans, support product development and pricing initiatives, and develop tailored customer contact practices that will improve your customers’ experience and result in greater sales and profit from each segment. Improving your Customer Relationship Management and optimizing your CRM strategy starts with understanding your customer base.</p>

	  


	  

<div class="graph-holder">
	<h4>CUSTOMER SEGMENTATION ANALYSIS</h4>
	<div class="static-holder">
		<img src="img/segment.png" alt="">
	</div>
</div>


      <p><strong>Conducting Customer Segmentation to Improve Marketing Strategies</strong></p>
<p>By conducting advanced statistical modeling on transactional and appended data, our analyses uncover and divide your customer base into distinct groups based on shared characteristics, such as customer needs, transaction history, profitability, as well as many other client-specific dimensions and/or go-to-market strategies. AP is also able to enhance segmentation analyses with online user-level behavior data to further refine and expand segmentation insights as consumers continue to shop and interact more online. As a result of these insights, you’ll be able to prioritize and target customer segments, and establish the appropriate and most meaningful communication positioning for each segment. You will also be able to leverage insights from our customer or demographic segmentation research to provide products, services, and promotions that are most relevant to each customer segment – and most likely to increase your business in both the short-term and long-term.&nbsp;</p>
<p>Our customer segmentation research creates the vital insights necessary for you to focus on your most profitable customer segments throughout the customer lifecycle – from acquisition to cross-sell and long-term retention. As such Customer Segmentation Analyses help guide the allocation of your company CRM resources in order to deliver the greatest marketing and sales ROI.</p>
	  	  
	  


      <p><strong>We answer your questions</strong></p>
<ul>
<li>What are my customer segments and how are they defined?</li>
<li>How many distinct groups do we serve – and how are they different?</li>
<li>What customer segments deliver the most revenue and profit?</li>
<li>What products and services appeal to which customer segments?</li>
<li>How can I tailor communication to better address customers needs?</li>
<li>Which consumers tend to shop/interact exclusively online and why?</li>
<li>How and where should I leverage my <a href="#" title="Customer Loyalty Analysis">customer loyalty program</a> further?</li>
</ul>

      <div class="page-bottom-aside">
	          
		


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Customer Segmentation questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div>

    </div>
        <div class="clr"></div>
      </div>
	  
	  <div id="view9" style="display: block;">
       <div class="page-content">

      <h3 class="no-border">Understanding the lifetime value of interactions with customers and how to drive advocacy is key to driving long term business performance.</h3>
	        
	  <p>Building brands is about building customer loyalty. And in a volatile economic environment, communicating and fostering advocacy with your customer base becomes all the more important. Ensuring your marketing efforts are conveying a relevant message to the appropriate customer segment in an effective and efficient manner is essential - in both the short <em>and</em> long term.</p>
<p>AP’s <strong>Customer Loyalty Analysis</strong> will look at all factors driving conversion and retention for each of your customer groups to determine the optimal approach to target and drive loyalty for each customer segment. Understanding the long term value of each type of marketing communication, and its impact on each type of consumer is a key focus area for the analysis. Our analyses deliver comprehensive insights on the lifetime value of different customer segments and identify how to drive customer retention for our clients.</p>

	  


	  

<div class="graph-holder">
	<h4>CUSTOMER LOYALTY ANALYSES HELP DEFINE MARKETING STRATEGIES</h4>
	<div class="static-holder">
		<img src="img/loyalty.png" />
	</div>
</div>


      <p><strong>Leveraging Data and Analytics to Improve Loyalty through Marketing</strong></p>
<p>AP’s approach to Customer Loyalty Analyses combine extensive database mining with superior analytic techniques to identify the factors that are driving conversion and loyalty for each of your customer segments. Retail, consumer goods, service providers, healthcare, hospitality, and other industries have been leveraging this type of analysis to identify the correct mix of traditional media, direct mail, and digital marketing to meet business growth goals by correctly targeting the right customer. In recent years we have also worked with our clients to integrate online behavior data at the cookie level to help us understand even more about consumer behavior and how loyal cutsomers behave within and across sales channels that may span online, offline, and call center touchpoints.</p>
<p>Throughout the Customer Loyalty Analysis process, Analytic Partners will work with you and your agencies to determine the optimal marketing strategies to most effectively target each of you customer groups to meet your key performance indicators such as sales, conversion, retention, margin, frequency and/or attrition.&nbsp; Our long-term partnership philosophy will provide you with ongoing monitoring of your new customer marketing plans to ensure the maximum top-line and bottom-line impact for your business.</p>
	  	  
	  


      <p><strong>We answer your questions</strong></p>
<ul>
<li>How can I build brand loyalty and retention?&nbsp; How can I avoid attrition?</li>
<li>How effective is my marketing in communicating each type of message to my key <a href="#" title="Customer Segmentation">customer segments</a>?</li>
<li>What is the ROI of my customer loyalty program, traditional media, online marketing, and DTC and Direct Mail efforts?&nbsp; Is there room to optimize?</li>
<li>What is the optimal strategy to reach each customer segment?</li>
<li>Which marketing tactic is most effective for my loyal group?</li>
<li>What marketing tactics are most efficient in increasing the level of engagement with my underdeveloped customer base?</li>
<li>How do we connect with customers based on their demographics and attitudes?</li>
<li>How can we influence share of wallet across all my customer segments?</li>
</ul>

      <div class="page-bottom-aside">
	          
		


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your questions on Customer Loyalty Analysis, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div>

    </div>
        
        <div class="clr"></div>
      </div>
	  
	  
	  <div id="view10" style="display: block;">
     
        <div class="page-content">

      <h3 class="no-border removemarginbox">In a highly competitive market where competing brands jostle for the attention and preference of consumers and shoppers, it is becoming increasingly important for brands to cultivate a strong brand image.</h3>
	        
	  <p>A strong brand image, with a unique selling proposition, and a consistent communication strategy is what helps differentiate brands and builds a foundation for business growth. The cultivation of <strong>Brand Equity</strong> requires continuous time and resource investments, but is crucial for avoiding the danger of having to rely on pricing and promotion tactics that in many cases largely influence short-term sales.</p>
<p>As such, measuring and monitoring brand health on a regular basis is necessary to ensure your brand contributes positively to sales and penetration growth, as well as gauge the direction of future business growth and stability in the marketplace.</p>
<p>Our approach to understanding a client’s true brand equity involves not only identifying the brand health metrics which actually drive brand sales, conversion and/or penetration, but also identifies the optimum channel mix which drives uplifts in relevant brand health measures which in turn drive not only sales but all key performance indicator (KPI) growth.</p>

	  


	  


      <p><strong>Analysis to Understand the Drivers of Brand Equity</strong></p>
<p>By applying innovative <strong>brand equity modeling</strong> techniques and using state-of-the-art technology to analyze a client’s brand and ad tracking data against a client’s KPI trends, marketing activities, competitive activities, economic factors and trends of other identified drivers, we identify which and to what degree each brand health measure and brand image attribute statement impacts KPI and/or business performance variance. Of those relevant brand health measures which drive KPI business performance, we also identify which marketing elements and at what combination are optimal in driving improvement in brand health which then contributes to overall business growth.</p>
<div>
<p>As part of Analytic Partners’ service offering in the field of Brand Equity modeling, we will partner closely with you to provide you with insights and strategic recommendations designed to optimize your brand health and drive both short-term sales and penetration as well as long-term KPI growth stability. We will also measure and track your brand health against individual campaigns, message attributes, product developments (e.g. launches, re-packaging, etc.), pricing, distribution and competitive activity.</p>
<p>&nbsp;</p>
</div>
	  	  
	  


      <p><strong>We answer your questions</strong></p>
<ul>
<li>How much does brand equity contribute to sales?</li>
<li>What brand health metrics and measures should be tracked?</li>
<li>What brand health measures are linked directly and indirectly to sales?</li>
<li>Which <a href="#" title="Cross-Media Attribution">paid, owned, &amp; earned media</a> drives increases in brand health?</li>
<li>What is the marketing cost to maintain the current brand equity trend?&nbsp;</li>
<li>What is the marketing cost and ROI to increase brand equity by 1%?</li>
<li>Does driving awareness increase sales?&nbsp; Or perhaps conversion?&nbsp;</li>
<li>How does a competitor’s brand equity impact our business?</li>
</ul>

      <div class="page-bottom-aside">
	          
		


        
        <div class="box-half">
          <h3>Learn more</h3>
          <p>For more answers to your Brand Equity questions, please contact us.</p>
          <a class="button button-red" href="/contact-us/">Contact us</a>
        </div>


      </div>

    </div>
        <div class="clr"></div>
      </div>
	  
	  
    </div>
  </div>
</div>

<script>
      	Modernizr.load([
            {
            	test: window.matchMedia,
            	nope: "/js/enquireMatchMedia.js"
            },
            "/js/enquire.js"
      	]);
      </script>
    <!--<![endif]-->

    <!-- Google Analytics -->
    
<?php require_once('footer-withoutlogin.php'); ?>
