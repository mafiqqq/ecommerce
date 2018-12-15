<?php
include("includes/db.php");
include('includes/header.php');

?>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/small-retina/0/e/6/165796.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

 <body>
 <div class="main_wrapper">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->


  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="all_products.php">Products</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="customer/my_account.php">Account</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="customer_register.php">Sign Up</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="cart.php">Cart</a>
	</li>

	<li class="nav-item">
      <a class="nav-link" href="">Contact</a>
	</li>
</ul>
<ul class = "navbar-nav ml-auto">
	<form class="form-inline" action="/action_page.php" >
    <input class="form-control mr-sm-2" name ="user_query" type="text" placeholder="Search" style ="float:right;">
    <button class="btn btn-success" name = "search" type="submit">Search</button style ="float:right;">
  </form>

  </ul>
</nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form action="/action_page.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" id="email" placeholder="Email address">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="pwd" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>


 <!-- <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>   -->
<!-- 
<div>



	<form method="post" action="">
	
		<table width="500" align="center" bgcolor="skyblue">
		
			<tr align=" center">
				<td><h2>Login or Register to Buy!</h2></td>
			</tr>

			<tr>
			<div class="form-group">
  	<label for="email">Email:</label>
  		<input type="text" name="email" class="form-control" id="usr" required>
			</div>
			
			
		
			</tr>

			<tr>
				<td align="right">Password : </td>
				<td><input type="password" name="pass" placeholder="Enter Password" /></td>
			</tr>
			
			<tr align="center">
				<td colspan="4"><a href="checkout.php?forgot_pass">Forgot Password</a></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="4"><input type="submit" name="login" value="Login" /></td>
			</tr>
			
			
			
			
		</table>
		
		<h2 style="float:left; padding-right:5px;"><a href="customer_register.php" style="text-decoration:none;">Register Here !</a></h2>
	
	</form> -->

	<?php
	
	if(isset($_POST['login'])){
		
		$c_email = $_POST['email'];
		$c_pass= $_POST['pass'];
	
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
	
		$run_c = mysqli_query($con, $sel_c);
		
		$check_customer = mysqli_num_rows($run_c);
		
		if($check_customer==0){
			
		echo "<script>alert('Password or Email is incorrect')</script>";
		exit();	
		}
		
		$ip = getIp();
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart);
		
		$check_cart = mysqli_num_rows($run_cart);
	
		if($check_customer>0 AND $check_cart==0) {
			
		//whenever have session must always include at top
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('LOGIN success')</script>";
		echo"<script>window.open('index.php','_self')</script>";
			
		}
		
		else {
			
			//whenever have session must always include at top
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('LOGIN success')</script>";
		echo"<script>window.open('index.php','_self')</script>";
			
		}
	}
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	

</div>
<?php 
include('includes/footer.php');
?>
