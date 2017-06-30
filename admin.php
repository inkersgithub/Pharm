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
    <ul class="nav nav-tabs" style="margin-left: 25px;margin-right:27px;border-bottom: snow">
        <li class="active"><a style="border-radius: 10px 10px 10px 10px;" data-toggle="tab" href="#sectionA">Products</a></li>
        <li><a style="border-radius: 10px 10px 10px 10px;" data-toggle="tab" href="#sectionB">Orders</a></li>
    </ul>
    <div style="margin-top: 42px;margin-left: 25px;margin-right: 25px;background-color: white;min-height: 700px;" class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
           <div style="min-height: 700px;background-color: antiquewhite;" class="col-md-6 top_brand_left">
			   <div class="containerr">
  					<form action="/action_page.php">
						<h2 style="text-align:center;">ADD PRODUCT</h2>
						<label for="fname">Product Name</label>
    					<input type="text" id="fname" name="firstname" placeholder="Product Name.." required>
						<label for="country">Category</label>
    					<select id="country" name="country">
							<option value="default">Default</option>
							<option value="category2">Category2</option>
      						<option value="category3">Category3</option>
    					</select>
						<label for="subject">Subject</label>
						<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
						<input style="margin-bottom: 25px;" type="file" name="pic" accept="image/*" required>
						<input type="submit" value="Submit">
  					</form>
			   	</div>     
		   </div>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
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