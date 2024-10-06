<?php
include'includes/config.php';
include_once 'functions/middleware.php';
?>
<!DOCTYPE html>
<html lang="en" class="">

<!-- Mirrored from wowtheme7.com/tf/marketpro/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 15:19:58 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> MarketPro - E-commerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Wow -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="assets/images/icon/preloader.gif" alt="">
    <!-- <div class="loader"></div> -->
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.php" class="mobile-menu__logo">
            <img src="assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home One</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.php" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ======================= Middle Top Start ========================= -->
<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
            <ul class="flex-align flex-wrap d-none d-md-flex">
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Become A Seller</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">About us</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Free Delivery</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Returns Policy</a></li>
            </ul>
        <ul class="header-top__right flex-align flex-wrap">
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="text-white text-sm py-8">Help Center</a>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-headset"></i></span>
                                Call Center
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-chat-circle-dots"></i></span>
                                Live Chat
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                   <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="border-right-item">
                    <a href="account.php" class="text-white text-sm py-8 flex-align gap-6"> 
                        <span class="icon text-md d-flex"> <i class="ph ph-user-circle"></i> </span> 
                        <span class="hover-text-decoration-underline">My Account</span>
                     </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= Middle Top End ========================= -->

    <!-- ======================= Middle Header Start ========================= -->
<header class="header-middle bg-color-one border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.php" class="link">
                    <img src="assets/images/logo/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- form location Start -->
            <form action="#" class="flex-align flex-wrap form-location-wrapper">
                <div class="search-category d-flex h-48 select-border-end-0 radius-end-0 search-form d-sm-flex d-none">
                    <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                        <option value="1" selected disabled>All Categories</option>
                        <option value="1">Grocery</option>
                        <option value="1">Breakfast & Dairy</option>
                        <option value="1">Vegetables</option>
                        <option value="1">Milks and Dairies</option>
                        <option value="1">Pet Foods & Toy</option>
                        <option value="1">Breads & Bakery</option>
                        <option value="1">Fresh Seafood</option>
                        <option value="1">Fronzen Foods</option>
                        <option value="1">Noodles & Rice</option>
                        <option value="1">Ice Cream</option>
                    </select>
    
                    <div class="search-form__wrapper position-relative">
                        <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-end-pill pe-44" placeholder="Search for a product or brand">
                        <button type="submit" class="w-32 h-32 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8"><i class="ph ph-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="location-box bg-white flex-align gap-8 py-6 px-16 rounded-pill border border-gray-100">
                    <span class="text-gray-900 text-xl d-xs-flex d-none"><i class="ph ph-map-pin"></i></span>
                    <div class="line-height-1">
                        <span class="text-gray-600 text-xs">Your Location</span>
                        <div class="line-height-1">
                            <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                                <option value="1">Alabama</option>
                                <option value="1">Alaska</option>
                                <option value="1">Arizona</option>
                                <option value="1">Delaware</option>
                                <option value="1">Florida</option>
                                <option value="1">Georgia</option>
                                <option value="1">Hawaii</option>
                                <option value="1">Indiana</option>
                                <option value="1">Marzland</option>
                                <option value="1">Nevada</option>
                                <option value="1">New Jersey</option>
                                <option value="1">New Mexico</option>
                                <option value="1">New York</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form location start -->
             
            <!-- Header Middle Right start -->
            <div class="header-right flex-align d-lg-block d-none">
                <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.php" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.php" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
            </div>
            <!-- Header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->

    <!-- ==================== Header Start Here ==================== -->
