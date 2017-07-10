<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
ob_start();
session_start();
include_once 'dbconnect.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['usr_id'])){
header("Location:login.php");	
}
$usr_id = $_SESSION['usr_id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>My Cart|MySite</title>
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
<script type="text/javascript" src="js/easing.js">

</script>
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
	<script>
		var totalprice = 0;
	</script>	

	
<script>
	     window.onload = function() {
         myFunction1();
		 myFunction2();
		 myFunction3();
		 myFunction4();
		 myFunction5();
		 myFunction6();
		 myFunction7();	
		 myFunction8();
		 myFunction9();
		 myFunction10();	
		 myFunction11();
		 myFunction12();	
		 myFunction13();
		 myFunction14();
		 myFunction15();	
			 
   };	
</script>

	
	

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
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
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
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	
	<?php	if(isset($_SESSION['usr_id'])){
								echo '<input type="hidden" id="userid" name="userid" value="'. $_SESSION['usr_id'] .'" />    ';
								}
						?>
	
	
	
	
	
	<div class="checkout">
		<div class="container">
			<?php
			$check = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
			$nop = mysqli_num_rows($check);		
			if(mysqli_num_rows($check) != 0){
						echo '<h2 style="font-size: 1.4em;">Your shopping cart contains: <span>'.$nop.' Products</span></h2>';
					}	
			     ?>   
				
				<div class="checkout-right">
					<table class="timetable_sub">
				
					<?php
					$check = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
					if(mysqli_num_rows($check) == 0){
						echo " <br><br><br><br><h2 align='center'>No Products in Cart</h2><br><br><br><br><br> ";
					}else{	
					echo '<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>

							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>';
					}
					?>
					<?php
					$sql = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
					$row = mysqli_num_rows($sql);
					
					$addid=$row+1;
					$sn=1;
					while ($row = mysqli_fetch_array($sql)){
					
					$pid=$row['productid'];


					$sql2 = mysqli_query($con, "SELECT * FROM products where id = '" . $pid. "'") or die(mysql_error());
					$result = mysqli_num_rows($sql2);
					$result = mysqli_fetch_array($sql2);


			echo    '<tr id="rem'.$row['productid'].'" class="rem1">
						<td class="invert">'.$sn.'</td>
						<td class="invert-image"><a href="single.html"><img src="'.$result['image'].'" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							
							 <div class="quantity">
								<div class="quantity-select">
								<input type="hidden" id="sn'.$sn.'"name="add" value="'.$result['price'].'">
									<select id="mySelect'.$sn.'" onchange="myFunction'.$sn.'()">
										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
										<option value="5">5</option>
  										<option value="6">6</option>
  										<option value="7">7</option>
  										<option value="8">8</option>
										<option value="9">9</option>
  										<option value="10">10</option>
  										<option value="11">11</option>
  										<option value="12">12</option>
									</select>
								</div>
							</div>
						</td>
						<td class="invert">'.$result['name'].'</td>
						<p id="demo'.$row['productid'].'"></p>
						<td class="invert" id="miniprice'.$result['price'].'" >₹'.$result['price'].'</td>
						<td class="invert">
							<div class="rem">
							
								
								
								
								<form action="" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button type="submit" name='.$row['productid'].' value="X"><i>X</i></button>
								</form>'; ?>
					
					<?php
								if(isset($_POST[$row['productid']])){
									mysqli_query($con, "DELETE FROM cart WHERE productid='".$row['productid']."' AND userid='".$usr_id."'");
									header('Location: cart.php');
								}
							?>	
							
							
						<?php	
							
								
						echo		'<script>
									function myFunction'.$sn.'() {
    								var x = document.getElementById("mySelect'.$sn.'").value;
									var y = '.$result['price'].';
									var proid = '.$row['productid'].';
									var email = $("#userid").val();
									var z = x * y;
									document.getElementById("print'.$sn.'").innerHTML = z;
									document.getElementById("anoop'.$sn.'").innerHTML = z;
									add();
									$.post("quantityadd.php", { x: x, email: email, proid: proid, z: z },
									function(data) {
	 								$("#results").html(data);
	 								});
							}
							</script>
							</div>
						</td>
					</tr>';
							
					$sn++;

					}
					?>
					
					
					<?php
					   		
					
			           echo 	'<script>
									function add(){
									totalprice = 0;
								    for(i=1;i<'.$addid.';i++){
									var x = document.getElementById("anoop"+i).innerHTML;	
									var value = parseInt(x,10);
									totalprice = totalprice+ value;
					   				document.getElementById("total").innerHTML = totalprice;
					   						
					   				   }
									   
									}
								</script>';
				
				
					?>
					
					
					
					
					
					
					
					
				</table>
			</div>
			<div class="checkout-left">
				<div class="checkout-left-basket">
					<?php
					if(mysqli_num_rows($check) != 0){
					 echo '<h4>Continue to basket</h4>';
					}
					?>
					<ul>


						<?php

						$sql = mysqli_query($con, "SELECT productid FROM cart WHERE userid = '" . $usr_id. "'");
						$row = mysqli_num_rows($sql);
						$sn=1;
						$jn=1;
						while ($row = mysqli_fetch_array($sql)){
						$pid=$row['productid'];
						$sql2 = mysqli_query($con, "SELECT * FROM products where id = '" . $pid. "'") or die(mysql_error());
						$result = mysqli_num_rows($sql2);
						$result = mysqli_fetch_array($sql2);


					    echo	'<li id="rem2'.$row['productid'].'">'.$result['name'].'<i></i> <span id="print'.$sn.'">'.$result['price'].'</span></li>
						<p hidden id="anoop'.$jn.'"></p>';
						$jn++;
						$sn++;
						}   ?>
						
						<?php
							if(mysqli_num_rows($check) != 0){
					 		echo '<li id="" class="checkout-total" style="font-size: 1em;color: #212121;">Total <i></i><span id="total"></span ></li>';
						}
						?>
						
						
						
					</ul>
				</div>

				<div class="clearfix"> </div>
			</div>
			<div style="text-align:center;">
						<?php
							if(mysqli_num_rows($check) != 0){
					 		echo '<input style="margin-top: 45px;background-color: #272626;color: white;border-color: black;width: 200px;height: 35px;font-size: medium;" type="submit" name="checkout" value="Confirm & Checkout">';
							
										}
						?>
			</div>
		</div>
	</div>
<!-- //checkout -->
	

	
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


<!-- main slider-banner -->


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
