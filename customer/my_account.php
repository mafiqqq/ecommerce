<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");



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
			<div id="sidebar_title">My Account :</div>
			
			<ul id="cats">
			<?php
			
			$user = $_SESSION['customer_email'];
			
			$get_img = "select * from customers where customer_email='$user'";
			
			$run_img = mysqli_query($con, $get_img);
			
			$row_img = mysqli_fetch_array($run_img);
			
			$c_image = $row_img['customer_image'];
			
			$c_name = $row_img['customer_name'];
			
			echo "<p style='text-align:center; border:2px; solid:white;'><img src='customer_images/$c_image' width='150' height='150'/></p>";
			
			?>
			<li><a href="my_account.php?my_orders">My Orders</li>
			<li><a href="my_account.php?edit_account">Edit Account</li>
			<li><a href="my_account.php?change_pass">Change Password</li>
			<li><a href="my_account.php?delete_account">Delete Account</li>
		
			</ul>
		
	
		</div>

		
		<!-- Content area -->
		<div id="content_area">
		<?php cart() ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:14px; line-height:40px">
			
			<?php 
			if(isset($_SESSION['customer_email'])){
				echo "<b style='font-size:12px';>Welcome:</b>" . $_SESSION['customer_email'];
			}
			
			?>
			
		
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
			
			
			
			<?php 
			if(!isset($_GET['my_orders'])){
				if(!isset($_GET['edit_account'])){
					if(!isset($_GET['change_pass'])){
						if(!isset($_GET['delete_account'])){
						
			
				echo "
				<h2 style='padding:20px;'>Welcome : $c_name </h2> 
				<b>You can see your orders' progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}}}
			}
			
			?>
			
			
			<?php 
			if(isset($_GET['edit_account'])) {
				include("edit_account.php");
			}
			
			
			?>
			</div>
		
		</div>
	
	</div>
	
	
	<div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq </h2>
	
	</div>

	
</div>

<!-- Main container ends -->

</body>




</html>