<header class="header bg-white border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper">

                <!-- Category Dropdown Start -->
                <div class="category on-hover-item">
                    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-heading">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">

                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

                        <!-- Logo Start -->
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.php" class="link">
                                <img src="assets/images/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- Logo End -->

                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
    
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php">Soda & Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Sports & Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Flavoured Water    </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats & Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats & Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Fresh & Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast & Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast & Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Oats & Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Granola & Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits & Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits & Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cream Biscuits & Wafers </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Glucose & Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery & Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery & Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Lemon, Ginger & Garlic </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Indian & Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Dals & pulses</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Millet & Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> 
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home One</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.php" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <a href="tel:01234567890" class="bg-main-600 text-white p-12 h-100 hover-bg-main-800 flex-align gap-8 text-lg d-lg-flex d-none"> 
                    <div class="d-flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                </a>
                <div class="me-16 d-lg-none d-block">
                    <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.php" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.php" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->

    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb py-26 bg-color-one">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Shop Details</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="index.php" class="text-main-600 flex-align gap-8">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align text-gray-500">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm">
                    <a href="shop.php" class="text-main-600 flex-align gap-8">
                        Shop
                    </a>
                </li>
                <li class="flex-align text-gray-500">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm">
                    <a href="index.php" class="text-main-600 flex-align gap-8">
                        Shop Grid
                    </a>
                </li>
                <li class="flex-align text-gray-500">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-neutral-600">
                    Lay's Potato Chips
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

    <section class="product-details py-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-lg-9">
                <div class="row gy-4">
                   
                <?php
                        if(isset($_GET['id'])){
                            $productID= $_GET['id'];
                            $sql = "Select * from products where ProductID = '$productID' LIMIT 1";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            $name = $row['ProductName'];
                            $price = $row['Price'];
                            $Description = $row['Description'];
                            $rating = $row['Rating'];
                            $image = $row['ImageURL'];
                            $productID = $row['ProductID'];

                            echo <<<EOT
                            <div class="col-xl-6">
                            <div class="product-details__left">
                                
                                <div class="product-details__thumb-slider border border-gray-100 rounded-16">
                                    <div class="">
                                        <div class="product-details__thumb flex-center h-100">
                                            <img src="$image" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex-center h-100">
                                            <img src="$image" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex-center h-100">
                                            <img src="$image" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex-center h-100">
                                            <img src="$image" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex-center h-100">
                                            <img src="$image" alt="">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="mt-24">
                                    <div class="product-details__images-slider">
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-16 p-8">
                                                <img src="$image" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-16 p-8">
                                                <img src="$image" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-16 p-8">
                                                <img src="$image" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-16 p-8">
                                                <img src="$image" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-16 p-8">
                                                <img src="$image" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                             <div class="col-xl-6">
                            <div class="product-details__content">
                            <h5 class="mb-12"> $name</h5>
                            <div class="flex-align flex-wrap gap-12">
                                <div class="flex-align gap-12 flex-wrap">
                                    <div class="flex-align gap-8">
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-sm fw-medium text-neutral-600">$rating Star Rating</span>
                                    <span class="text-sm fw-medium text-gray-500">(21,671)</span>
                                </div>
                                <span class="text-sm fw-medium text-gray-500">|</span>
                                <span class="text-gray-900"> <span class="text-gray-400">SKU:</span>EB4DRP </span>
                            </div>
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>
                            <p class="text-gray-700">Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent</p>
                            <div class="mt-32 flex-align flex-wrap gap-32">
                                <div class="flex-align gap-8">
                                    <h4 class="mb-0">$$price</h4>
                                    <span class="text-md text-gray-500">$38.00</span>
                                </div>
                                <a href="#" class="btn btn-main rounded-pill">Order on What'sApp</a>
                            </div>
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>

                            <div class="flex-align flex-wrap gap-16 bg-color-one rounded-8 py-16 px-24">
                                <div class="flex-align gap-16">
                                    <span class="text-main-600 text-sm">Special Offer:</span>
                                </div>
                                <div class="countdown" id="countdown11">
                                    <ul class="countdown-list flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="days"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="hours"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="minutes"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="seconds"></span></li>
                                    </ul>
                                </div>
                                <span class="text-gray-900 text-xs">Remains untill the end of the offer</span>
                            </div>

                            <div class="mb-24">
                                <div class="mt-32 flex-align gap-12 mb-16">
                                    <span class="w-32 h-32 bg-white flex-center rounded-circle text-main-600 box-shadow-xl"><i class="ph-fill ph-lightning"></i></span>
                                    <h6 class="text-md mb-0 fw-bold text-gray-900">Products are almost sold out</h6>
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 32%"></div>
                                </div>
                                <span class="text-sm text-gray-700 mt-8">Available only:45</span>
                            </div>

                            <span class="text-gray-900 d-block mb-8">Quantity:</span>
                           <form action="./cart.php" method="POST" >
                            <div class="flex-between gap-16 flex-wrap">
                                <div class="flex-align flex-wrap gap-16">
                                    <div class="border border-gray-100 rounded-pill py-9 px-16 flex-align">
                                        <button type="button" class="quantity__minus p-4 text-gray-700 hover-text-main-600 flex-center"><i class="ph ph-minus"></i></button>
                                        <input type="number"  name="quantity" class="quantity__input border-0 text-center w-32" value="1">
                                        <input type="number" hidden name="productID"  value="$productID" />
                                        <button type="button" class="quantity__plus p-4 text-gray-700 hover-text-main-600 flex-center"><i class="ph ph-plus"></i></button>

                                    </div>
                                  <button type="submit" name="btn-addCart" >
                                    <span href="#" class="btn btn-main rounded-pill flex-align d-inline-flex gap-8 px-48"> <i class="ph ph-shopping-cart"></i> Add To Cart</span></button>
                                </div>
                                
                                <div class="flex-align gap-12">
                                    <a href="./cart.php?id=$productID" class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex-center rounded-circle">
                                        <i class="ph ph-heart"></i>
                                    </a>
                                    <a href="#" class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex-center rounded-circle">
                                        <i class="ph ph-shuffle"></i>
                                    </a>
                                    <a href="#" class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex-center rounded-circle">
                                        <i class="ph ph-share-network"></i>
                                    </a>
                                </div>
                            </div>
                           </form>
                            
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>

                            <div class="flex-between gap-16 p-12 border border-main-two-600 border-dashed rounded-8 mb-16">
                                <div class="flex-align gap-12">
                                    <button type="button" class="w-18 h-18 flex-center border border-gray-900 text-xs rounded-circle hover-bg-gray-100">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <span class="text-gray-900 fw-medium text-xs">Mfr. coupon. $3.00 off 5</span>
                                </div>
                                <a href="cart.php" class="text-xs fw-semibold text-main-two-600 text-decoration-underline hover-text-main-two-700">View Details</a>
                            </div>
                            <ul class="list-inside ms-12">
                                <li class="text-gray-900 text-sm mb-8">Buy 1, Get 1 FREE</li>
                                <li class="text-gray-900 text-sm mb-0">Buy 1, Get 1 FREE</li>
                            </ul>
                            
                        </div> 
                            </div> 
                           
                        EOT;
                        }
                        ?>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-details__sidebar border border-gray-100 rounded-16 overflow-hidden">
                    <div class="p-24">
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-truck"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Fast Delivery</h6>
                            <p class="text-gray-700">Lightning-fast shipping, guaranteed.</p>
                        </div>
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-arrow-u-up-left"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Free 90-day returns</h6>
                            <p class="text-gray-700">Shop risk-free with easy returns.</p>
                        </div>
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-check-circle"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Pickup available at Shop location</h6>
                            <p class="text-gray-700">Usually ready in 24 hours</p>
                        </div>
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-credit-card"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Payment</h6>
                            <p class="text-gray-700">Payment upon receipt of goods, Payment by card in the department, Google Pay, Online card.</p>
                        </div>
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-check-circle"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Warranty</h6>
                            <p class="text-gray-700">The Consumer Protection Act does not provide for the return of this product of proper quality.</p>
                        </div>
                    </div>
                    <div class="p-24 bg-color-one d-flex align-items-start gap-24 border-bottom border-gray-100">
                        <span class="w-44 h-44 bg-white text-main-600 rounded-circle flex-center text-2xl flex-shrink-0">
                            <i class="ph-fill ph-package"></i>
                        </span>
                        <div class="">
                            <h6 class="text-sm mb-8">Packaging</h6>
                            <p class="text-gray-700">Research & development value proposition graphical user interface investor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-80">
            <div class="product-dContent border rounded-24">
                <div class="product-dContent__header border-bottom border-gray-100 flex-between flex-wrap gap-16">
                    <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <a href="#" class="btn bg-color-one rounded-16 flex-align gap-8 text-main-600 hover-bg-main-600 hover-text-white">
                        <img src="assets/images/icon/satisfaction-icon.png" alt="">
                        100% Satisfaction Guaranteed
                    </a>
                </div>
                <div class="product-dContent__box">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                            <div class="mb-40">
                                <h6 class="mb-24">Product Description</h6>
                                <p>Wherever celebrations and good times happen, the LAY'S brand will be there just as it has been for more than 75 years. With flavors almost as rich as our history, we have a chip or crisp flavor guaranteed to bring a smile on your face. </p>
                                <p>Morbi ut sapien vitae odio accumsan gravida. Morbi vitae erat auctor, eleifend nunc a, lobortis neque. Praesent aliquam dignissim viverra. Maecenas lacus odio, feugiat eu nunc sit amet, maximus sagittis dolor. Vivamus nisi sapien, elementum sit amet eros sit amet, ultricies cursus ipsum. Sed consequat luctus ligula. Curabitur laoreet rhoncus blandit. Aenean vel diam ut arcu pharetra dignissim ut sed leo. Vivamus faucibus, ipsum in vestibulum vulputate, lorem orci convallis quam, sit amet consequat nulla felis pharetra lacus. Duis semper erat mauris, sed egestas purus commodo vel.</p>    
                                <ul class="list-inside mt-32 ms-16">
                                    <li class="text-gray-400 mb-4">8.0 oz. bag of LAY'S Classic Potato Chips</li>
                                    <li class="text-gray-400 mb-4">Tasty LAY's potato chips are a great snack</li>
                                    <li class="text-gray-400 mb-4">Includes three ingredients: potatoes, oil, and salt</li>
                                    <li class="text-gray-400 mb-4">Gluten free product</li>
                                </ul>
                                <ul class="mt-32">
                                    <li class="text-gray-400 mb-4">Made in USA</li>
                                    <li class="text-gray-400 mb-4">Ready To Eat.</li>
                                </ul>
                            </div>
                            <div class="mb-40">
                                <h6 class="mb-24">Product Specifications</h6>
                                <ul class="mt-32">
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Product Type:
                                            <span class="text-gray-500"> Chips & Dips</span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Product Name:
                                            <span class="text-gray-500"> Potato Chips Classic </span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Brand:
                                            <span class="text-gray-500"> Lay's</span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            FSA Eligible:
                                            <span class="text-gray-500"> No</span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Size/Count: 
                                            <span class="text-gray-500"> 8.0oz</span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Item Code:
                                            <span class="text-gray-500"> 331539</span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Ingredients:
                                            <span class="text-gray-500"> Potatoes, Vegetable Oil, and Salt.</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-40">
                                <h6 class="mb-24">Nutrition Facts</h6>
                                <ul class="mt-32">
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium"> Total Fat 10g 13%</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium"> Saturated Fat 1.5g 7%</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium"> Cholesterol 0mg 0%</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium"> Sodium 170mg 7%</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium"> Potassium 350mg 6%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-0">
                                <h6 class="mb-24">More Details</h6>
                                <ul class="mt-32">
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-gray-500"> Lunarlon midsole delivers ultra-plush responsiveness</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-gray-500"> Encapsulated Air-Sole heel unit for lightweight cushioning</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-gray-500"> Colour Shown: Ale Brown/Black/Goldtone/Ale Brown</span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-gray-500"> Style: 805899-202</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h6 class="mb-24">Product Description</h6>
                                    <div class="d-flex align-items-start gap-24 pb-44 border-bottom border-gray-100 mb-44">
                                        <img src="assets/images/thumbs/comment-img1.png" alt="" class="w-52 h-52 object-fit-cover rounded-circle flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <div class="flex-between align-items-start gap-8 ">
                                                <div class="">
                                                    <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                    <div class="flex-align gap-8">
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                </div>
                                                <span class="text-gray-800 text-xs">3 Days ago</span>
                                            </div>
                                            <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                            <p class="text-gray-700">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>

                                            <div class="flex-align gap-20 mt-44">
                                                <button class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-thumbs-up"></i>
                                                    Like
                                                </button>
                                                <a href="#comment-form" class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                    Replay
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-24">
                                        <img src="assets/images/thumbs/comment-img1.png" alt="" class="w-52 h-52 object-fit-cover rounded-circle flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <div class="flex-between align-items-start gap-8 ">
                                                <div class="">
                                                    <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                    <div class="flex-align gap-8">
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                </div>
                                                <span class="text-gray-800 text-xs">3 Days ago</span>
                                            </div>
                                            <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                            <p class="text-gray-700">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>

                                            <div class="flex-align gap-20 mt-44">
                                                <button class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-thumbs-up"></i>
                                                    Like
                                                </button>
                                                <a href="#comment-form" class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                    Replay
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-56">
                                        <div class="">
                                            <h6 class="mb-24">Write a Review</h6>
                                            <span class="text-heading mb-8">What is it like to Product?</span>
                                            <div class="flex-align gap-8">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="mt-32">
                                            <form action="#">   
                                                <div class="mb-32">
                                                    <label for="title" class="text-neutral-600 mb-8">Review Title</label>
                                                    <input type="text" class="common-input rounded-8" id="title" placeholder="Great Products">
                                                </div>
                                                <div class="mb-32">
                                                    <label for="desc" class="text-neutral-600 mb-8">Review Content</label>
                                                    <textarea class="common-input rounded-8" id="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-main rounded-pill mt-48">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ms-xxl-5">
                                        <h6 class="mb-24">Customers Feedback</h6>
                                        <div class="d-flex flex-wrap gap-44">
                                            <div class="border border-gray-100 rounded-8 px-40 py-52 flex-center flex-column flex-shrink-0 text-center">
                                                <h2 class="mb-6 text-main-600">4.8</h2>
                                                <div class="flex-center gap-8">
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                </div>
                                                <span class="mt-16 text-gray-500">Average Product Rating</span>
                                            </div>
                                            <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow-1">
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">5</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 70%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">124</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">4</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 50%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">52</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">3</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">12</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">2</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 20%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">5</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-0">
                                                    <span class="text-gray-900 flex-shrink-0">1</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 5%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ========================== Similar Product Start ============================= -->
