<!DOCTYPE>
<?php
include("functions/functions.php");


?>
<html>

<head>
<title> Yo </title>

<link rel="stylesheet" href="styles/style.css" media="all" />

</head>

<body>

<!-- Main Container -->
<div class="main_wrapper">

	<!-- Header -->
	<div class="header_wrapper"> 
	
		<img id="logo" src="images/adidas_blue.png" />
	
	</div>
	<!-- / header -->
	
	<!-- menubar -->
	<div class="menubar"> 
		<ul id="menu">
			<li><a href="#">Home</li>
			<li><a href="#">Products</li>
			<li><a href="#">Account</li>
			<li><a href="#">Sign Up</li>
			<li><a href="#">Cart</li>
			<li><a href="#">Contact</li>
		</ul>	
	
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data" >
				
				<input type="text" name="user_query" placeholder="Search" />
				<input type="submit" name="search" value="Search" />
		
			
			</form>
		</div>
	
	
	</div>
	<!-- /menubar -->
	
	<div class="content_wrapper">
	
		<!-- Sidebar -->
		<div id="sidebar">
			<div id="sidebar_title">Categories</div>
			
			<ul id="cats">
				
			<?php getCats(); ?>	
			
			</ul>
		
		<div id="sidebar">
			<div id="sidebar_title">Brands</div>
			
			<ul id="cats">
				
			<?php getBrands(); ?>
			
			</ul>
			
			
		</div>
	
	</div>
	
		
		<!-- Content area -->
		<div id="content_area">
		
		<div id="shopping_cart">
			<span style="float:right; font-size:14px; line-height:40px">Welcome guest <b style="color:yellow">Shopping Cart -</b>
			Total Items: Total Price:
			<a href="cart.php" style="color:yellow">Go To Cart</a>
			
			</span>
		
		</div>

			<div id="products_box">
			
			<?php
			if(isset($_GET['pro_id'])){
				
			$product_id = $_GET['pro_id'];
			global $con;
	
			$get_pro = "select * from products where product_id='$product_id'";
	
			$run_pro = mysqli_query($con, $get_pro);
	
			while($row_pro=mysqli_fetch_array($run_pro)){
		
			$pro_id = $row_pro['product_id'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$pro_desc = $row_pro['product_desc'];
		
			echo "
			
			<div id='single_product'>
				
				<h3>$pro_title</h3>
				<img src='admin_area/product_images/$pro_image' width='400' height='300' />
				
				<p><b>RM $pro_price</b></p>
				<p style='float:right'> $pro_desc </p>
				
				<a href='index.php' style='float:left'>Go Back</a>
				<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
			
			</div>
		
			";
			}
			}
			?>
			
			
			</div>
		
		</div>
	
	
	<div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq </h2>
	
	</div>

	
</div>

<!-- Main container ends -->

</body>




</html>