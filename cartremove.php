<?php
include_once 'dbconnect.php';
$removep= $_POST['pid'];
echo "<script type='text/javascript'>alert('$removep');</script>";
mysqli_query($con, "DELETE FROM cart WHERE productid='$removep'");

?>