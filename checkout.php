<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include('includes/header.php');

?>
<html>

<head>
<title> IT Shop </title>

<link rel="stylesheet" href="styles/style.css" media="all" />

</head>

<body>

<!-- Main Container -->
<div class="main_wrapper">

	<!-- Header -->
	<div class="header_wrapper"> 
	
		<a href="index.php"><img id="logo" src="images/adidas_blue.png" /></a>
	
	</div>
	<!-- / header -->
	
	<!-- menubar -->
	<div class="menubar"> 
		<ul id="menu">
			<li><a href="index.php">Home</li>
			<li><a href="all_products.php">Products</li>
			<li><a href="customer/my_account.php">Account</li>
			<li><a href="#">Sign Up</li>
			<li><a href="cart.php">Cart</li>
			<li><a href="#">Contact</li>
		</ul>	
		
		<!-- Method to do form and collect data-->
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
			
			</span>
		
		</div>
     
			<div id="products_box">
			
			<!-- This section is to decide which page to open :
			if NOT isset SESSION c_email go to login 
			else go to payment page 
			$_SESSION holds a value and passed around --> 
			<?php 
			
			if(!isset($_SESSION['customer_email'])){
				
				include("customer_login.php");
				
			}
			else {
				
				include("payment.php");
				
			}
			
			?>
			
			</div>
		
		</div>
	
	
	<!-- <div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq </h2>
	
	</div> -->

	
</div>

<?php 
include('includes/footer.php');
?>
</body>




</html>