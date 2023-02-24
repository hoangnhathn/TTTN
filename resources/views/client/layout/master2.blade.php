<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('/') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') | Thống Nhất</title>
    <!---<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--->
    <link href="client/css/bootstrap.min.css" rel="stylesheet">
    <link href="client/css/font-awesome.min.css" rel="stylesheet">
    <link href="client/css/prettyPhoto.css" rel="stylesheet">
    <link href="client/css/price-range.css" rel="stylesheet">
    <link href="client/css/animate.css" rel="stylesheet">
    <link href="client/css/main.css" rel="stylesheet">
    <link href="client/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="client/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="client/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="client/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="client/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="client/images/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> thongnhat@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="client/images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="./" class="{{(request()->segment(1)=='') ? 'active': ''}}">Trang chủ</a></li>
                            <li class="dropdown"><a href="./products">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($categories as $categories)
                                        <li><a href="products/category/{{$categories->category_name}}">{{$categories->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Giới thiệu<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="404.html">Tin tức</a></li>
                            <li><a href="contact-us.html">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>

                @yield('search')
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@yield('content')

<footer id="footer"><!--Footer-->
    @yield('top_footer')
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Dịch vụ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Giúp đỡ online</a></li>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Mua sắm nhanh</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Xe đạp trẻ em</a></li>
                            <li><a href="#">Xe đạp người lớn</a></li>
                            <li><a href="#">Xe đạp nam</a></li>
                            <li><a href="#">Xe đạp nữ</a></li>
                            <li><a href="#">Xe đạp thể thao</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Chính sách</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Chính sách hoàn trả</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Về chúng tôi</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Thông tin công ty</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Địa chỉ đại lý</a></li>
                            <li><a href="#">Giờ hoạt động</a></li>
                            <li><a href="#">Bản quyền</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Xe Đạp Thống Nhất</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Địa chỉ email của bạn" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Nhận thông tin cập nhật mới nhất <br />dành cho bạn...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2023 Thong Nhat Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="#">Nhat</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="client/js/jquery.js"></script>
<script src="client/js/bootstrap.min.js"></script>
<script src="client/js/jquery.scrollUp.min.js"></script>
<script src="client/js/price-range.js"></script>
<script src="client/js/jquery.prettyPhoto.js"></script>
<script src="client/js/main.js"></script>
</body>
</html>
