<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zMooncake Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
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
			<li><a href="whyus.php">Why us</a></li>
			<li class="current"><a href="#">Retail Management</a></li>
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
			<div id="main-content" class="col-2-3">
				<article>
					<div class="heading">
						<h2>Retail  Management</h2>
						<img src="images/retail_business.jpg"/>
					</div>
					<div class="content">
					  <p>From store openings to store closures RandS Consultant supports retailers with a broad range of services and resources to help them achieve their objectives. We assure that  your business will have our broad guidance and support throughout.</p>
						<p>RandSConsultants has highly skilled experienced personnel attuned to the retail environment and can provide all levels of expertise from reverse pick to stock merchandising.</p>
						<p>	Our store support services include:</p><div>
  
</div>	
				  </div>
                  <section>
					
					<div>
                    
						<ul style="padding: 0 0 4px 30px;">
							<li type="SQUARE">Project management to co-ordinate key tasks to critical deadlines</li>
							<li type="SQUARE">Introductions of new proven  Sales methods to improve sales</li>
							<li type="SQUARE">provision of quality support staff for store openings, closures and refits</li>
                            <li type="SQUARE">Advice and guide you to become successful among competitors</li>
                            <li type="SQUARE">Guidance on cost cutting to maximize profits</li>
                            <li type="SQUARE">Modern Marketing methods attract more customers</li>
                            <li type="SQUARE">Co-ordination of suppliers equipment and services to store</li>
                            <li type="SQUARE">Merchandising of displays to improve sales</li>
                            <li type="SQUARE">Stock management</li>
                            <li type="SQUARE">Cost control and budget adherence</li>
						</ul>
                   	
					</div>
			  </section>
				  <p>We guarantee that  If  it's a new retail business or an existing retails  business, RandSConsultants take your business  to a top level with our professional guidance.</p>
				</article>
                
			</div>
            
		  <div id="sidebar" class="col-1-3">
		    <section>
			  <div class="heading"><h2>About us</h2></div>
					<div class="content">
						<img src="images/zerotheme.png" style="border:none;"/>
						<p>Free Html5 Templates created by <a href="http://www.zerotheme.com">Zerotheme</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
					</div>
			</section>
		    <section>
					<div class="heading"><h2>Categories</h2></div>
					<div class="content">
						<ul>
							<li><a href="http://www.zerotheme.com">Free Html5 Templates</a></li>
							<li><a href="http://www.zerotheme.com">Free Responsive Themes</a></li>
							<li><a href="http://www.zerotheme.com">Free Html5 and Css3 Themes</a></li>
						</ul>
					</div>
			  </section>
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