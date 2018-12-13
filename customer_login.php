<?php
include("includes/db.php");

?>
<form action="/action_page.php">
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
</form> 
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
	
	if(isset($_POST['email'])){
		
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
		echo"<script>window.open('customer/my_account.php','_self')</script>";
			
		}
		
		else {
			
			//whenever have session must always include at top
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('LOGIN success')</script>";
		echo"<script>window.open('checkout.php','_self')</script>";
			
		}
	}
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	

</div>