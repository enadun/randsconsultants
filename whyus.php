<!DOCTYPE html>
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
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
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
	<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li class="current"><a href="#">Why us</a></li>
			<li><a href="retailmanagement.php">Retail Management</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
		</ul>
	</nav>
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
											<h3>Lorem ipsum dolor sit amet</h3>
										</div>
								</li>
								<li>
									<a href="#"><img src="images/image-slider-2.png" alt="" /></a>
										<div class="flex-caption">
											<h3>Test Caption 2</h3>
										</div>
									</li>
								<li>
									<img src="images/image-slider-3.png" alt="" />
									<div class="flex-caption">
											<h3>Test Caption 3</h3>
										</div>
								</li>
								<li>
									<img src="images/image-slider-4.png" alt="" />
									<div class="flex-caption">
											<h3>Test Caption 4</h3>
										</div>
								</li>
								<li>
									<img src="images/image-slider-5.png" alt="" />
									<div class="flex-caption">
											<h3>Test Caption 5</h3>
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
						<h2><a href="#">Flexible fee</a></h2>
						<img src="images/flexible_payments.jpg"/>
					</div>
					<div class="content">
						<p>We always guarantee that we either match or provide services for  cheaper cost than our competitors. Some clients opt for an All Inclusive contract, in which monthly fees are fixed which reduces financial risk and provides predictable cash-flow. Others opt for Variable Rate agreements, where fees vary according to demand and usage. Overall, we aim to offer flexibility to suit all budgets.</p>
						
						
				  </div>
				</article>
				<article>
					<div class="heading">
						<h2><a href="#">Unrivalled customer service</a></h2>
						<img src="images/inacup_samoa.jpg" />
					</div>
					<div class="content">
						<p>Our job and aim  is to do the best job for you, and that is why our clients control the bonuses received by our consultants. If you are unhappy with the service you receive, we give you an option to explain why you are unhappy & we would provide you extra services for that to make you happy & to make your business successful</p>
						
				  </div>
				</article>
				<article>
					<div class="heading">
						<h2><a href="#"><strong>Open, flexible attitude</strong></a></h2>
						<img src="images/inacup_pumpkin.jpg" />
					</div>
					<div class="content">
						<p>Our company & business in mainly depended  on your satisfaction for the service we provide.  Our clients ,/customers are welcome to contact our consultants in the whole week. We are always flexible  to provide the best service to you. we believe the attitude & Flexibility we have been and we always have with our clients is highly important for our business.</p>
						
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
		<p>Copyright © 2014 - R&amp;S Consultants LTD </p>
		</div>
	</footer>
</div>
</body></html>