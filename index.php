<?php
define ("TITLE", "Home | Book House"); //This part is for the title (1) go to step 2 at header.php
include('includes/header.php');
?>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>

</style> -->


	<!-- Header -->
	<!-- <div class="header_wrapper"> 
	
		<a href="index.php"><img id="logo" src="images/adidas_blue.png" /></a>
	
	</div> -->
	
	<!-- menubar -->
	<!-- <div class="menubar"> 
		<ul id="menu">
			<li><a href="index.php">Home</li>
			<li><a href="all_products.php">Products</li>
			<li><a href="customer/my_account.php">Account</li>
			<li><a href="customer_register.php">Sign Up</li>
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
	
	<!-- <div class="content_wrapper">
	
		<!- Sidebar -->
        
		<!-- <div id="sidebar">
			<div id="sidebar_title">Categories</div>
			
			<ul id="cats">
				
			<?php getCats(); ?>	
			<?php getCatPro(); ?> 
			
			</ul>
		
		<!-- <div id="sidebar">
			<div id="sidebar_title">Brands</div>
			
			<ul id="cats">
				
			<?php getBrands(); ?>
	
			
			</ul>
			
			
		</div> -->
	
	</div> 

		
		<!- Content area -->
		<div id="content_area">
		<div class="container">
    <h3 class="h3">English's Novel</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://vignette.wikia.nocookie.net/twilightsaga/images/f/f8/Twilight_book_cover_%28second%29.jpg/revision/latest?cb=20100330211533">
                        <img class="pic-2" src="https://stepheniemeyer.com/wp-content/uploads/2016/02/new-moon-book-cover.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
				</ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Twilight Novel</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://www.fluentu.com/blog/english/wp-content/uploads/sites/4/2016/03/best-books-to-learn-english4.jpg">
                        <img class="pic-2" src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781439139288/silent-scream-9781439139288_hr.jpg">
                    </a>
                    <ul class="social">
    
                    	<li><a href="cart.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Silent Scream</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images-na.ssl-images-amazon.com/images/I/51ioMI8LoTL.jpg">
                        <img class="pic-2" src="https://i.ytimg.com/vi/CRidoSJpLG0/maxresdefault.jpg">
                    </a>
                    <ul class="social">
                
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">The Term Sheet</a></h3>
                    <div class="price">$52.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://cdn2.penguin.com.au/covers/original/9780553826098.jpg">
                        <img class="pic-2" src="https://cdn2.penguin.com.au/covers/original/9780143571933.jpg">
                    </a>
                    <ul class="social">
                    
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Richelle Mead</a></h3>
                    <div class="price">$25.00
                        <span>$50.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div><hr><!--use this to separate between row -->

    <!-- Second row for display product-->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://www.fluentu.com/blog/english/wp-content/uploads/sites/4/2016/03/best-books-to-learn-english14.jpg">
                        <img class="pic-2" src="https://images.gr-assets.com/books/1392938677l/20878116.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
				</ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Atlantis Gene</a></h3>
                    <div class="price">$26.00
                        <span>$30.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://prodimage.images-bn.com/pimages/9781250056276_p0_v2_s550x406.jpg">
                        <img class="pic-2" src="https://d17lzgq6gc2tox.cloudfront.net/product/back_cover_image/original/9781616208097_back.jpg?1521259251">
                    </a>
                    <ul class="social">
    
                    	<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">The English Wife</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://www.fluentu.com/blog/english/wp-content/uploads/sites/4/2016/03/best-books-to-learn-english12.jpg">
                        <img class="pic-2" src="https://images-na.ssl-images-amazon.com/images/I/51%2BcoiYn1OL._SX309_BO1,204,203,200_.jpg">
                    </a>
                    <ul class="social">
  
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">The Ocean at the End of the Lane</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://i.pinimg.com/736x/77/f7/7e/77f77ec83754e56c6090fbb7f1a4cb0a--good-horror-movies-scary-movies.jpg">
                        <img class="pic-2" src="https://i0.wp.com/horrorpedia.com/wp-content/uploads/2014/06/soulmate1.jpg?ssl=1">
                    </a>
                    <ul class="social">
                        
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Soulmate</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

		<!-- <?php cart() ?> 
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
	 -->
	

	
</div>

<!-- Main container ends -->


<?php 
include('includes/footer.php');
?>

</body>




</html>