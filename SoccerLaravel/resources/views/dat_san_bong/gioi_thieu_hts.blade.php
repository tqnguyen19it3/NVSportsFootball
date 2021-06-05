<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

    <title>{{$meta_title}}</title>
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    <meta property="og:image" content="{{$image_og}}" />
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

    <link rel="stylesheet" href="{{asset('../public/front-end/css/profile.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
    <script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
                Mobile Menu Start
        *************************************-->
        <div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
            <span id="tg-close" class="tg-close fa fa-close"></span>
            <div class="tg-colhalf">
                <ul>
                    <li class="active">
                        <a href="{{URL::TO('/home')}}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{URL::TO('/home')}}#NEXTMATCH">Trận Tiếp Theo</a>
                    </li>
                    <li><a href="{{URL::TO('/home')}}#BOOK">Đặt Sân Nhanh</a></li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                    <li>
                        <a href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
                    </li>
                    <li>
                        <a href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                    </li>
                    <li><a href="{{URL::TO('/home')}}#ContactUs">Phản Hồi</a></li>
                </ul>
            </div>
        </div>
        <!--************************************
                Mobile Menu End
        *************************************-->
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <nav class="navbar">
                        <div class="tg-topbar tg-haslayout">
                            <nav id="tg-topaddnav" class="tg-topaddnav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
                                    <div class="tg-colhalf pull-right">
                                        <nav class="tg-addnav">
                                            <ul>
                                                <li></li>
                                                <?php
                                                    $user_id = Session::get('user_id');
                                                    if($user_id != NULL){
                                                ?>
                                                <li><a href="{{URL::TO('/profile-person/'.$user_id)}}">Tài khoản</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">Đăng Nhập</a></li>
                                                <?php
                                                    }
                                                ?>
                                                <li><a href="{{URL::TO('/registration')}}">Đăng ký</a></li>
                                                <li><a href="{{URL::TO('/home-for-the-yard')}}">Dành cho chủ sân</a></li>
                                                <li></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tg-colhalf">
                                        <ul class="tg-socialicons">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <nav id="tg-nav" class="tg-nav brand-center">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
                                    <i class="fa fa-bars"></i>
                                </button> <!-- Dấu icon 3 sọc trong moblie  -->
                                <strong class="tg-logo" style="width: 150px;">
                                    <img src="{{asset('../public/front-end/images/logo5.png')}}" style="height: 180px;" alt="image">
                                </strong> <!--cái logo -->
                            </div>
                            <div id="tg-navigation" class="tg-navigation">
                                <div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="{{URL::TO('/home')}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#NEXTMATCH">Trận Tiếp theo</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#BOOK">Đặt Sân Nhanh</a></li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#ContactUs">Phản hồi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Banner Start
        *************************************-->
        <div class="tg-banner tg-haslayout">
            <div class="tg-imglayer">
                <img src="{{asset('../public/front-end/images/bg-pattran.png')}}" alt="image desctription">
            </div>
            <div class="container">
                <div class="row">
                    <div class="tg-banner-content tg-haslayout">
                        <div class="tg-pagetitle">
                            <h1>Bài viết giới thiệu</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
                            <li class="active">{{$system_yard->yard_system_name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Banner End
        *************************************-->
                <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                            <div class="col-sm-12 col-xs-12">
                                <figure class="tg-postimg tg-postimgdetail">
                                    <img src="{{asset('../public/front-end/images/home-about-bg.jpg')}}" alt="image description">
                                    <figcaption>
                                        <ul class="tg-postmetadata">
                                            <li><a style="cursor: pointer;">nv sports football</a></li>
                                            <li><a style="cursor: pointer;">{{$system_yard->yard_system_name}}</a></li>
                                            <li><a style="cursor: pointer;">{{$system_yard->yard_system_address}}</a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pull-left">
                                <div class="tg-postdetail">
                                    <div class="tg-mathtextbox">
                                        <blockquote><q>“ {{$system_yard->yard_system_desc}} ”</q></blockquote>
                                        <div id="tg-matchdetailslider" class="tg-matchdetailslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <figure><img src="{{URL::TO('../public/uploads/YardSystemImg/'.$system_yard->yard_system_img)}}" class="img"></figure>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="tg-section-heading">
                                            <h2>{{$system_yard->yard_system_name}}</h2>
                                        </div>
                                        <p>{!!$post_yardsys->post_yardsys_content!!}</p>
                                    
                                        <div class="tg-authorbox">
                                            <figure class="tg-authorpic">
                                                {{-- <a href="#"> --}}
                                                    <img src="{{asset('../public/front-end/images/player/img-02.png')}}" alt="image description">
                                                {{-- </a> --}}
                                            </figure>
                                            <div class="tg-authorinfo">
                                                <a href="#" class="tg-theme-tag">ADMIN</a><br><br>
                                                <div class="tg-section-heading">
                                                    <h3>{{$admin->admin_name}}</h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Địa chỉ email: {{$admin->admin_email}}</p>
                                                    <p>Số điện thoại: {{$admin->admin_phone}}</p>
                                                </div>
                                                <ul class="tg-socialicons">
                                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="tg-comments" class="tg-comments">
                                            <div class="tg-section-heading">
                                                <h2>Bình luận</h2>
                                            </div>
                                            <div style="margin-top: 10px; display: flex;">
                                            <div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                                            <div style="margin-left: 5px;" class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
                                            </div>
                                            <div class="fb-comments" data-href="{{$url_canonical}}" data-width="1000" data-numposts="4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        <!--************************************
                Main End
        *************************************-->

         <div id="tg-mapcontent" class="tg-mapcontent owl-carousel">     
            <div class="item">
                {!!$system_yard->yard_system_maps!!}
            </div>
        </div>
        
        <!--************************************
                Footer Start
        *************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-haslayout tg-footerinfobox">
                <div class="tg-bgboxone"></div>
                <div class="tg-bgboxtwo"></div>
                <div class="tg-footerinfo">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="tg-footercol">
                                    <div class="tg-posttitle">
                                        <h3>VỀ NV SPORTS FOOTBALL</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân.</p>
                                    </div>
                                    <div class="tg-form-newsletter">
                                        <fieldset>
                                            <a class="tg-btn" href="{{URL::TO('/registration')}}">Tham gia ngay</a>
                                        </fieldset>
                                    </div>
                                    <div class="tg-posttitle">
                                        <h3>Liên kết nhanh</h3>
                                    </div>
                                    <div class="tg-tags">
                                        <a class="tg-tag" href="{{URL::TO('/home-for-the-yard')}}">Dành cho chủ sân</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#BOOK">Đặt sân nhanh</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#FindOpponents">Tìm đối thủ</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#NEXTMATCH">Trận tiếp theo</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#lastResult">Kết quả gần đây</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#ContactUs"">Phản hồi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="tg-footercol">
                                    <div class="tg-haslayout">
                                        <strong class="tg-logo">
                                            <a href="{{URL::TO('/home')}}">
                                                <img src="{{asset('../public/front-end/images/bia.png')}}" alt="image description">
                                            </a>
                                        </strong>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <address>Khu A3, Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</address>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <span>tqnguyen.19it3@vku.udn.vn</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span>+84 819682325</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-skype"></i>
                                            <a href="#">NV Sports Football</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-facebook-f"></i>
                                            <a href="#">facebook.com/NVSportsFootball201</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter"></i>
                                            <a href="#">twitter.com/NVSportsFootball201</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-laptop"></i>
                                            <a href="{{URL::TO('/home')}}">www.NVSportsFootball.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <div class="container">
                    <span class="tg-copyright">&copy; 2020  |  All Rights Reserved</span>
                    <nav class="tg-footernav">
                        <ul>
                            <li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
                            <li><a href="{{URL::TO('/registration')}}">Đăng ký</a></li>
                            <li><a href="{{URL::TO('/login')}}">Đăng nhập</a></li>
                            <li><a href="{{URL::TO('/home')}}">Cập nhật</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
        
</div>
    <script src="{{asset('../public/front-end/js/vendor/jquery-library.js')}}"></script>
    <script src="{{asset('../public/front-end/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('../public/front-end/js/customScrollbar.min.js')}}"></script>
    <script src="{{asset('../public/front-end/js/owl.carousel.js')}}"></script>
    <script src="{{asset('../public/front-end/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('../public/front-end/js/prettyPhoto.js')}}"></script>
    <script src="{{asset('../public/front-end/js/swiper.min.js')}}"></script>
    <script src="{{asset('../public/front-end/js/jquery-ui.js')}}"></script>
    <script src="{{asset('../public/front-end/js/countTo.js')}}"></script>
    <script src="{{asset('../public/front-end/js/appear.js')}}"></script>
    <script src="{{asset('../public/front-end/js/main.js')}}"></script>
    {{-- LIKE SHARE COMMENT FB --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=714139636150031&autoLogAppEvents=1" nonce="zjt7LrL2"></script>
    {{-- LIKE SHARE COMMENT FB --}}
</body>
</html>