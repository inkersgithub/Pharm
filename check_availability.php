<?php
require_once("dbconnect.php");


if(!empty($_POST["email"])) {
  $result = mysqli_query($con, "SELECT count(*) FROM users WHERE email='" . $_POST["email"] . "'");
  $row = mysqli_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span style='color:red' class='status-not-available'> Email Already Exist.</span>";
  }else{
      echo "<span style='color:green' class='status-available'> Available.</span>";
  }
}
?> 
