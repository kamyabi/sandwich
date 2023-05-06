<!DOCTYPE html>
<?php
				require('config.php');
					$id = $_GET['idp'];
					$q= 'SELECT * FROM `products` WHERE `id`='.$id;
			
					$result = mysqli_query($con,$q);
					$record = mysqli_fetch_assoc($result);
						
				
			
			
			
				?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Khalifeh Sandwich | <?php echo $record['title'] ?></title>    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body> 
<?php
	require('header.php');
	?>
<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title"><?php echo $record['title'] ?></h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- product details content area  start -->
    <div class="product-details-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area"><!-- left content area -->
                        <div class="product-details-slider" id="product-details-slider" data-slider-id="1">
                            <div class="single-product-thumb">
                                <img src="assets/img/products/<?php echo $record['main-pic']; ?>" alt="product details image">
                            </div>
                            <div class="single-product-thumb">
                                <img src="assets/img/products/<?php echo $record['pic2']; ?>" alt="product details image">
                            </div>
                            <div class="single-product-thumb">
                                <img src="assets/img/products/<?php echo $record['pic3']; ?>" alt="product details image">
                            </div>
                        </div>
                        <ul class="owl-thumbs product-deails-thumb d-flex" data-slider-id="1">
                            
                            <li class="owl-thumb-item">
                                <img src="assets/img/products/<?php echo $record['main-pic']; ?>" alt="product details thumb">
                            </li>
                            <li class="owl-thumb-item">
                                <img src="assets/img/products/<?php echo $record['pic2']; ?>" alt="product details thumb">
                            </li>
                            <li class="owl-thumb-item">
                                <img src="assets/img/products/<?php echo $record['pic3']; ?>" alt="product details thumb">
                            </li>
                        </ul>
                    </div><!-- //.left content area -->
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area"><!-- right content area -->
                        
                        <div class="bottom-content">
                            <span class="cat"><?php echo $record['cat']; ?></span>
                            <h3 class="title"><?php echo $record['title']; ?></h3>
                            <div class="price-area">
                                <div class="left">
                                        <span class="sprice"><?php echo $record['price']; ?> $</span>
                                </div>
                                
                            </div>
                            
                            <div class="pdescription">
                                <h4 class="title">Overview</h4>
                                <p>
								<?php echo $record['description']; ?>
								</p>

                            </div>
                            <div class="paction">
                                <div class="qty">
                                    <ul>
                                        <li><span class="qtminus"><i class="fas fa-minus"></i></span></li>
                                        <li><span class="qttotal">1</span></li>
                                        <li><span class="qtplus"><i class="fas fa-plus"></i></span></li>
                                    </ul>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="boxed-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //. right content area -->
                </div>
            </div>
        </div>
    </div>
<!-- product details content area end -->
<div class="body-overlay" id="body-overlay"></div>
<!-- cart sidebar area start -->
<?php
	require('cart-side.php');
	require('footer.php');
	?>
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

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

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
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- owl carousel2 thumb -->
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>


</html>