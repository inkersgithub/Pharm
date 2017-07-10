<?php
include_once 'dbconnect.php';
$rt = $_POST['x'];
$rj = $_POST['z'];
$rf = $_POST['email'];
$rk = $_POST['proid'];

mysqli_query($con,"UPDATE cart SET quantity='$rt',mtotal='$rj' WHERE userid='$rf' AND productid='$rk'");

?>