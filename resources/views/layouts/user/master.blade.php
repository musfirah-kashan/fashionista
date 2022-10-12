<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>Ekka - Ecommerce HTML Template.</title>
<meta name="keywords"
content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
<meta name="description" content="Best ecommerce html template for single and multi vendor store.">
<meta name="author" content="ashishmaraviya">
<!-- site Favicon -->
<link rel="icon" href="{{asset ('user/assets/images/favicon/favicon.png') }}" sizes="32x32" />
<link rel="apple-touch-icon" href="{{asset ('user/assets/images/favicon/favicon.png') }}" />
<meta name="msapplication-TileImage" content="{{asset ('user/assets/images/favicon/favicon.png') }}" />
<!-- css Icon Font -->
<link rel="stylesheet" href="{{asset ('user/assets/css/vendor/ecicons.min.css')}}" />
<!-- css All Plugins Files -->
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/animate.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/jquery-ui.min.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/countdownTimer.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/slick.min.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/nouislider.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/plugins/bootstrap.css')}}" />
<!-- Main Style -->
<link rel="stylesheet" href="{{asset ('user/assets/css/demo1.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/style.css')}}" />
<link rel="stylesheet" href="{{asset ('user/assets/css/responsive.css')}}" />
<!-- Background css -->
<link rel="stylesheet" id="bg-switcher-css" href="{{asset ('user/assets/css/backgrounds/bg-4.css')}}">
</head>
<body>
<div id="ec-overlay"><span class="loader_img"></span></div>
<!-- Header start  -->
<header class="ec-header">
<!--Ec Header Top Start -->
<div class="header-top">
<div class="container">
<div class="row align-items-center">
<!-- Header Top social Start -->
<div class="col text-left header-top-left d-none d-lg-block">
<div class="header-top-social">
<span class="social-text text-upper">Follow us on:</span>
<ul class="mb-0">
<li class="list-inline-item"><a class="hdr-facebook" href="#"><i
    class="ecicon eci-facebook"></i></a></li>
<li class="list-inline-item"><a class="hdr-twitter" href="#"><i
    class="ecicon eci-twitter"></i></a></li>
<li class="list-inline-item"><a class="hdr-instagram" href="#"><i
    class="ecicon eci-instagram"></i></a></li>
<li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
    class="ecicon eci-linkedin"></i></a></li>
</ul>
</div>
</div>
<!-- Header Top social End -->
<!-- Header Top Message Start -->
<div class="col text-center header-top-center">
<div class="header-top-message text-upper">
<span>Free Shipping</span>This Week Order Over - $75
</div>
</div>
<!-- Header Top Message End -->
<!-- Header Top Language Currency -->
<div class="col header-top-right d-none d-lg-block">
<div class="header-top-lan-curr d-flex justify-content-end">
<!-- Currency Start -->
<div class="header-top-curr dropdown">
<button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
class="ecicon eci-caret-down" aria-hidden="true"></i></button>
<ul class="dropdown-menu">
<li class="active"><a class="dropdown-item" href="#">USD $</a></li>
<li><a class="dropdown-item" href="#">EUR €</a></li>
</ul>
</div>
<!-- Currency End -->
<!-- Language Start -->
<div class="header-top-lan dropdown">
<button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
class="ecicon eci-caret-down" aria-hidden="true"></i></button>
<ul class="dropdown-menu">
<li class="active"><a class="dropdown-item" href="#">English</a></li>
<li><a class="dropdown-item" href="#">Italiano</a></li>
</ul>
</div>
<!-- Language End -->

