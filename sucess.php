<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include_once 'dbconnect.php';
session_start();
$url = $_SESSION['url'];

if($url!="/Pharm/checkout.php"){
	header("Location:index.php");
}
?>

<!DOCTYPE html>

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
<style>
.center {
    margin: auto;
    width: 50%;
	margin-top: 60px;
   
}	
img {
    display: block;
    margin: auto;
    width: 40%;
}
</style>
<body>


	<div class="logo_products" style="margin-top:40px">
		<div class="container">
		<div class="w3ls_logo_products_left1">

			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">MYSITELOGO</a></h1>
			</div>
		

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<!-- Bootstrap Core JavaScript -->

	
<div class="center">
<img class="img" align="middle" src="images/shopping.png" alt="Shoppping" style="width:200px;height:250px;">
</div>	

<div style="text-align:center;">
<h1>Your Order Has Been Placed</h1>	
</div>	
<div style="text-align:center;">
<h1>Thank You For Shopping With Us</h1>	
</div>	
<div  style="text-align:center;margin-bottom:40px;margin-top:45px">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>	

</body>
</html>
