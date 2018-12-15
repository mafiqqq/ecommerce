<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php");

?>
<html>

<head>
<title> IT Shop </title>

<link rel="stylesheet" href="styles/style.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: content-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
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
		<!-- <div id="content_area">
		<?php cart() ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:14px; line-height:40px">Welcome guest <b style="color:yellow">Shopping Cart -</b>
			Total Items: <?php total_items(); ?>  Total Price: RM<?php total_price(); ?>
			<a href="cart.php" style="color:yellow">Go To Cart</a>
			
			</span>
		
		</div> -->

		<form action="" method="post" enctype="multipart/form-data">
  	<div class="container" align='center'>
    <h1>Register To Book House</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="name"><b>Customer Name:</b></label>
    <input type="text" placeholder="Enter Your Name" name="c_name" required>
	<hr>
    <label for="email"><b>Email :</b></label>
    <input type="text" placeholder="Enter Your Email" name="c_email" required>
	<hr>
    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="c_pass" required>
	<hr>
    <label for="image"><b>Profile image :</b></label>
    <input type="file" name="c_image" required>
    <hr>
    <label for="country"><b>Select Your Country : </b></label>
    <select name="c_country">
						<option>Select a Country</option>
						<option>Afghanistan</option>
						<option>India</option>
						<option>Japan</option>
						<option>Indonesia</option>
						<option>Malaysia</option>
						<option>France</option>
						<option>Pakistan</option>
					</select>
                    <hr>
                    
                    
    <label for="city"><b>City : </b></label>
    <input type="text"name="c_city" required>
    <hr>
    <label for="contact"><b>Contact :</b></label>
    <input type="text" placeholder="Enter Your contact number" name="c_contact" required>
                    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	
  
    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
     
			<!-- <form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="750px">
				
				<tr align="center">
					<td colspan="6"><h2>Create an Account</h2></td>
				</tr>
				
				<tr>
					<td align="right"></td>
					<td></td>
				</tr>
				
				<tr>
					<td align="right">Customer Name : </td>
					<td><input type="text" name="c_name" required /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Email : </td>
					<td><input type="text" name="c_email" required /></td>
				</tr>
				
				
				<tr>
					<td align="right">Customer Password :</td>
					<td><input type="password" name="c_pass" required /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Image :</td>
					<td><input type="file" name="c_image"  /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Country : </td>
					<td>
					<select name="c_country">
						<option>Select a Country</option>
						<option>Afghanistan</option>
						<option>India</option>
						<option>Japan</option>
						<option>Indonesia</option>
						<option>Malaysia</option>
						<option>France</option>
						<option>Pakistan</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td align="right">Customer City :</td>
					<td><input type="text" name="c_city" required /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Contact :</td>
					<td><input type="text" name="c_contact" required /></td>
				</tr>
				
				<tr align="center">
					<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
				</tr>
				
				
				</table>
				
			</form> -->
		
		</div>
	
	
	<div id="footer"> 
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by Mohamed Afiq & Friends </h2>
	
	</div>

	
</div>

<!-- Main container ends -->

</body>
</html>
<?php
	
	if(isset($_POST["register"])){
		
		global $con;
		$ip = getIp();
		
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_country = $_POST['c_country'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		
		
		move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");
		
		
		$insert_c = "insert into customers (customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_image) values ('$ip', '$c_name', '$c_email', '$c_pass', '$c_country', '$c_city', '$c_contact','$c_image')";
		
		if($con -> query($insert_c)){
			echo "<script>window.open('index.php','_self')</script>";
		}
		else {
			echo "error :". $sql . " " . $con->error;
		}

		// $run_c = mysqli_query($con, $insert_c);
		

		// $sel_cart = "select * from cart where ip_add='$ip'";
		
		// $run_cart = mysqli_query($con, $sel_cart);
		
		// $check_cart = mysqli_num_rows($run_cart);
		
		// if($check_cart==0){
		
		// //whenever have session must always include at top
		// $_SESSION['customer_email'] = $c_email;
		
		// echo "<script>alert('Account created')</script>";
		// echo"<script>window.open('customer/index.php','_self')</script>";
			
		// }
		
		// else {
			
		// $_SESSION['customer_email'] = $c_email;
		
		// echo "<script>alert('Account created')</script>";
		// echo"<script>window.open('index.php','_self')</script>";
			
		// }
		
		
		
		
	}
	
?>