</div>
</div>
<!-- Header Top Language Currency -->
<!-- Header Top responsive Action -->
<div class="col d-lg-none ">
<div class="ec-header-bottons">
<!-- Header User Start -->
<div class="ec-header-user dropdown">
<button class="dropdown-toggle" data-bs-toggle="dropdown"><img
src="{{asset ('user/assets/images/icons/user.svg') }}" class="svg_img header_svg" alt="" /></button>
<ul class="dropdown-menu dropdown-menu-right">
<li><a class="dropdown-item" href="/register">Register</a></li>
<li><a class="dropdown-item" href="/login">Login</a></li>
</ul>
</div>
<!-- Header User End -->
<!-- Header Cart Start -->
<a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
<div class="header-icon"><img src="{{asset ('user/assets/images/icons/wishlist.svg') }}"
class="svg_img header_svg" alt="" /></div>
<span class="ec-header-count">4</span>
</a>
<!-- Header Cart End -->
<!-- Header Cart Start -->
<a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
<div class="header-icon"><img src="{{asset ('user/assets/images/icons/cart.svg') }}"
class="svg_img header_svg" alt="" /></div>
<span class="ec-header-count cart-count-lable">3</span>
</a>
<!-- Header Cart End -->
<a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
<img src="{{asset ('user/assets/images/icons/category-icon.svg') }}" class="svg_img header_svg"
alt="icon" />
</a>
<!-- Header menu Start -->
<a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
<img src="{{asset ('user/assets/images/icons/menu.svg') }}" class="svg_img header_svg" alt="icon" />
</a>
<!-- Header menu End -->
</div>
</div>
<!-- Header Top responsive Action -->
</div>
</div>
</div>
<!-- Ec Header Top  End -->
<!-- Ec Header Bottom  Start -->
<div class="ec-header-bottom d-none d-lg-block">
<div class="container position-relative">
<div class="row">
<div class="ec-flex">
<!-- Ec Header Logo Start -->
<div class="align-self-center">
<div class="header-logo">
<a href="index-2.html"><img src="{{asset ('user/assets/images/logo/logo.png') }}" alt="Site Logo" /><img
class="dark-logo" src="{{asset ('user/assets/images/logo/dark-logo.png') }}" alt="Site Logo"
style="display: none;" /></a>
</div>
</div>
<!-- Ec Header Logo End -->
<!-- Ec Header Search Start -->
<div class="align-self-center">
<div class="header-search">
<form class="ec-btn-group-form" action="#">
<input class="form-control ec-search-bar" placeholder="Search products..."
type="text">
<button class="submit" type="submit"><img src="{{asset ('user/assets/images/icons/search.svg') }}"
    class="svg_img header_svg" alt="" /></button>
</form>
</div>
</div>
<!-- Ec Header Search End -->

<!-- Ec Header Button Start -->
<div class="align-self-center">
<div class="ec-header-bottons">

<!-- Header User Start -->
<div class="ec-header-user dropdown">
<button class="dropdown-toggle" data-bs-toggle="dropdown"><img
    src="{{asset ('user/assets/images/icons/user.svg') }}" class="svg_img header_svg"
    alt="" /></button>
<ul class="dropdown-menu dropdown-menu-right">
<li><a class="dropdown-item" href="/register">Register</a></li>
<li><a class="dropdown-item" href="/login">Login</a></li>
</ul>
</div>
<!-- Header User End -->
<!-- Header wishlist Start -->
<a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
<div class="header-icon"><img src="{{asset ('user/assets/images/icons/wishlist.svg') }}"
    class="svg_img header_svg" alt="" /></div>
<span class="ec-header-count">4</span>
</a>
<!-- Header wishlist End -->
<!-- Header Cart Start -->
<a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
<div class="header-icon"><img src="{{asset ('user/assets/images/icons/cart.svg') }}"
    class="svg_img header_svg" alt="" /></div>
<span class="ec-header-count cart-count-lable">3</span>
</a>
<!-- Header Cart End -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Ec Header Button End -->
<!-- Header responsive Bottom  Start -->
<div class="ec-header-bottom d-lg-none">
<div class="container position-relative">
<div class="row ">

