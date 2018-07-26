<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Book Store</title>
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width">
        <!-- Css Files Start -->
        <link href="{!! asset('/bower_components/user/css/style.css') !!}" rel="stylesheet" type="text/css" /><!-- All css -->  
        <link href="{!! asset('/bower_components/user/css/bs.css') !!}" rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{!! asset('/bower_components/user/css/main-slider.css') !!}" /><!-- Main Slider Css -->
        <!--[if lte IE 10]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->
        <link href="{!! asset('/bower_components/user/css/font-awesome.css') !!}" rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->
        <link href="{!! asset('/bower_components/user/css/font-awesome-ie7.css') !!}" rel="stylesheet" type="text/css" /><!-- Font Awesome iE7 Css -->
        <link rel="stylesheet" type="text/css" href="{!! asset('/css/bookshop.css') !!}">
        <noscript>
            <link rel="stylesheet" type="text/css" href="{!! asset('/bower_components/user/css/noJS.css') !!}" />
        </noscript>
        <!-- Css Files End -->
</head>
<body>
<!-- Start Main Wrapper -->
<div class="wrapper">
  <!-- Start Main Header -->
  <!-- Start Top Nav Bar 
-->
    <section class="top-nav-bar">
        <section class="container-fluid container">
            <section class="row-fluid">
                <section class="span6">
                    <ul class="top-nav">
                        <li><a href="{{route('home')}}" class="active">{{trans('common.homepage')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.onlineStore')}}</a></li>
                        <li><a href="{{route('home')}}">Blog</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.shortCode')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.news')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.contact')}}</a></li>
                    </ul>
                </section>
                <section class="span6 e-commerce-list">
                    <ul>
                        <li>Welcome! <a href="{{route('home')}}">{{trans('common.login')}}</a> or <a href="{{route('home')}}">{{trans('common.createAccount')}}</a></li>
                        <li class="p-category"><a href="#">$</a> <a href="#">£</a> <a href="#">€</a></li>
                        <li class="p-category"><a href="#">eng</a> <a href="#">de</a> <a href="#">fr</a></li>
                    </ul>
                    <div class="c-btn"> <a href="{{route('home')}}" class="cart-btn">{{trans('common.cart')}}</a>
                        <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">0 item(s) - $0.00<span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                  <li><a href="#">{{trans('common.action')}}</a></li>
                                  <li><a href="#">{{trans('common.aaction')}}</a></li>
                              </ul>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </section>
    <!-- End Top Nav Bar -->
    <header id="main-header">
        <section class="container-fluid container">
            <section class="row-fluid">
                <section class="span4">
                    <h1 id="logo"> <a href="{{route('home')}}"><img src="/bower_components/user/images/logo.png" /></a> </h1>
                </section>
                <section class="span8">
                    <ul class="top-nav2">
                        <li><a href="{{route('home')}}">{{trans('common.account')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.cart')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.checkout')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.order')}}</a></li>
                    </ul>
                    <div class="search-bar">
                        <input name="" type="text" value="search entire store here..." />
                        <input name="" type="button" value="Serach" />
                    </div>
                </section>
            </section>
        </section>
        <!-- Start Main Nav Bar -->
        <nav id="nav">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li> <a href="{{route('home')}}">{{trans('common.books')}}</a> </li>
                            <li> <a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li><a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li><a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li><a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li><a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li class="dropdown"> <a class="dropdown-toggle" href="{{route('home')}}" data-toggle="dropdown"><i class="icon-heart"></i> {{trans('common.books')}}<b class="caret"></b> </a>
                            </li>
                            <li class="dropdown"> <a class="dropdown-toggle" href="{{route('home')}}" data-toggle="dropdown">{{trans('common.books')}}Movies & TV <b class="caret"></b> </a>
                            </li>
                            <li> <a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                            <li> <a href="{{route('home')}}">{{trans('common.books')}}</a> </li>
                            <li><a href="{{route('home')}}">{{trans('common.books')}}</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!-- /.navbar-inner -->
            </div>
            <!-- /.navbar -->
        </nav>
        <!-- End Main Nav Bar -->
    </header>
    <!-- End Main Header -->
    <!-- Start Main Content Holder -->
    <section id="content-holder" class="container-fluid container">
        @yield('content')
    </section>
    <!-- End Footer Top 1 -->
    <!-- Start Footer Top 2 -->
    <section class="container-fluid footer-top2">
        <section class="social-ico-bar">
            <section class="container">
                <section class="row-fluid">
                    <div id="socialicons" class="hidden-phone"> <a id="social_linkedin" class="social_active" href="#" title="Visit Google Plus page"><span></span></a> <a id="social_facebook" class="social_active" href="#" title="Visit Facebook page"><span></span></a> <a id="social_twitter" class="social_active" href="#" title="Visit Twitter page"><span></span></a> <a id="social_youtube" class="social_active" href="#" title="Visit Youtube"><span></span></a> <a id="social_vimeo" class="social_active" href="#" title="Visit Vimeo"><span></span></a> <a id="social_trumblr" class="social_active" href="#" title="Visit Vimeo"><span></span></a> <a id="social_google_plus" class="social_active" href="#" title="Visit Vimeo"><span></span></a> <a id="social_dribbble" class="social_active" href="#" title="Visit Vimeo"><span></span></a> <a id="social_pinterest" class="social_active" href="#" title="Visit Vimeo"><span></span></a> </div>
                    <ul class="footer2-link">
                        <li><a href="{{route('home')}}">{{trans('common.about')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.cusService')}}</a></li>
                        <li><a href="{{route('home')}}">{{trans('common.order')}}</a></li>
                    </ul>
                </section>
            </section>
        </section>
        <section class="container">
            <section class="row-fluid">
                <figure class="span4">
                    <h4>{{trans('common.bestSellers')}}</h4>
                    <ul class="f2-img-list">
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image19.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">fields</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image31.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Garfield</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image32.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Penselviniya</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image33.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Exemption</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image34.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Penfield</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image32.jpg') !!}" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Doors</a></strong> <span class="by-author">by Arnold Grey</span> <span class="f-price">$127.55</span> </div>
                        </li>
                    </ul>
                </figure>
                <figure class="span4">
                    <h4>{{trans('common.topRateBooks')}}</h4>
                    <ul class="f2-img-list">
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image35.jpg') !!}" alt=""/></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">A little rain</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image33.jpg') !!}" alt="" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Son of Arabia</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image32.jpg') !!}" alt="" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Serpents</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image34.jpg') !!}" alt="" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Guns</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image19.jpg') !!}" alt=""/></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Garfield</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                        <li>
                            <div class="left"><a href="{{route('home')}}"><img src="{!! asset('/bower_components/user/images/image35.jpg') !!}" alt="" /></a></div>
                            <div class="right"> <strong class="title"><a href="{{route('home')}}">Wolfman</a></strong> <span class="by-author">by Arnold Grey</span> <span class="rating-bar"><img src="{!! asset('/bower_components/user/images/rating-star.png') !!}" alt="Rating Star"/></span> </div>
                        </li>
                    </ul>
                </figure>
                <figure class="span4">
                    <h4>{{trans('common.fromBlog')}}</h4>
                    <ul class="f2-pots-list">
                        <li> <span class="post-date2">28 APR</span> <a href="{{route('home')}}">{{trans('common.blogdes')}}</a> <span class="comments-num">6 comments</span> </li>
                        <li> <span class="post-date2">28 APR</span> <a href="{{route('home')}}">{{trans('common.blogdes')}}</a> <span class="comments-num">6 comments</span> </li>
                        <li> <span class="post-date2">28 APR</span> <a href="{{route('home')}}">{{trans('common.blogdes')}}</a> <span class="comments-num">6 {{trans('common.comment')}}</span> </li>
                    </ul>
                </figure>
            </section>
        </section>
    </section>
    <!-- End Footer Top 2 -->
    <!-- Start Main Footer -->
    <footer id="main-footer">
        <section class="social-ico-bar">
            <section class="container">
                <section class="row-fluid">
                    <article class="span6">
                        <p>{{trans('common.homeFooter')}}</p>
                    </article>
                    <article class="span6 copy-right">
                        <p>Designed by <a href="http://www.crunchpress.com/">Crunchpress.com</a></p>
                    </article>
                </section>
            </section>
        </section>
    </footer>
    <!-- End Main Footer -->
