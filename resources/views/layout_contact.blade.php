<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ASTRO | LAPTOP WORLD </title>
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
<body style="background-color: #FFFFFF;">
    <header class="" id="header"><!--header-->
        <div class="header_top" style="position: fixed;z-index: 13;width: 100%;"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo pull-left">
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('/trang-chu')}}" class="active">Trang ch???</a></li>
                                <li><a href="{{url('/lien-he')}}">Th??ng tin Dev</a></li>
                            </ul>
                            <div style="text-align: center">
                                <!-- Search form -->
                                <form action="{{URL::to('/trang-chu')}}" method="post" enctype="multipart/form-data" class="form-inline md-form mr-auto mb-4">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}"> {{-- khong chuyen trang sau khi load form --}}
                                    <input style="text-align: center" name="search" class="form-control mr-sm-2" type="text" placeholder="T??m ki???m s???n ph???m" aria-label="Search" value="<?php
                                        $value = Session::get('value');
                                        if($value) {
                                            echo $value;
                                            Session::put('value', null);
                                        }
                                    ?>">
                                </form>
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
                                    <li><a href="{{URL::to('/signin')}}"><i class="fa fa-lock"></i> ????ng nh???p Kh??ch h??ng</a></li>
                                    <li><a href="{{url('/admin-login')}}"><i class="fa fa-lock"></i> ????ng nh???p Admin</a></li>
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
                                <?php
                                    } else { // neu kh da login thi chuyen den trang quan ly don hang cua khach hang
                                ?>
                                    <li><a href="{{URL::to('/customer')}}"><i class="fa fa-user"></i> <?php $name = Session::get('customer_name'); echo $name; ?></a></li>
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
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
    <section id="slider"><!--slider-->
        <div class="container" style="height: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="z-index: 1">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>N??i ????? b???n g???i g???m ni???m tin</h2>
                                    <p>Cam k???t ho??n ti???n n???u c?? l???i t??? s???n ph???m</p>
                                    <p>?????i tr??? 1:1 trong v??ng 2 th??ng</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/HP.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>V???i nhi???u ch????ng tr??nh ??u ????i ?????t bi???t </h2>
                                    <p>H??? tr??? tr??? g??p v???i l??i su???t 0%, c??ng nhi???u ch????ng tr??nh<br> khuy???n m??i kh??c ch??? c?? t???i MyCOMPUTER</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/HP2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>My</span>-COMPUTER</h1>
                                    <h2>H??? tr??? s???a ch???a c??c d??ng m??y, cam k???t tr??? m??y ????ng h???n</h2>
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
                    <!-- Hi???n th??? danh m???c -->
                        <h2>H??ng</h2>
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
                <!-- Hi???n th??? t???t c??? s???n ph???m -->
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
                            <p>Th???a m??n ??am m?? theo c??ch c???a b???n</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                    </div>
                    <div class="col-sm-3"style="width: 21%;">
                        <div class="address">
                            <img src="{{asset('public/frontend/images/map.png')}}" alt="" />
                            <p>Ch??ng t??i mang ?????n d???ch v??? tr???c tuy???n t???t nh???t tr??n th??? gi???i</p>
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