<!-- Ec Header Logo Start -->
<div class="col">
<div class="header-logo">
<a href="index-2.html"><img src="{{asset ('user/assets/images/logo/logo.png') }}" alt="Site Logo" /><img
class="dark-logo" src="{{asset ('user/assets/images/logo/dark-logo.png') }}" alt="Site Logo"
style="display: none;" /></a>
</div>
</div>
<!-- Ec Header Logo End -->
<!-- Ec Header Search Start -->
<div class="col">
<div class="header-search">
<form class="ec-btn-group-form" action="#">
<input class="form-control ec-search-bar" placeholder="Search products..." type="text">
<button class="submit" type="submit"><img src="{{asset ('user/assets/images/icons/search.svg') }}"
class="svg_img header_svg" alt="icon" /></button>
</form>
</div>
</div>
<!-- Ec Header Search End -->
</div>
</div>
</div>
<!-- Header responsive Bottom  End -->
<!-- EC Main Menu Start -->
<div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
<div class="container position-relative">
<div class="row">
<div class="col-md-12 align-self-center">
<div class="ec-main-menu">
<a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
<img src="{{asset ('user/assets/images/icons/category-icon.svg') }}" class="svg_img header_svg"
alt="icon" />
</a>
<ul>
<li><a href="/index">Home</a></li>
<li class="dropdown"><a href="javascript:void(0)">Shop</a>
<ul class="sub-menu">
@foreach($show as $dd)
<li><a href="#">{{$dd->name}}</a></li>
@endforeach
</ul>
</li>
<li><a href="about">About Us</a></li>
<li><a href="contact">Contact Us</a></li>
<li><a href="faqs">FAQ</a></li>
<li><a href="productadd">Abaya</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Ec Main Menu End -->
<!-- ekka Mobile Menu Start -->
<div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
<div class="ec-menu-title">
<span class="menu_title">My Menu</span>
<button class="ec-close">×</button>
</div>
<div class="ec-menu-inner">
<div class="ec-menu-content">
<ul>
<li><a href="/index">Home</a></li>
<li class="dropdown"><a href="javascript:void(0)">Shop</a>
<ul class="sub-menu">
@foreach($show as $dd)
<li><a href="#">{{$dd->name}}</a></li>
@endforeach
</ul>
</li>
<li><a href="about">About Us</a></li>
<li><a href="contact">Contact Us</a></li>
<li><a href="faqs">FAQ</a></li>
<li><a href="productadd">Abaya</a></li>
</ul>
</div>
<div class="header-res-lan-curr">
<div class="header-top-lan-curr">
<!-- Language Start -->
<div class="header-top-lan dropdown">
<button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
class="ecicon eci-caret-down" aria-hidden="true"></i></button>
<ul class="dropdown-menu">
<li class="active"><a class="dropdown-item" href="#">English</a></li>
<li><a class="dropdown-item" href="#">Italiano</a></li>
</ul>
</div>
<!-- Language End -->
<!-- Currency Start -->
<div class="header-top-curr dropdown">
<button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
class="ecicon eci-caret-down" aria-hidden="true"></i></button>
<ul class="dropdown-menu">
<li class="active"><a class="dropdown-item" href="#">USD $</a></li>
<li><a class="dropdown-item" href="#">EUR €</a></li>
</ul>
</div>
<!-- Currency End -->
</div>
<!-- Social Start -->
<div class="header-res-social">
<div class="header-top-social">
<ul class="mb-0">
<li class="list-inline-item"><a class="hdr-facebook" href="#"><i
    class="ecicon eci-facebook"></i></a></li>
<li class="list-inline-item"><a class="hdr-twitter" href="#"><i
    class="ecicon eci-twitter"></i></a></li>
<li class="list-inline-item"><a class="hdr-instagram" href="#"><i
    class="ecicon eci-instagram"></i></a></li>
<li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
    class="ecicon eci-linkedin"></i></a></li>
</ul>
</div>
</div>
<!-- Social End -->
</div>
</div>
</div>
<!-- ekka mobile Menu End -->
</header>
<!-- Header End  -->

