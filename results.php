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
                
                if(isset($_GET['search'])) {
              
                $search_query = $_GET['user_query'];
                    
                $get_pro = "select * from products where product_keywords like '%$search_query%'";
	
	           $run_pro = mysqli_query($con, $get_pro);
            
               $count_query = mysqli_num_rows($run_pro);
                    
                if($count_query==0){
                    echo "<h2 style='padding:20px'>There is no product match your keyword</h2>";
                }
                
                else {
	
		      while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		
		echo "
			
			<div id='single_product'>
				
				<h3>$pro_title</h3>
				<img src='admin_area/product_images/$pro_image' width='180' height='180' />
				
				<p><b>RM $pro_price</b></p>
				
				<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
				<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
			
			</div>
		
		";
		
		}//while statement
                }//else statement
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