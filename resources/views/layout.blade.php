<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ASTRO | LAPTOP WORLD</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <style type="text/css">
        .productinfo img{
            height: 200px;
        }
    </style>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo.jpg')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/1.jpg')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/2.jpg')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/3.jpg')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/4.jpg')}}" >
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
</head><!--/head-->



<body>
    <header class="" id="header"><!--header-->
        <div class="header_top" style="position: fixed;z-index: 13;width: 100%;"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo pull-left">
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li><a href="{{url('/lien-he')}}">Thông tin Dev</a></li>
                            </ul>
                            <div style="text-align: center">
                                <!-- Search form -->
                                <form action="{{URL::to('/trang-chu')}}" method="post" enctype="multipart/form-data" class="form-inline md-form mr-auto mb-4">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}"> {{-- khong chuyen trang sau khi load form --}}
                                    <input style="text-align: center" name="search" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm sản phẩm" aria-label="Search" value="<?php
                                        $value = Session::get('value');
                                        if($value) {
                                            echo $value;
                                            Session::put('value', null);
                                        }
                                    ?>">
                                </form>
                                <?php
                                    foreach ($Product as $value) {}
                                    $dem = count($Product);
                                    $noti = Session::get('noti');
                                    if($noti) {
                                        echo $noti."<b>".$dem."</b> kết quả";
                                        Session::put('noti', null);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="logo pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id == null) {
                                ?> {{-- neu kh chua login thi chuyen den trang login --}}
                                    <li><a href="{{URL::to('/signin')}}"><i class="fa fa-lock"></i> Đăng nhập Khách hàng</a></li>
                                    <li><a href="{{url('/admin-login')}}"><i class="fa fa-lock"></i> Đăng nhập Admin</a></li>
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    } else { // neu kh da login thi chuyen den trang quan ly don hang cua khach hang
                                ?>
                                    <li><a href="{{URL::to('/customer')}}"><i class="fa fa-user"></i> <?php $name = Session::get('customer_name'); echo $name; ?></a></li>
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        <div class="header-middle"><!--header-middle-->
            <div class="container">
            </div>
        </div><!--/header-middle-->
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <div class="main-wrapper">
    <header>
            <!-- Header top area start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="welcome-text">
                                <p>Đồ án cuối kì - Phát triển ứng dụng Website</p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> (+84) 39 269 7777</a></li>
                                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> 20521452@gm.uit.com</a></li>
                                    <!-- <li><a href="my-account.html"><i class="fa fa-user"></i> Contact</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                                <a>
                                    <li><a href="my-account.html"><i class="fa fa-user"></i> Tài khoản</a></li>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                
                                <li class="dropdown"><a href="#">Laptop <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Cá nhân</a></li>
                                        <li><a href="index-2.html">Văn phòng</a></li>
                                        <li><a href="index.html">Sáng tạo</a></li>
                                        <li><a href="index-2.html">Học tập</a></li>
                                        <li><a href="index.html">Chơi game</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">Điện thoại</a></li>
                                <li class="dropdown position-static"><a href="about.html">Smart Watch <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Inner Pages</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Related Shop Pages</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                <li><a href="thank-you-page.html">Thank You Page</a></li>
                                            </ul>
                                            <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/menu-banner.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="#">Máy bàn / PC <i
                                    class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="single-product-group.html">Product Group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                </li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                            </ul>
                                            <ul class="d-block p-0 border-0">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Phụ kiện <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                                Blog <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-single.html">Single Blog</a>
                                                <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Hỗ trợ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
    </div>                               

    <section id="slider"><!--slider-->
        <div class="container" style="height: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="z-index: 1;">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>Nơi để bạn gửi gắm niềm tin</h2>
                                    <p>Cam kết hoàn tiền nếu có lỗi từ sản phẩm</p>
                                    <p>Đổi trả 1:1 trong vòng 2 tháng</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/HP.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>Với nhiều chương trình ưu đãi đặt biệt </h2>
                                    <p>Hỗ trợ trả góp với lãi suất 0%, cùng nhiều chương trình<br> khuyến mãi khác chỉ có tại MyCOMPUTER</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/HP2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>Hỗ trợ sửa chữa các dòng máy, cam kết trả máy đúng hẹn</h2>
                                    <p></p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/HP3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('public/frontend/images/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/slider-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                    <!-- Hiển thị danh mục -->
                        <h2>Hãng</h2>
                        <div style="text-align: center" class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $cg)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="">
                                        <a href="{{asset('/category_product')}}/{{$cg->category_id}}">{{$cg->category_id}}</a>
                                    </h5>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-products-->
                    </div>
                </div>
                <!-- Hiển thị tất cả sản phẩm -->
                <div class="col-sm-9 padding-right">
                @yield('content')
                </div>
            </div>
        </div>
    </section>
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>My</span>-COMPUTER</h2>
                            <p>Thỏa mãn đam mê theo cách của bạn</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                    </div>
                    <div class="col-sm-3"style="width: 21%;">
                        <div class="address">
                            <img src="{{asset('public/frontend/images/map.png')}}" alt="" />
                            <p>Chúng tôi mang đến dịch vụ trực tuyến tốt nhất trên thế giới</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright @ 2022 . University of Infomation Technology. Design by <a style="color:red;" href="https://www.facebook.com/nqk.dev">NQK - DEV</a></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>
