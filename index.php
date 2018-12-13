<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");


?>
<html>

<head>
<title> IT Shop </title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

<!-- Main Container -->
<div class="main_wrapper">

	<!-- Header -->
	<!-- <div class="header_wrapper"> 
	
		<a href="index.php"><img id="logo" src="images/adidas_blue.png" /></a>
	
	</div> -->
	<?php
	include('nav.php');
?>
	<!-- menubar -->
	<!-- <div class="menubar"> 
		<ul id="menu">
			<li><a href="index.php">Home</li>
			<li><a href="all_products.php">Products</li>
			<li><a href="customer/my_account.php">Account</li>
			<li><a href="#">Sign Up</li>
			<li><a href="cart.php">Cart</li>
			<li><a href="#">Contact</li>
		</ul>	
		 -->
		<!-- Method to do form and collect data-->
		<!-- <div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data" >
				
				<input type="text" name="user_query" placeholder="Search" />
				<input type="submit" name="search" value="Search" />
		
			
			</form>
		</div> -->
	
	
	</div>
	<!-- /menubar -->
	
	<div class="content_wrapper">
	
		<!-- Sidebar -->
		<div id="sidebar">
			<div id="sidebar_title">Categories</div>
			
			<ul id="cats">
				
			<?php getCats(); ?>	
			<!-- <?php getCatPro(); ?> -->
			
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
		<?php cart() ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:14px; line-height:40px">
			
			<?php 
			if(isset($_SESSION['customer_email'])){
				echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'> Your</b>";
			}
			else {
				
				echo "<b>Welcome Guest </b>";
			}

			
			
			?>
			
		
			
			<b style="color:yellow">Shopping Cart -</b>
			Total Items: <?php total_items(); ?>  Total Price: RM<?php total_price(); ?>
			<a href="cart.php" style="color:yellow">Go To Cart</a>
			
			<?php
			
			if(!isset($_SESSION['customer_email'])){
				
				echo "<a href='checkout.php' style='color:orange;'>Login</a>";
				
			}
			
			else {
				
				echo "<a href='logout.php' style='color:orange;'>Logout</a>";
				
			}
		
		
			?>
			
			
			
			
			</span>
		
		</div>
     
			<div id="products_box">
			
			<?php getPro(); ?>
			<?php getCatPro(); ?>
			<?php getBrandPro(); ?>
			
			</div>
		
		</div>
	
	
	<div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq </h2>
	
	</div>

	
</div>

<!-- Main container ends -->

</body>




</html>