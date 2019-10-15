<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/image/favicon.png" rel="icon" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>فروشگاه محمد آسیابی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive-rtl.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>

    <!-- CSS Part End-->

    <!--JS start-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--JS end-->

    @yield('header')

</head>
<body>



{{--{{dd(session('cart'))}}--}}
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop fixed-top">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>09126661852</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@idpz.ir</a></li>
                                <li><a href="/index">خانه</a> </li>



                                @guest

                                    @if (Route::has('register'))

                                    @endif
                                @else
                                    <li>
                                        <a id="favorite" name="favorite"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                                             علاقه مندی های {{ Auth::user()->name }} عزیز<span class="caret"></span>
                                        </a>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="/image/flags/ir.png" alt="فارسی" title="فارسی">فارسی <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/image/flags/ir.png" alt="فارسی" title="فارسی" /> فارسی</button>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
		                                document.getElementById('logout-form').submit();">
                                            {{ __('خروج') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="/index"><img class="img-responsive" src="/image/logo.png" title="VillageShop" alt="VillageShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    @if (session('cart'))
                        <?php $i=0 ?>
                        @foreach (session('cart') as $id => $details)
                            <?php $i++ ?>
                        @endforeach
                    @endif

                    @if(!isset($i))
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>

                                <span id="cart-total">  0 آیتم </span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong style="color: #7c1212 ; font-size: medium"> سبد شما خالی است لطفا محصولی را به سبد خود اضافه کنید</strong></td>

                                            </tr>

                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary" disabled=""><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary" disabled=""><i class="fa fa-share"></i> تسویه حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @else
                        <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                            <div id="cart" style="overflow-scrolling: inherit">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                    <span class="cart-icon pull-left flip"></span>

                                    <span id="cart-total">  <?php echo $i; ?> آیتم </span></button>
                                <ul class="dropdown-menu" style="max-height: 400px ; overflow-scrolling: auto">
                                    @if(session('cart'))
                                        <?php $total = 0 ;
                                        $total_array=[];
                                        ?>
                                        @foreach(session('cart') as $id => $details)
                                                <?php $total = $details['price'] * $details['quantity'];
                                                $total_array[$total]=$total;
                                                ?>
                                        <li>
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img style="max-height: 30% ;max-width: 30%" class="img-thumbnail" title="{{ $details['photo'] }}" alt="{{ $details['photo'] }}" src="http://idpz.ir/assets/images/goods/{{ $details['photo'] }}"></a></td>
                                                    <td class="text-left"><a href="product.html">{{ $details['name'] }}</a></td>
                                                    <td class="text-left"><a >X {{ $details['quantity'] }}</a></td>
                                                    <td class="text-right">{{ $details['price'] }} تومان</td>
                                                    <td class="actions"  data-th=""><button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </li>
                                        @endforeach
                                    @endif
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>جمع کل</strong></td>
                                                    <td class="text-right"><?php print_r(array_sum($total_array)) ?> تومان</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="/cart" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد و تسویه حساب</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group" >
                            <form method="get" action="/search">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="submit" class="button-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <div class="container">
            <nav id="menu" class="navbar">
                <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="/index"><span>خانه</span></a></li>
                        <li class="mega-menu dropdown"><a>دسته ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="/goods/?goodcat=art">ویدیو ها</a></li>
                                    <li><a href="/goods/?goodcat=food">پرفروش ها</a></li>
                                    <li><a href="/goods/?goodcat=herbal">پر بازدید ها</a></li>
                                    <li><a href="/goods/?goodcat=home">دوست داشتنی ها</a></li>
                                    <li><a href="/goods/?goodcat=cloth">رایگان</a></li>
                                    <li><a href="/goods/?goodcat=plant">گل و گیاه</a></li>
                                </ul>

                            </div>
                        </li>
                        {{--<li class="menu_brands dropdown"><a href="#">برند ها</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">test</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">test1</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">test2</a></div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    {{--<li><a href="/login">ورود</a></li>--}}
                                    {{--<li><a href="/register">ثبت نام</a></li>--}}
                                    {{--<li><a href="category.html">دسته بندی</a></li>--}}
                                    {{--<li><a href="/goods">محصولات</a></li>--}}
                                    {{--<li><a href="cart.html">سبد خرید</a></li>--}}
                                    {{--<li><a href="checkout.html">تسویه حساب</a></li>--}}
                                    {{--<li><a href="search.html">جستجو</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="about-us.html">درباره ما</a></li>--}}
                                    {{--<li><a href="404.html">404</a></li>--}}
                                    {{--<li><a href="elements.html">عناصر</a></li>--}}
                                    {{--<li><a href="faq.html">سوالات متداول</a></li>--}}
                                    {{--<li><a href="sitemap.html">نقشه سایت</a></li>--}}
                                    {{--<li><a href="contact-us.html">تماس با ما</a></li>--}}
                                    <li><a href="/login">ورود</a></li>
                                    <li><a href="/register">ثبت نام</a></li>
                                    <li><a href="category.html">دسته بندی</a></li>
                                    <li><a href="/goods">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="search\optional">جستجو</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                        <li class="custom-link-right"><a href="/index" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Main آقایانu End-->
    </div>

    <!--first main cut////////////////////////////////////////////////-->

    <main >
        @yield('content')
    </main>


    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>اطلاعات تماس</h5>
                        <ul>
                            <li class="address"><i class="fa fa-map-marker"></i>آدرسسسسسس</li>
                            <li class="mobile"><i class="fa fa-phone"></i>09121111</li>
                            <li class="email"><i class="fa fa-envelope"></i>برقراری ارتباط از طریق <a href="contact-us.html">تماس با ما</a>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات ارسال</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>

                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما <a href="/index" target="_blank">مارکت جهانی روستا</a></p>
                    </div>
                    <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->
    <!-- Facebook Side Block Start -->
    {{--<div id="facebook" class="fb-left sort-order-1">--}}
        {{--<div class="facebook_icon"><i class="fa fa-facebook"></i></div>--}}
        {{--<div class="fb-page" data-href="#" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">--}}
            {{--<div class="fb-xfbml-parse-ignore">--}}
                {{--<blockquote cite="#"><a href="#">مارکت جهانی روستا</a></blockquote>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div id="fb-root"></div>--}}
        {{--<script>(function(d, s, id) {--}}
                {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
                {{--if (d.getElementById(id)) return;--}}
                {{--js = d.createElement(s); js.id = id;--}}
                {{--js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";--}}
                {{--fjs.parentNode.insertBefore(js, fjs);--}}
            {{--}(document, 'script', 'facebook-jssdk'));</script>--}}
    {{--</div>--}}
    <!-- Facebook Side Block End -->
    <!-- Twitter Side Block Start -->
    {{--<div id="twitter_footer" class="twit-left sort-order-2">--}}
        {{--<div class="twitter_icon"><i class="fa fa-twitter"></i></div>--}}
        {{--<a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">توییت های @</a>--}}
        {{--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>--}}
    {{--</div>--}}
    <!-- Twitter Side Block End -->
    <!-- Video Side Block Start -->
    {{--<div id="video_box" class="vb-left sort-order-3">--}}
        {{--<div id="video_box_icon"><i class="fa fa-play"></i></div>--}}
        {{--<p>--}}
            {{--<iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>--}}
        {{--</p>--}}
    {{--</div>--}}
    <!-- Video Side Block End -->
    <!-- Custom Side Block Start -->
    {{--<div id="custom_side_block" class="custom_side_block_left sort-order-4">--}}
        {{--<div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>--}}
        {{--<table>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td><h2>بلاک های محتوا</h2></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><img alt="" src="image/banner/cms-block.jpg"></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><strong><a href="#">ادامه مطلب</a></strong></td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
    <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script>
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("آیا از حذف آیتم اطمینان دارید؟")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@yield('footer')

<!-- JS Part End-->
</body>
</html>