<!-- ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
<div class="ec-cart-inner">
<div class="ec-cart-top">
<div class="ec-cart-title">
<span class="cart_title">My Cart</span>
<button class="ec-close">×</button>
</div>
<ul class="eccart-pro-items">
<li>
<a href="product-left-sidebar.html" class="sidekka_pro_img"><img
src="{{asset ('user/assets/images/product-image/6_1.jpg') }}" alt="product"></a>
<div class="ec-pro-content">
<a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
<span class="cart-price"><span>$76.00</span> x 1</span>
<div class="qty-plus-minus">
<input class="qty-input" type="text" name="ec_qtybtn" value="1" />
</div>
<a href="javascript:void(0)" class="remove">×</a>
</div>
</li>
<li>
<a href="product-left-sidebar.html" class="sidekka_pro_img"><img
src="{{asset ('user/assets/images/product-image/12_1.jpg') }}" alt="product"></a>
<div class="ec-pro-content">
<a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
<span class="cart-price"><span>$64.00</span> x 1</span>
<div class="qty-plus-minus">
<input class="qty-input" type="text" name="ec_qtybtn" value="1" />
</div>
<a href="javascript:void(0)" class="remove">×</a>
</div>
</li>
<li>
<a href="product-left-sidebar.html" class="sidekka_pro_img"><img
src="{{asset ('user/assets/images/product-image/3_1.jpg') }}" alt="product"></a>
<div class="ec-pro-content">
<a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
<span class="cart-price"><span>$59.00</span> x 1</span>
<div class="qty-plus-minus">
<input class="qty-input" type="text" name="ec_qtybtn" value="1" />
</div>
<a href="javascript:void(0)" class="remove">×</a>
</div>
</li>
</ul>
</div>
<div class="ec-cart-bottom">
<div class="cart-sub-total">
<table class="table cart-table">
<tbody>`
<tr>
<td class="text-left">Sub-Total :</td>
<td class="text-right">$300.00</td>
</tr>
<tr>
<td class="text-left">VAT (20%) :</td>
<td class="text-right">$60.00</td>
</tr>
<tr>
<td class="text-left">Total :</td>
<td class="text-right primary-color">$360.00</td>
</tr>
</tbody>
</table>
</div>
<div class="cart_btn">
<a href="cart.html" class="btn btn-primary">View Cart</a>
<a href="checkout.html" class="btn btn-secondary">Checkout</a>
</div>
</div>
</div>
</div>
<!-- ekka Cart End -->

@yield('content')


<!-- Footer Start -->
<footer class="ec-footer section-space-mt">
<div class="footer-container">
<div class="footer-offer">
<div class="container">
<div class="row">
<div class="text-center footer-off-msg">
<span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
Detail</a>
</div>
</div>
</div>
</div>
<div class="footer-top section-space-footer-p">
<div class="container">
<div class="row">
<div class="col-sm-12 col-lg-3 ec-footer-contact">
<div class="ec-footer-widget">
<div class="ec-footer-logo"><a href="#"><img src="{{asset ('user/assets/images/logo/footer-logo.png') }}"
    alt=""><img class="dark-footer-logo" src="{{asset ('user/assets/images/logo/dark-logo.png') }}"
    alt="Site Logo" style="display: none;" /></a></div>
 <a href="contact"> <h4 class="ec-footer-heading">Contact us</h4></a>
<div class="ec-footer-links">
<ul class="align-items-center">
<li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
<li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
        0123 456 789</a></li>
<li class="ec-footer-link"><span>Email:</span><a
        href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-2 ec-footer-info">
<div class="ec-footer-widget">
<h4 class="ec-footer-heading">Information</h4>
<div class="ec-footer-links">
<ul class="align-items-center">
<li class="ec-footer-link"><a href="about-us.html">About us</a></li>
<li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
<li class="ec-footer-link"><a href="track-order.html">Delivery Information</a>
</li>
<li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-2 ec-footer-account">
<div class="ec-footer-widget">
<h4 class="ec-footer-heading">Account</h4>
<div class="ec-footer-links">
<ul class="align-items-center">
<li class="ec-footer-link"><a href="user-profile.html">My Account</a></li>
<li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
<li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
<li class="ec-footer-link"><a href="offer.html">Specials</a></li>
</ul>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-2 ec-footer-service">
<div class="ec-footer-widget">
<h4 class="ec-footer-heading">Services</h4>
<div class="ec-footer-links">
<ul class="align-items-center">
<li class="ec-footer-link"><a href="track-order.html">Discount Returns</a></li>
<li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy </a>
</li>
<li class="ec-footer-link"><a href="terms-condition.html">Customer Service</a>
</li>
<li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-3 ec-footer-news">
<div class="ec-footer-widget">
<h4 class="ec-footer-heading">Newsletter</h4>
<div class="ec-footer-links">
<ul class="align-items-center">
<li class="ec-footer-link">Get instant updates about our new products and
    special promos!</li>
</ul>
<div class="ec-subscribe-form">
<form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
    action="#">
    <div id="ec_news_signup" class="ec-form">
        <input class="ec-email" type="email" required=""
            placeholder="Enter your email here..." name="ec-email" value="" />
        <button id="ec-news-btn" class="button btn-primary" type="submit"
            name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                aria-hidden="true"></i></button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row align-items-center">
<!-- Footer social Start -->
<div class="col text-left footer-bottom-left">
<div class="footer-bottom-social">
<span class="social-text text-upper">Follow us on:</span>
<ul class="mb-0">
<li class="list-inline-item"><a class="hdr-facebook" href="#"><i
        class="ecicon eci-facebook"></i></a></li>
<li class="list-inline-item"><a class="hdr-twitter" href="#"><i
        class="ecicon eci-twitter"></i></a></li>
<li class="list-inline-item"><a class="hdr-instagram" href="#"><i
        class="ecicon eci-instagram"></i></a></li>
<li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
        class="ecicon eci-linkedin"></i></a></li>
</ul>
</div>
</div>
<!-- Footer social End -->
<!-- Footer Copyright Start -->
<div class="col text-center footer-copy">
<div class="footer-bottom-copy ">
<div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
href="#">ekka<span>.</span></a>. All Rights Reserved</div>
</div>
</div>
<!-- Footer Copyright End -->
<!-- Footer payment -->
<div class="col footer-bottom-right">
<div class="footer-bottom-payment d-flex justify-content-end">
<div class="payment-link">
<img src="{{asset ('user/assets/images/icons/payment.png') }}" alt="">
</div>

</div>
</div>
<!-- Footer payment -->
</div>
</div>
</div>
</div>
</footer>
<!-- Footer Area End -->

<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="modal-body">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12">
<!-- Swiper -->
<div class="qty-product-cover">
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_1.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_2.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_3.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_4.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_5.jpg') }}" alt="">
</div>
</div>
<div class="qty-nav-thumb">
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_1.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_2.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_3.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_4.jpg') }}" alt="">
</div>
<div class="qty-slide">
<img class="img-responsive" src="{{asset ('user/assets/images/product-image/3_5.jpg') }}" alt="">
</div>
</div>
</div>
<div class="col-md-7 col-sm-12 col-xs-12">
<div class="quickview-pro-content">
<h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
women</a>
</h5>
<div class="ec-quickview-rating">
<i class="ecicon eci-star fill"></i>
<i class="ecicon eci-star fill"></i>
<i class="ecicon eci-star fill"></i>
<i class="ecicon eci-star fill"></i>
<i class="ecicon eci-star"></i>
</div>

<div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s,</div>
<div class="ec-quickview-price">
<span class="old-price">$100.00</span>
<span class="new-price">$80.00</span>
</div>

<div class="ec-pro-variation">
<div class="ec-pro-variation-inner ec-pro-variation-color">
<span>Color</span>
<div class="ec-pro-color">
    <ul class="ec-opt-swatch">
        <li><span style="background-color:#ebbf60;"></span></li>
        <li><span style="background-color:#75e3ff;"></span></li>
        <li><span style="background-color:#11f7d8;"></span></li>
        <li><span style="background-color:#acff7c;"></span></li>
        <li><span style="background-color:#e996fa;"></span></li>
    </ul>
</div>
</div>
<div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
<span>Size</span>
<div class="ec-pro-variation-content">
    <ul class="ec-opt-size">
        <li class="active"><a href="#" class="ec-opt-sz"
                data-tooltip="Small">S</a></li>
        <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
        <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
        <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
    </ul>
</div>
</div>
</div>
<div class="ec-quickview-qty">
<div class="qty-plus-minus">
<input class="qty-input" type="text" name="ec_qtybtn" value="1" />
</div>
<div class="ec-quickview-cart ">
<button class="btn btn-primary"><img src="{{asset ('user/assets/images/icons/cart.svg') }}"
        class="svg_img pro_svg" alt="" /> Add To Cart</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal end -->



<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
<div class="container">
<div class="ec-nav-panel">
<div class="ec-nav-panel-icons">
<a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
src="{{asset ('user/assets/images/icons/menu.svg') }}" class="svg_img header_svg" alt="icon" /></a>
</div>
<div class="ec-nav-panel-icons">
<a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
src="{{asset ('user/assets/images/icons/cart.svg') }}" class="svg_img header_svg" alt="icon" /><span
class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
</div>
<div class="ec-nav-panel-icons">
<a href="index-2.html" class="ec-header-btn"><img src="{{asset ('user/assets/images/icons/home.svg') }}"
class="svg_img header_svg" alt="icon" /></a>
</div>
<div class="ec-nav-panel-icons">
<a href="wishlist.html" class="ec-header-btn"><img src="{{asset ('user/assets/images/icons/wishlist.svg') }}"
class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
</div>
<div class="ec-nav-panel-icons">
<a href="/login" class="ec-header-btn"><img src="{{asset ('user/assets/images/icons/user.svg') }}"
class="svg_img header_svg" alt="icon" /></a>
</div>

</div>
</div>
</div>
<!-- Footer navigation panel for responsive display end -->


<!-- Recent Purchase Popup  -->
<!-- <div class="recent-purchase">
<img src="{{asset ('user/assets/images/product-image/1.jpg') }}" alt="payment image">
<div class="detail">
<p>Someone in new just bought</p>
<h6>stylish baby shoes</h6>
<p>10 Minutes ago</p>
</div>
<a href="javascript:void(0)" class="icon-btn recent-close">×</a>
</div> -->
<!-- Recent Purchase Popup end -->


<!-- Cart Floating Button -->
<div class="ec-cart-float">
<a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
<div class="header-icon"><img src="{{asset ('user/assets/images/icons/cart.svg') }}" class="svg_img header_svg" alt="cart" />
</div>
<span class="ec-cart-count cart-count-lable">3</span>
</a>
</div>
<!-- Cart Floating Button end -->



<!-- Vendor JS -->
<script src="{{asset ('user/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/jquery.notify.min.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/jquery.bundle.notify.min.js')}}"></script>

<script src="{{asset ('user/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!--Plugins JS-->
<script src="{{asset ('user/assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/countdownTimer.min.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/jquery.zoom.min.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/slick.min.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/infiniteslidev2.js')}}"></script>
<script src="{{asset ('user/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset ('user/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
<!-- Google translate Js -->
<script src="{{asset ('user/assets/js/vendor/google-translate.js')}}"></script>
<script>
function googleTranslateElementInit() {
new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
}
</script>
<!-- Main Js -->
<script src="{{asset ('user/assets/js/vendor/index.js')}}"></script>
<script src="{{asset ('user/assets/js/main.js')}}"></script>
</body>

</html>