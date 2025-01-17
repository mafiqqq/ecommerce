<?php

//must use this if wanna use session later on to the page
session_start();


include('includes/header.php');

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
<title> Cart </title>

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
				
			
			</ul>
		
		<div id="sidebar">
			<div id="sidebar_title">Brands</div>
			
			<ul id="cats">
				
		
	
			
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
			<a href="index.php" style="color:yellow">Back to Shop</a>
			
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
			
			<form action="" method="post" enctype="multipart/form-data">
				
				<table align="center" width="700" bgcolor="skyblue">
				
				
				<tr align="center">
					<th>Remove</th>
					<th>Product(s)</th>
					<th>Quantity</th>
					<th>Total Price</th>
				</tr>
				
				<?php
				
				$total=0;
		
		global $con;
		
		$ip = getIp();
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price);
		
		while($p_price = mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id'];
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con, $pro_price);
			
			while($pp_price = mysqli_fetch_array($run_pro_price)){
				
				//Format : var name = var name in while fetch from
				//array['the column name in DB']; 
				$product_price = array($pp_price['product_price']);
				
				$product_title = $pp_price['product_title'];
				
				$product_image = $pp_price['product_image'];
				
				$single_price = $pp_price['product_price'];
				
				$values = array_sum($product_price);
				
				$total += $values;

				if (isset($_POST['qty'])) {
					$qty = $_POST['qty']; 
				}
				
				?>
				
				<tr align="center">
					<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"/></td>
					<td><?php echo $product_title; ?><br>
					<img src="admin_area/product_images/
					<?php echo $product_image; ?>" width="60"
					height="60" /></td>
					<td><input type="text" size="4" name="qty" value=""/><td>

					<td><?php echo "RM". $single_price; ?></td>

					
					<?php 
					
					if(isset($_POST['update_cart'])){
					
						global $con;
						
						$ip = getIp();
						
						$qty = $_POST['qty'];
						
						$update_qty = "update cart set qty='$qty' where ip_add='$ip' AND pro_id='$pro_id'";
						
						$run_update_qty = mysqli_query($con, $update_qty);
						
						//This session will hold the value from the text field 
						$_SESSION['qty']=$qty;
						
						$total = $total * (int)$qty;
					}	
					?>
					<td size="4"><?php echo "RM" . $single_price; ?></td>
					
				
				</tr>
				
			<?php }} ?>
				
				<tr float="right"; align="right">
					<td colspan="4"><b>Sub Total : </b></td>
					<td colspan="4"><?php echo "RM" . $total; ?></td>
				</tr>
				
				
				<tr align="center">
					<td colspan="2"><input type="submit" name="remove_cart" value="Remove Cart" /></td>
					<td colspan="2"><input type="submit" name="update_cart" value="Update Cart" /></td>
					<!-- <td><input type="submit" name="continue" value="Continue Shopping" /></td> -->
					<td><button><a href="index.php" style="text-decoration:none; color:black;">Continue Shopping</a></button></td>
					<td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
				</tr>
				
				</table>
				
			
			</form>
			
			<?php 
			
			
				
			global $con;
			
			$ip = getIp();
			
			
			if(isset($_POST['remove_cart'])){
				
				foreach($_POST['remove'] as $remove_id) {
					
					$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
					
					$run_delete = mysqli_query($con, $delete_product);
					
					if($run_delete){
					
					echo "<script>window.open('cart.php','_self')</script>";
					
					}
					
				}
			}
			
			if(isset($_POST['continue'])){
				echo "<script>window.open('index.php','_self')</script>";
		
			}
			
			
			
			
			?>
			
			
			
			
			
			
			
			</div>
		
		</div>
	
<!-- 	
	<div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq </h2>
	
	</div> -->

	
</div>

<!-- Main container ends -->
<?php 
include('includes/footer.php');
?>

</body>




</html>