</div>
<!-- End Main Wrapper -->
    <!-- JS Files Start -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/lib.js') !!}"></script><!-- lib Js -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/modernizr.js') !!}"></script><!-- Modernizr -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/easing.js') !!}"></script><!-- Easing js -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/bs.js') !!}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/bxslider.js') !!}"></script><!-- BX Slider -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/input-clear.js') !!}"></script><!-- Input Clear -->
    <script src="{!! asset('/bower_components/user/js/range-slider.js') !!}"></script><!-- Range Slider -->
    <script src="{!! asset('/bower_components/user/js/jquery.zoom.js') !!}"></script><!-- Zoom Effect -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/bookblock.js') !!}"></script><!-- Flip Slider -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/custom.js') !!}"></script><!-- Custom js -->
    <script type="text/javascript" src="{!! asset('/bower_components/user/js/social.js') !!}"></script><!-- Social Icons -->
    <!-- JS Files End -->
    <noscript>
    <style>
      #socialicons>a span { top: 0px; left: -100%; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; transition: all 0.3s  ease-in-out;}
      #socialicons>ahover div{left: 0px;}
      </style>
    </noscript>
    <script type="text/javascript">
      /* <![CDATA[ */
      $(document).ready(function() {
      $('.social_active').hoverdir( {} );
    })
    /* ]]> */
    </script>
</body>
</html>
