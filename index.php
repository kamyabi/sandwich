<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Khalifeh Sandwich </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body> 
<!-- navbar area start -->
<?php
	require('header.php');
	?>
<!-- navbar area end -->

<!-- header area start -->
<div class="header-area header-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner "><!-- header inner -->
                    <span class="subtitle">50% OFF</span>
                    <h1 class="title">Seasonal offers</h1>
                    <p class="wow fadeInDown">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
                        <div class="btn-wrapper">
                            <a href="#fp" class="boxed-btn">View</a>
                        </div>
                </div><!-- //. header inner -->
            </div>
        </div>
    </div>
</div>
<!-- header area end -->
<div class="body-overlay" id="body-overlay"></div>

<!-- cart sidebar area start -->
<?php
	require('cart-side.php');
	?>
<!-- cart sidebar area end -->

<!-- new product area start -->
<section class="new-product-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title"><!-- section title --> 
                    <span id="fp" class="subtitle">Sandwich</span>
                    <h2 class="title">special products</h2>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
			<?php
				require('config.php');
			
					$q= 'SELECT * FROM `products` limit 0,2';
			
					$result = mysqli_query($con,$q);
//					$num = mysqli_num_rows($result);
					while ($record = mysqli_fetch_assoc($result)){
						echo'<div class="col-lg-3 col-md-6">
                <div class="single-new-collection-item "><!-- single new collections -->
                    <div class="thumb">
                        <img src="assets/img/products/'.$record['main-pic'].'" alt="new collcetion image">
                        <div class="hover">
                            <a href="#" class="addtocart">Add to Cart</a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="category">'.$record['cat'].'</span>
                        <a href="product-details.php?idp='.$record['id'].'"><h4 class="title">'.$record['title'].'</h4></a>
                        <div class="price"><span class="sprice">'.$record['price'].'$</span></div>
                    </div>
                </div><!-- //. single new collections  -->
            </div>';
					}
			
			
			
				?>
			
			
            
        </div>
    </div>
</section>
<!-- new product area end -->

<!-- free shipping area start -->
<section class="free-shipping-area shipping-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content-area"><!-- left content area -->
                    <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h2 class="title">Free Shipping
                            <br/>throughout the city</h2>
                </div><!-- //. left contetnt area -->
                <div class="right-content-area"><!-- right content aera -->
                    <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">view</a>
                    </div>
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</section>
<!-- free shipping area end -->

<!-- footer area one start -->
<?php
	require('footer.php');
	?>
<!-- footer area one end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>


</html>