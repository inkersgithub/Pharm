<?php

include_once 'dbconnect.php';
if(isset($_POST['upload'])){
	$file=$_FILES['pic'];
	$filename=$_FILES['pic']['name'];
  $filetmpname=$_FILES['pic']['tmp_name'];
  $filesize=$_FILES['pic']['size'];
  $fileerror=$_FILES['pic']['error'];

	$description = mysqli_real_escape_string($con, $_POST['description']);
	$category = mysqli_real_escape_string($con, $_POST['category']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
  if($description==""){
    $description = "No Description";
	}

	$temp=explode('.',$filename);
	$fileext=strtolower(end($temp));
	if($fileerror === 0){
  	if($filesize < 100000){
      $filenewname = uniqid('',true).".".$fileext;
      if(!is_dir('uploads/'.$category)) {
      	mkdir('uploads/'.$category, 0777, true);
      }
      $path = 'uploads/'.$category.'/'.$filenewname;
      if(move_uploaded_file($filetmpname,$path)){
      	if(mysqli_query($con,"INSERT INTO products(name,cname,description,price,image) VALUES('" . $name . "', '" . $category . "', '" . $description . "', '" . $price . "', '" . $path . "')")){
					$pmsg = "Product added successfully";
				}
      }
    }
    else {
    	$errormsg = "Your file size is greater than 100K";
    }
  }
  else {
  	$errormsg = "Error uploading file.Inconvenience regretted.";
  }
}

if (isset($_POST['addcategory'])) {
	$catname = mysqli_real_escape_string($con, $_POST['catname']);
	if(mysqli_query($con, "INSERT INTO category(cname) VALUES('" . $catname . "')")){
		$cmsg = "Category Created";
	}else{
		$cmsg = "Already Exist";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Dynamic Tabs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>

<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.containerr {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	margin-top: 37px;
}
</style>

</head>
<body background="images/admin.jpg">

<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left" style="text-align: center;">
			<h1><a style="font-family: -webkit-pictograph;color: #ffffff;" href="index.php">ADMIN PANEL</a></h1>
		</div>
		</div>
</div>
<div style="margin-top:10px">
<div class="bs-example">
	<div style="background-color: rgb(242, 242, 242);margin-left: 25px;min-height: 44px;margin-right: 25px;" >
    <ul class="nav nav-tabs" style="margin-left: 25px;margin-right:27px;border-bottom: snow">
        <li class="active"><a style="border-radius: 10px 10px 10px 10px;" data-toggle="tab" href="#sectionA">Products</a></li>
        <li><a  style="border-radius: 10px 10px 10px 10px;color:" data-toggle="tab" href="#sectionB">Orders</a></li>
    </ul>
	</div>
    <div style="margin-top: 42px;margin-left: 25px;margin-right: 25px;background-color: white;min-height: 820px;" class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
           <div style="min-height: 820px;background-color: antiquewhite;" class="col-md-6 top_brand_left">
			   <div class="containerr">
  					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="requeststatus" enctype="multipart/form-data">
						<h2 style="text-align:center;">ADD PRODUCT</h2>
						<label for="name">Product Name</label>
						<input type="text" id="name" name="name" placeholder="Product Name.." required>
						<label for="price">Product Price</label>
						<br>
	    				<input style="padding: 8px;border-radius: 4px;margin-top: 7px;" type="number" id="price" name="price" placeholder="Product Price.." required>
						<br>
						<label style="    margin-top: 15px;" for="cat">Category</label>
    					<select id="cat" name="category">
								<?php

									$sql = mysqli_query($con, "SELECT * FROM category");
									$row = mysqli_num_rows($sql);
									while ($row = mysqli_fetch_array($sql)){
									echo 	'<option value="'.$row['id'].'"><i class="fa fa-arrow-right" aria-hidden="true"></i>'.$row['cname'].'</option>';
												}
								?>
    					</select>
						<label for="subject">Description</label>
						<textarea id="subject" name="description" placeholder="Write something.." style="height:200px" required></textarea>
						<label for="pic">Product Image</label>
						<input style="margin-bottom: 25px;" id="pic" type="file" name="pic" accept="image/*" required>
						<input type="submit" value="Submit" name="upload">
  					</form>
				   <span><?php if (isset($pmsg)) { echo $pmsg; } ?></span>
			   	</div>
		   </div>
		   <div style="min-height: 820px;background-color: antiquewhite;" class="col-md-6 top_brand_left">
			   <div class="containerr">
			   	   <div class="row">
					   <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addCategory">
						<h2 style="text-align:center;">ADD CATEGORY</h2>
						<label style="margin-left: 15px;" for="name">Category NAme</label>
						<input style="width: 95%;margin-left: 14px;" type="text" id="name" name="catname" placeholder="Category Name.." required>
						<input style="margin-left: 14px;" type="submit" value="Submit" name="addcategory">
  					</form>
					<span style="margin-left:15px"><?php if (isset($cmsg)) { echo $cmsg; } ?></span>
				   </div>
				   <div class="row">

				   </div>
			   </div>
		   </div>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div id="dropdown1" class="tab-pane fade">
            <h3>Dropdown 1</h3>
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
        </div>
        <div id="dropdown2" class="tab-pane fade">
            <h3>Dropdown 2</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
</div>
</body>
</html>
