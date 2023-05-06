<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khalifeh Sandwich - Checkout</title>
    <!-- favicon -->
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

<!-- navbar area start -->
<?php
	require('header.php');
	?>
<!-- navbar area end -->

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">بررسی و پرداخت</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li>بررسی و پرداخت</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- checkout page content area start -->
<div class="checkout-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="notification-area"><!-- notification area -->
                    بازگشت مشتری؟ <a href="#">برای ورود اینجا کلیک کنید</a>
                </div><!-- //.notification area -->
                <div class="notification-area"><!-- notification area -->
                    کد تخفیف دارید؟ <a href="#">برای وارد کردن کد خود اینجا را کلیک کنید</a>
                </div><!-- //.notification area -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content-area">
                    <h3 class="title">جزئیات صورتحساب</h3>
                    <form action="#" class="checkout-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-element">
                                    <label>نام شما <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="نام شما...">
                                </div>
                                <div class="form-element">
                                    <label>نام شرکت <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="نام شرکت...">
                                </div>
                                <div class="form-element">
                                    <label>آدرس خیابان <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="آدرس خیابان...">
                                </div>
                                <div class="form-element">
                                    <label>استان/شهر  <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="استان/شهر...">
                                </div>
                                <div class="form-element">
                                    <label>تلفن همراه <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="تلفن همراه ...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-element">
                                    <label>نام خانوادگی <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="نام خانوادگی...">
                                </div>
                                <div class="form-element select has-icon">
                                    <label>کشور <span class="base-color">**</span></label>
                                    <select class="input-field select ">
                                        <option value="0">انتخاب کشور</option>
                                        <option value="0">ایران</option>
                                        <option value="0">هند</option>
                                        <option value="0">ترکیه</option>
                                        <option value="0">عراق</option>
                                    </select>
                                    <div class="the-icon">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="form-element">
                                    <label class="blank"></label>
                                    <input type="text" class="input-field" placeholder="دیگر آدرس...">
                                </div>
                                <div class="form-element select has-icon">
                                    <label>شهر  <span class="base-color">**</span></label>
                                    <select class="input-field select">
                                        <option value="0">انتخاب شهر </option>
                                        <option value="0">ارومیه</option>
                                        <option value="0">دهلی</option>
                                        <option value="0">استانبول</option>
                                        <option value="0">سلیمانیه</option>
                                    </select>
                                    <div class="the-icon">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="form-element">
                                    <label>آدرس ایمیل<span class="base-color">**</span></label>
                                    <input type="email" class="input-field" placeholder="آدرس ایمیل...">
                                </div>
                            </div>
                                
                            <div class="col-lg-12">
                                <div class="checkbox-element account">
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-inner">میخواهید حساب کاربری ایجاد کنید؟
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="shipping-details"><!-- shipping details -->
                                    <h3 class="title">جزئیات حمل و نقل</h3>
                                    <div class="checkbox-element">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-inner">به آدرس دیگری می فرستید؟
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-element textarea">
                                        <label>یادداشت های سفارش</label>
                                        <textarea class="input-field textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div><!-- //. shipping details -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <h3 class="title">سفارش شما</h3>
                    <ul class="order-list">
                        <li>
                            <div class="single-order-list heading">
                                محصول <span class="right">جمع</span>
                            </div>
                        </li>
                        <li class="name">
                            <div class="single-order-list">
                               سیستم صوتی بی سیم چند منظوره 360 	× 1 <span class="right">3,299.00 تومان</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                مبلغ پرداختی <span class="right normal">3,299.00 تومان</span>
                            </div>
                        </li>
                        <li class="shipping">
                            <div class="single-order-list title-bold">
                                حمل دریایی
                                <span class="normal-text">آدرس کامل خود را برای مشاهده هزینه حمل و نقل وارد کنید</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                tax <span class="right normal">0</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                Total <span class="right normal">3,299.00 usd</span>
                            </div>
                        </li>
                    </ul>
                    <div class="checkbox-element account">
                        <div class="checkbox-wrapper">
                            <label class="checkbox-inner">Cash payment upon delivery
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>
                    <div class="notify-area">
                    Payment in cash or by credit card
                    </div>
                    <div class="credit-card-area">
                        <div class="left-content">
                            <div class="checkbox-element account">
                                <div class="checkbox-wrapper">
                                    <label class="checkbox-inner">کارت اعتباری (نوار)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li>
                                    <img src="assets/img/payment-logo/01.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/02.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/03.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/04.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/05.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/06.png" alt="payment-logo">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="checkbox-element account">
                        <div class="checkbox-wrapper">
                            <label class="checkbox-inner">I read and accept.<a href="#" class="base-color"> Terms and Conditions  *</a>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="submit-btn"> complete your order </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout page content area end -->

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
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>


</html>