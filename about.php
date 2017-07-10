<?php
ob_start();
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
include_once 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Home|MySite</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">

			<div class="agile-login">
				<ul>

				<?php if (isset($_SESSION['usr_name'])) { ?>
				<li><p style="font-weight:bold; color:white">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="registered.php">Create Account</a></li>
				<?php } ?>

				</ul>
			</div>
			<div class="product_list_header">
					<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value="" onclick="location.href='cart.php'"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">

			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">MySiteLogo</a></h1>
			</div>
		<div class="w3l_search">
			<form action="search.php" method="post">
        <?php $searchtext = NULL; ?>
        <input type="search" name="searchtext" id="searchtext" placeholder="Search for a Product..." required="" value="<?php echo $searchtext; ?>">
				<button type="submit" name="search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category1<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Category</h6>
														<li><a href="products.php">Category 2</a></li>
														<li><a href="products.php">Category 3</a></li>
														<li><a href="products.php">Category 4</a></li>
														<li><a href="products.php">Category 5</a></li>
														<li><a href="products.php">Category 6</a></li>
													</ul>
												</div>

											</div>
										</ul>
									</li>
									<li><a href="products.php">Category 7</a></li>
									<li><a href="products.php">Category 8</a></li>
									<li><a href="products.php">Category 9</a></li>
									<li><a href="products.php">Category 10</a></li>
									<li><a href="products.php">Category 11</a></li>
                  <li><a href="products.php">Category 12</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">About</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3_agile_header">About Us</h3>
			<div class="about-agileinfo w3layouts">
				<div class="col-md-8 about-wthree-grids grid-top">
					<h4>Blanditiis praesentium deleniti atque corrupti quos </h4>
					<p class="top">Gnissimos voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi. atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga</p>
					<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum </p>		
					<div class="about-w3agilerow">
						<div class="col-md-4 about-w3imgs">
							<img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 about-wthree-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>Praesentium :</h4>
						</div>
						<div class="time-bottom">
							<h5>At vero eos </h5>
							<h5>Accusamus et</h5>
							<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui accusamus et. </p>
						</div>
					</div>
					<div class="testi">
						<h3 class="w3_agile_header">Testimonial</h3>
						<!--//End-slider-script -->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>" I AM VERY PLEASED.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">John Doe,</a>Adipiscing</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" I AM LOREM IPSUM.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">elit semper,</a>Dolor Elit</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" CONSECTETUR PIMAGNA.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">Amet Doe,</a>Suspendisse</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-slid -->
	<div class="about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h2>Lorem Ipsum is that it has a moreless normal</h2>
				<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks on the Internet tend as necessary, making this the first true generator on the Internet embarrassing hidden in the middle of text Lorem Ipsum generators on the Internet tend to repeat predefinedchunks as necessary, making this the first true generator on the.</p>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<!-- about-team -->
	<div class="about-team"> 
		<div class="container">
			<h3 class="w3_agile_header">Meet Our Team</h3>
			<div class="team-agileitsinfo">
				<div class="col-md-3 about-team-grids">
					<img src="images/t4.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>ANDERSON,</span> Manager</h4>
						<p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class=" col-md-3 about-team-grids">
					<img src="images/t2.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>ELIFS,</span> Director</h4>
						<p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/t1.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>JESSICA,</span> Supervisior</h4>				
						<p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/t3.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>RACKHAM,</span> Staff</h4>
						<p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->

<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Anoop 1234 Inkers<span>Contact Me.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:anoop@inkers.in">anoop@inkers.in</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.php">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 1</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 2</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 3</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 4</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Category 5</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="cart.php">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p>© 2017 MySite. All rights reserved | Design by <a href="http://inkers.in/">inkers Inc.</a></p>
			</div>
		</div>

	</div>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>