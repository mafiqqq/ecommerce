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
</nav