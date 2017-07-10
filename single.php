<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url= $_SESSION['url'];
include_once 'dbconnect.php';

$id = $_GET['link'];
$res = mysqli_query($con,"SELECT * FROM products WHERE id =$id");
$row = mysqli_fetch_array($res);

if (empty($_GET)) {
    // no data passed by get
	header("Location: index.php");
}



?>


<?php

	if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		$_SESSION['usr_email'] = $row['email'];
   		header("Location:$url");
}
	else {
		$errormsg = "Incorrect Email or Password!!!";
	echo'	<script type="text/javascript">
				$(document).ready(function(){
				$("#myModal").modal("show");
				});
			</script> ';

	}
}
?>

<!DOCTYPE html>
<style>
/.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px<!-- <li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li> -->; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    width: 90%;
	    margin-top: 40px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}* The Modal (background) */

.button{
	font-size: 14px;
    color: #fff;
    background: #3399cc;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: .5em 0;
    outline: none;
}


</style>
<html>
<head>
<title>Single|MySite</title>
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
<?php	if(isset($_SESSION['usr_id'])){
								echo '<input type="hidden" id="userid" name="userid" value="'. $_SESSION['usr_id'] .'" />    ';
								}
						?>
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Singlepage</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<?php

echo  '<div class="products">
		<div class="container">
			<div class="agileinfo_single">

				<div class="col-md-4 agileinfo_single_left">
					<img style="height:300px;width:280px" id="example" src="'.$row['image'].'" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>'.$row['name'].'</h2>

					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>'.$row['description'].'.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">'.'₹'.$row['price'].'</h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
						<form action="" method="post">
												<fieldset>
													<input type="hidden" name="productid" value="'.$row['id'].'">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="'.$row['name'].'">
													<input type="hidden" name="amount" value="'.$row['price'].'">
													<input type="hidden" name="discount_amount" value="0.00">
													<input type="hidden" name="currency_code" value="INR">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">';
				if(isset($_SESSION['usr_id'])){
											echo  '<input type="button" class="button" id="'. $row['id'] .'" onclick="SubmitFormData(this);" value="ADD To CART" />';
				}
										echo	'</fieldset>
											</form>
											<div id="results'. $row['id'] .'">';

											if(!isset($_SESSION['usr_id'])){
													echo '<button type="button" Style="font-size: 14px;color: #fff;background: #3399cc;text-decoration: none;position: relative;border: none; border-radius: 0;width: 100%;text-transform: uppercase;padding: .5em 0;outline: none;	" data-toggle="modal" data-target="#myModal">ADD TO CART</button>';
										}

		echo	'	</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
</div>';
?>


<!-- new -->
<!--
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				<div class="agile_top_brands_grids">
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/14.png"></a>
												<p>Fried-gram</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$35.99 <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/15.png"></a>
												<p>Navaratan-dal</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$30.99 <span>$45.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value="basmati rise">
															<input type="hidden" name="amount" value="30.99">
															<input type="hidden" name="discount_amount" value="1.00">
															<input type="hidden" name="currency_code" value="USD">
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img src="images/16.png" alt=" " class="img-responsive"></a>
												<p>White-peasmatar</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$80.99 <span>$105.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Pepsi soft drink">
														<input type="hidden" name="amount" value="80.00">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/17.png"></a>
												<p>Channa-dal</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$35.99 <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
-->
<!-- //new -->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Anoop 1234 Inkers<span>Contact me.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:anoop@inkers.in">anoop@inkers.in</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
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
	
	
	
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

	  <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div style="padding: 1em 0;" class="login">
		<div class="container">
			<h2>Login Form</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form role="form" action="<?php echo $_SESSION['url']; ?>" method="post" name="loginform">
					<input type="email" placeholder="Email Address" required=" " name="email" >
					<input type="password" placeholder="Password" required=" " name="password" >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login" name="login">
				</form>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
			<h4>For New People</h4>
			<p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
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

<script>
	function SubmitFormData(elem) {
    var name = elem.id;
	var email = $("#userid").val();
    $.post("submit.php", { name: name, email: email },
    function(data) {
	 $("#result"+name).html(data);
	 $("#results"+name).html(data);
	 $('#myForm')[0].reset();
    });
}
</script>	

<!-- //main slider-banner -->

</body>
</html>
