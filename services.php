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
	<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="current"><a href="#">Services</a></li>
			<li><a href="whyus.php">Why us</a></li>
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
						<h2>BUSINESS CONSULTAION</h2>
						<div class="info">
							<ul>
							  <li>
							    <h2>Business Planning</h2>
<<<<<<< HEAD
				  </div>
						<img src="images/business_planing.jpg"/>
					</div>
			  <div class="content">
						<p>All our Business services are designed to produce professional & modern Business plans  which are written to 
achieve their purpose and have content relevant to your business proposition.</p>
						<p>Our fees also are  reasonable and  we guarantee that  our well experienced Consultants provide you the most 
suitable business plan for your business.  Business plan we provide you explain all the expected outcome with 
relevant input you would be putting to your business. We provide  Face to face meetings with you in your 
locality are included in our full planning consultancy services as is desktop research to supplement your 
information. Viability checks and strategy development to improve viability are also included in the full 
Business plan consultancy service.</p>
=======
							  </li>
							  <li></li></ul>
							<div class="clearboth"></div>
					  </div>
						<img src="images/inacup_vanilla.jpg"/>
					</div>
                    
	  <div class="content">
						<p>All our Business services are designed to produce professional & modern Business plans  which are written to achieve their purpose and have content relevant to your business proposition.</p>
						<p>Our fees also are  reasonable and  we guarantee that  our well experienced Consultants provide you the most suitable business plan for your business.  Business plan we provide you explain all the expected outcome with relevant input you would be putting to your business. We provide  Face to face meetings with you in your locality are included in our full planning consultancy services as is desktop research to supplement your information. Viability checks and strategy development to improve viability are also included in the full Business plan consultancy service.</p>
>>>>>>> 3cc8cf20ceebc70de3814b863f6077a6d8084341
						
				  </div>
				</article>
				<article>
<<<<<<< HEAD
				<div class="info">
=======
					<div class="heading">
						 <div class="info">
>>>>>>> 3cc8cf20ceebc70de3814b863f6077a6d8084341
							<ul>
							  <li>
							    <h2>Marketing Planning</h2>
							  </li>
<<<<<<< HEAD
			    </div>
					<div class="heading">
						 <img src="images/Marketing-Blackboard.jpg" />
					</div>
=======
							  <li></li></ul>
							<div class="clearboth"></div>
					  </div>
						<img src="images/inacup_samoa.jpg" />
					</div>
                    
>>>>>>> 3cc8cf20ceebc70de3814b863f6077a6d8084341
					<div class="content">
						<p>The two main elements of this plan are market research to identify and anticipate customer requirements and 
the planning of an appropriate marketing mix to meet these requirements. Either it is a newly formed company or 
an existing company, R &S Consultancy LTD is an expert on providing you with the most accurate marketing plan 
for your business to enhance your clients/customer  base and  improve your sales to make your business 
successful.</p>
                      <p>Our Experienced & professional consultancy team would,</p>	
                        <ol style="padding: 0 0 4px 30px;">
							<li type="circle">Assess how well your business is doing or will do  in its markets.</li>
							<li type="circle">To identify current strengths and weaknesses in these markets.</li>
							<li type="circle">To establish marketing objectives to be achieved in these markets. </li>
                            <li type="circle">To establish a marketing mix for each market designed to achieve organisational 
objectives.</li>                       
						</ol>					
				  </div>
				</article>
				<article>
				<div class="info">
							<ul>
							  <li>
							    <h2>Investment Planning</h2>
							  </li>
					  </div>
					<div class="heading">
					  <img src="images/invesment_planing.jpg" />
					</div>
<<<<<<< HEAD
=======
                    
>>>>>>> 3cc8cf20ceebc70de3814b863f6077a6d8084341
					<div class="content">
						<p>our aim is to bring you the most comprehensive source of financial advice and information in the UK. we are 
Matched by excellent standards of service and expertise, delivered with honesty and integrity .We adopt a 
partnership approach working with you. Our main Investment Services Involves,</p>
						<ul style="padding: 0 0 4px 30px;">
							<li type="circle">Property investment / Buy to let</li>
							<li type="circle">Pre and post retirement planning</li>
							<li type="circle">Work place retirement planning to include Group Pensions  and Occupational schemes.</li>
                            <li type="circle">Tax efficient Saving and investing for future needs </li>
                            <li type="circle">Private Medical and Long Term Care provision.</li>
                            <li type="circle">Inheritance Tax mitigation and advice on trusts.</li>
						</ul>
					</div>
			      <ul type="disc">
                  </br>
				      <li>We also provide new business start up support which include all the required information from the beginning 
to  		                          start your business / Staff training and Recruitment Support / management 
Support.</li>
			      </ul>
				</article>
			</div>
<<<<<<< HEAD
			<div id="sidebar" class="col-1-3">
				<section>
					<div class="wrap-search">
						<div id="search">
							<div class="button-search"></div>
							<input type="text" value="Search..." onFocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}"
 onBlur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
						</div>
					</div>
					<div class="social">
						<a href="#"><img src="images/facebook-icon.png" title="Facebook" /></a>
						<a href="#"><img src="images/rss-icon.png" title="Rss"/></a>
						<a href="#"><img src="images/google-icon.png" title="Google Plus"/></a>
						<a href="#"><img src="images/linkedin-icon.png" title="Linkedin"/></a>
					</div>
				</section>
				<section>
					<div class="heading"><h2>About us</h2></div>
					<div class="content">
						<img src="images/zerotheme.png" style="border:none;"/>
						<p>Free Html5 Templates created by <a href="http://www.zerotheme.com">Zerotheme</a>. You can use and modify the 
template for both personal and commercial use. You must keep all copyright information and credit links in the 
template and associated files.</p>
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
				<section>
					<div class="heading"><h2>Gallery</h2></div>
					<div class="content">
						<div class="gallery">
							<a href="#"><img src="images/port1.jpg" class="grayscale"/></a>
							<a href="#"><img src="images/port2.jpg" class="grayscale"/></a>
							<a href="#"><img src="images/port3.jpg" class="grayscale"/></a>
							<a href="#"><img src="images/port1.jpg" class="grayscale"/></a>
							<a href="#"><img src="images/port2.jpg" class="grayscale"/></a>
							<a href="#"><img src="images/port3.jpg" class="grayscale"/></a>
						</div>
					</div>
				</section>
				<section>
					<div class="heading"><h2>Popular Post</h2></div>
					<div class="content">
						<div class="post">
							<img src="images/port1.jpg" width="50px"/>
							<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/port2.jpg" width="50px"/>
							<h4><a href="#">Aliquam viverra convallis</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/port3.jpg" width="50px"/>
							<h4><a href="#">TSed accumsan libero</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/port1.jpg" width="50px"/>
							<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
							<p>November 11 ,2012</p>
						</div>
						<div class="post">
							<img src="images/port2.jpg" width="50px"/>
							<h4><a href="#">Aliquam viverra convallis</a></h4>
							<p>November 11 ,2012</p>
						</div>
					</div>
				</section>
			</div>
=======
>>>>>>> 3cc8cf20ceebc70de3814b863f6077a6d8084341
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