<section class="new-arrival pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">You Might Also Like</h5>
                <div class="flex-align gap-16">
                    <a href="shop.php" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">All Products</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="new-arrival-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="new-arrival-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-arrival__slider arrow-style-two">
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img7.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>   
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img8.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img9.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img10.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img11.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img12.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                    <a href="product-details.php" class="product-card__thumb flex-center">
                        <img src="assets/images/thumbs/product-img10.png" alt="">
                    </a>
                    <div class="product-card__content p-sm-2">
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.php" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                             <a href="cart.php" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Similar Product End ============================= -->
    
    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->

    <!-- =============================== Newsletter Section Start ============================ -->
<div class="newsletter">
    <div class="container container-lg">
        <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
            <img src="assets/images/bg/newsletter-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="">
                        <h1 class="text-white mb-12">Don't Miss Out on Grocery Deals</h1>
                        <p class="text-white h5 mb-0">SING UP FOR THE UPDATE NEWSLETTER</p>
                        <form action="#" class="position-relative mt-40">
                            <input type="text" class="form-control common-input rounded-pill text-white py-22 px-16 pe-144" placeholder="Your email address...">
                            <button type="submit" class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 text-center d-xl-block d-none">
                    <img src="assets/images/thumbs/newsletter-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============================== Newsletter Section End ============================ -->
    
    
