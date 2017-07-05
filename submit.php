<?php
  include_once 'dbconnect.php';
 
  $productid = $_POST['name'];
  $userid = $_POST['email'];
  

  if(mysqli_query($con, "INSERT INTO cart(userid,productid) VALUES('" . $userid . "','" . $productid . "')")){
	  echo "<br><span>Added to cart</span>";
  }else{
	  echo "<br><span>Already in cart</span>";
  }
	 

?>
