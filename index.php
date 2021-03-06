﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Randsconsultants</title>
	<meta name="description" content="R&S Consultants LTD | randsconsultants.org">
	<meta name="author" content="www.randsconsultants.org">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You 
are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/kwiks.js"></script>
	
	<script type="text/javascript">
		var Main = Main || {};

		jQuery(window).load(function() {
			window.responsiveFlag = jQuery('#responsiveFlag').css('display');
			Main.gallery = new Gallery();
			
			jQuery(window).resize(function() {
				Main.gallery.update();
			});
		});

		function Gallery(){
			var self = this;
				container = jQuery('.flexslider'),
				clone = container.clone( false );
				
			this.init = function (){
				if( responsiveFlag == 'block' ){
					var slides = container.find('.slides');
					
					slides.kwicks({
						max : 500,
						spacing : 0
					}).find('li > a').click(function (){
						return false;
					});
				} else {
					container.flexslider();
				}
			}
			this.update = function () {
				var currentState = jQuery('#responsiveFlag').css('display');
				
				if(responsiveFlag != currentState) {
				
					responsiveFlag = currentState;
					container.replaceWith(clone);
					container = clone;
					clone = container.clone( false );
					
					this.init();	
				}
			}
			
			this.init();
		}
	</script>
    
</head>
<body>
<!--------------Header--------------->
<div class="wrap-header">
<header> 
<div>
	<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
	<nav>
		<ul>
			<li class="current"><a href="#">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="whyus.php">Why us</a></li>
			<li><a href="retailmanagement.php">Retail Management</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
		</ul>
	</nav>
	</div>
</header>
</div>
<!--------------Slideshow--------------->


<section class="featured">
	<div id="container">
		<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/image-slider-1.png" alt="" />
										<div class="flex-caption">
											<h3>Planning of an appropriate marketing mix</h3>
										</div>
								</li>
								<li>
									<a href="#"><img src="images/image-slider-2.png" alt="" /></a>
										<div class="flex-caption">
											<h3>Advice and guide you to become successful among competitors</h3>
										</div>
									</li>
								<li>
									<img src="images/image-slider-3.png" alt="" />
									<div class="flex-caption">
											<h3>Maximize profits</h3>
										</div>
								</li>
								<li>
									<img src="images/image-slider-4.png" alt="" />
									<div class="flex-caption">
											<h3>Financial advice and information</h3>
										</div>
								</li>
								<li>
									<img src="images/image-slider-5.png" alt="" />
									<div class="flex-caption">
											<h3>Provision of quality support staff</h3>
										</div>
								</li>
								
							</ul>
						</div>
	</div>
	<span id="responsiveFlag"></span>
</section>
			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">		
		<div class="row">
			<div id="main-content" class="col-2-3" style="padding: 0 0 4px 110px;">
				<article>
					<div class="heading">
						
						<div class="info">
							
						  <div class="clearboth"></div>
						</div>
						<img src="images/marketing-plan-strategy.jpg"/>
					</div>
					<div class="content">
						<p>A well written ,detailed and  comprehensive marketing & business plan is  one of the focal points of all 
business ventures because it describes how you plan to attract and retain clients or customers, the most 
crucial aspect of a business.</p>
						<p>The marketing plan plays a vital role in  any successful business. It is the heart of the business, the basis 
from which all other operational and management plans are derived. Marketing offers you a wealth of information 
that if applied correctly virtually can ensure your success.</p>
                        <p>Therefore, it is important that you, as a first-time business owner, develop a comprehensive, effective 
marketing plan. We, R&S Consultants assist you in accomplishing this task in a professional and advanced 
manner As one of the best consultancy firms  in the UK we always make sure our clients receive the best 
service for the money they spend. Mainly we supports ,</p>
						 <ul><li><h4 style="display: inline; width:5%;">1. Business Planning </h4></li>
                        		 <li><h4 style="display: inline; width:5%;">2. Marketing Planning </h4></li>
                        		 <li><h4 style="display: inline; width:5%;">3. Investment Planning </h4></li>
                             <li><h4 style="display: inline; width:5%;">4. Staff training and recruitment </h4>
                        		 <li><h4 style="display: inline; width:5%;">5. New business start-up support</h4></li>
                             <li><h4 style="display: inline; width:5%;">6. Management Consultant </h4></li></ul>
                             <p>We help any sort of  business to be top in the country with our expertise supervision. Our 
professional & experienced consultants will help you to understand what is most important to  start and 
improve your business, sales   and more importantly help you to understand what has not been working for 
you. We will introduce you new  methods which you can use in your business  and we assure you, we change 
your business to a profitable one.</p>
                             <p>As a well experienced consultancy firm, R&S Consultants LTD helps you to improve your business with 
so many proven procedures. We guarantee that our advices and guidance are well worth to improve your 
business.</p>
                             
					</div>
				</article>
				<article>
					<div class="heading">
						<h2>Our Guaranteed Business Policy for our Clients</h2>
						<img src="images/flow-chart.png"/>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<div class="wrap-footer">
	<footer>
		<div class="wrapfooter">
		<p>Copyright © 2014 - R&amp;S Consultants LTD</p>
		</div>
	</footer>
</div>
</body></html>