<!-- ==================== Footer Two Start Here ==================== -->
<footer class="footer py-80">
    <div class="container container-lg">
        <div class="footer-item-two-wrapper d-flex align-items-start flex-wrap">
            <div class="footer-item max-w-275">
                <div class="footer-item__logo">
                    <a href="index.php"> <img src="assets/images/logo/logo-two-black.png" alt=""></a>
                </div>
                <p class="mb-24">Marketpro  become the largest computer parts, gaming pc parts, and other IT related products.</p>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                    <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, California, USA</span>
                </div>
            </div>
            
            <div class="footer-item">
                <h6 class="footer-item__title">About us</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Company Profile</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">All Retail Store</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Merchant Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Affiliate</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Feedback</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Huawei Group</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Rules & Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">Customer Support</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="contact.php" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Gift Card</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                    <li class="">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Redeem Voucher</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">My Account</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Product Support</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">Information</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer-item">
                <h6 class="">Shop on The Go</h6>
                <p class="mb-16">Marketpro App is available.  Get it now</p>
                <div class="flex-align gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                        <img src="assets/images/thumbs/store-img1.png" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                        <img src="assets/images/thumbs/store-img2.png" alt="">
                    </a>
                </div>

                <ul class="flex-align gap-16">
                    <li>
                        <a href="https://www.facebook.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-facebook-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-twitter-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-instagram-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-linkedin-logo"></i>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer bg-color-one py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <p class="bottom-footer__text ">Marketpro eCommerce &copy; 2024. All Rights Reserved </p>
            <div class="flex-align gap-8 flex-wrap">
                <span class="text-heading text-sm">We Are Acepting</span>
                <img src="assets/images/thumbs/payment-method.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer Two End Here ==================== -->
  

    
    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/count-down.js"></script>
    <!-- wow js -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>



    </body>

<!-- Mirrored from wowtheme7.com/tf/marketpro/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 15:20:01 GMT -->
</html>