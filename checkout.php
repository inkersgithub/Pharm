<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include_once 'dbconnect.php';
session_start();
if(!isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}
$finaltotal = 0;
$usr_id = $_SESSION['usr_id'];
$sql = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
$row = mysqli_num_rows($sql);
if($row==0){
	header("Location: index.php");
}else{
	$sql = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
	while ($row = mysqli_fetch_array($sql)) {
	
		$finaltotal = $finaltotal + $row['mtotal'];
	}
}



if (isset($_POST['Add'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$address1 = mysqli_real_escape_string($con, $_POST['address1']);
	$address2 = mysqli_real_escape_string($con, $_POST['address2']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$state = mysqli_real_escape_string($con, $_POST['state']);
	$pincode = mysqli_real_escape_string($con, $_POST['pincode']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);

	
	mysqli_query($con, "INSERT INTO address(userid,name,address1,address2,city,state,pincode,mobile) VALUES('" . $_SESSION['usr_id'] . "', '" . $name . "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $state . "', '" . $pincode . "', '" . $mobile . "')");
	
	
}
 
?>

<!DOCTYPE html>
<style>
.roundedTwo {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    position: absolute;
    top: 4px;
    left: 4px;
    cursor: pointer;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 50px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 5px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    } 
  }   
}

</style>
<html>
<head>
<title>Login|MySite</title>
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
					<li><a href="registered.php"> Create Account </a></li>

				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">

			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">MYSITELOGO</a></h1>
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
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Place Order</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<div class="container" style="min-height:880px">
  <div class="row">
    <div class="col-sm-4">
     <div >
		 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="placeorder">
	  <div class="login-form-grids" style="width: 100%; padding: 3em; background: #F7F7F9; margin: 2em auto 0;">
				<h5 style="text-align:center">Select address</h5>
		  	<?php	
		$sql = mysqli_query($con, "SELECT * FROM address where userid ='".$_SESSION['usr_id']."' ");
		  $i=1;
		while ($row = mysqli_fetch_array($sql)){
	  echo '<div>
			<b>'.$row['name'].' </b><br>
			'.$row['address1'].' <br>
			'.$row['address2'].' <br>
			'.$row['city'].' <br>
			'.$row['state'].' <br>
			'.$row['pincode'].' <br>
			Mob -'.$row['mobile'].' <br>
			<div style="padding-top: 10px;">';
		    if($i==1){
			echo '<input type="radio" name="address" value="'.$row['id'].'" checked><span style="color: #3999cc;">-Select Address</span>';
			}else{
			echo '<input type="radio" name="address" value="'.$row['id'].'"><span style="color: #3999cc;">-Select Address</span>';
			}
		echo '</div>
		   </div>
		   <p style="padding-bottom: 30px";></p>';
			$i++;
		}
   ?>
				
			</div>
	  </div>
	 </div>
    <div class="col-sm-8">
		<div class="login-form-grids" style="width: 100%; padding: 3em; background: #F7F7F9; margin: 2em auto 0;">
				
				     <h3 style="text-align:center">Total amount to Pay :<?php $finaltotal ?></h3>
					
					<input type="submit" id="submit" name="placeorder" value="PLACE ORDER">
				</form>
			</div>
     
			
			<div class="login-form-grids" style="width: 100%; padding: 3em; background: #F7F7F9; margin: 2em auto 0;">
				<h5 style="text-align:center">add address</h5>
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
					<input name="name" type="text" placeholder="First Name..." required=" " >
					<input name="address1" style="margin-top: 15px;" type="text" placeholder="Address Line 1..." required=" " >
					<input name="address2" style="margin-top: 15px;" type="text" placeholder="Address Line 2..." required=" " >
					<input name="city" style="margin-top: 15px;" type="text" placeholder="City..." required=" " >
					<input name="state" style="margin-top: 15px;" type="text" placeholder="State..." required=" " >
					<input name="pincode" style="margin-top: 15px;" type="text" pattern="[0-9]{6}" placeholder="Pincode..." required=" " >
					<input name="mobile" style="margin-top: 15px;" type="text" pattern="[789][0-9]{9}" placeholder="Mobile No..." required=" " >
					
					<input type="submit" id="submit" name="Add" value="Add">
				</form>
			</div>
			
    </div>
  </div>
</div>	
	
	
	
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
