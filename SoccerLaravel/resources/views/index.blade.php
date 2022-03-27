<!DOCTYPE html>
<html>
<head>
    <title>{{$meta_title}}</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
    <meta property="og:site_name" content="nvsportsfootball.com" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- hỗ trợ trình duyệt mới nhất-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />

    <link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icon tren w3school-->
    <link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/transitions.css')}}"> <!--css hover luot -->
    <link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/style-trangchu.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--ANIMATION ON SCROLL-->
    <link rel="stylesheet" type="text/css" href="{{asset('../public/front-end/css/footer.css')}}">

    <script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body>
        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">

        <div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
            <span id="tg-close" class="tg-close fa fa-close"></span>
            <div class="tg-colhalf">
                <ul>
                    <li class="active">
                        <a href="{{URL::TO('/home')}}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#NEXTMATCH">Trận Tiếp Theo</a>
                    </li>
                    <li><a href="#BOOK">Đặt Sân Nhanh</a></li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                    <li>
                        <a href="#FindOpponents">Tìm đối thủ</a>
                    </li>
                    <li>
                        <a href="#lastResult">Kết quả gần đây</a>
                    </li>
                    <li><a href="#ContactUs">Phản Hồi</a></li>
                </ul>
            </div>
        </div>

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
                                                <li><a href="{{URL::TO('/home-for-the-yard')}}">Dành Cho chủ sân</a></li>
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
                                <strong class="tg-logo">
                                    <a href="{{URL::TO('/home')}}"><img src="{{asset('../public/front-end/images/logo5.png')}}" alt="image"></a>
                                </strong> <!--cái logo -->
                            </div>
                            <div id="tg-navigation" class="tg-navigation">
                                <div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="{{URL::TO('/home')}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="#NEXTMATCH">Trận Tiếp theo</a>
                                        </li>
                                        <li><a href="#BOOK">Đặt Sân Nhanh</a></li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="#FindOpponents">Tìm đối thủ</a>
                                        </li>
                                        <li>
                                            <a href="#lastResult">Kết quả gần đây</a>
                                        </li>
                                        <li><a href="#ContactUs">Phản hồi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="tg-sliderbox" id="home">
            <div class="tg-imglayer">
                <img src="{{asset('../public/front-end/images/bg-pattran.png')}}" alt="image desctription">
            </div>  <!-- cái background  -->
            <div id="tg-home-slider" class="tg-home-slider tg-haslayout">
                <!-- <div class="swiper-wrapper"> -->
                    <div class="swiper-slide">
                        <div class="container">
                            <figure class="floating">
                                <img data-aos="fade-down-right" data-aos-delay="0" data-aos-duration="1000" src="{{asset('../public/front-end/images/img-02.png')}}" alt="image">
                            </figure>
                            <div class="tg-slider-content">
                                <h1 data-aos="flip-up" data-aos-delay="500" data-aos-duration="1500">alive and <span>kickin</span></h1>
                                <div class="tg-btnbox">
                                    <a data-aos="fade-left" data-aos-delay="500" data-aos-duration="1200" class="tg-btn" href="{{URL::TO('/tim-san')}}"><span>Đặt sân bóng</span></a>
                                    <a data-aos="fade-left" data-aos-delay="500" data-aos-duration="1200" class="tg-btn" href="#FindOpponents"><span>tìm đối thủ</span></a>
                                </div>
                                <a href="#home" data-aos="zoom-in-up" data-aos-delay="800" data-aos-duration="2500"><button id="back-to-top-btn"><i class="fa fa-angle-double-up"></i></button></a>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
{{--             <section class="tg-main-section tg-haslayout" id="NEXTMATCH">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>NEXT MATCH</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-latestresult">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contentbox">
                                            <div class="tg-section-heading">
                                                <h2 style="font-weight: 900;">Các đội chuẩn bị đối đầu nhau</h2></div>
                                            <div class="tg-description">
                                                <img src="{{asset('../public/front-end/images/big-1.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo1.png')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB A</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>vs</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo2.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB B</h3>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>17:30 T6 3/7/2020 <br> <font style="font-size: 20px;">Sân bóng Chuyên Việt, Đà Nẵng</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="chonlichda.html"><span>XEM SÂN</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo3.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB C</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>vs</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo4.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB D</h3>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>17:30 T6 3/7/2020 <br> <font style="font-size: 20px;">Sân bóng Chuyên Việt, Đà Nẵng</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="chonlichda.html"><span>XEM SÂN</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo6.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB E</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>vs</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo5.png')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB F</h3>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>17:30 T6 3/7/2020 <br> <font style="font-size: 20px;">Sân bóng Chuyên Việt, Đà Nẵng</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="chonlichda.html"><span>XEM SÂN</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo7.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB G</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>vs</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo8.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB H</h3>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>17:30 T6 3/7/2020 <br> <font style="font-size: 20px;">Sân bóng Chuyên Việt, Đà Nẵng</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="chonlichda.html"><span>XEM SÂN</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo9.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB Q</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>vs</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo10.jpg')}}" alt="image">
                                                                </strong>
                                                                <h3>CLB K</h3>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>17:30 T6 3/7/2020 <br> <font style="font-size: 20px;">Sân bóng Chuyên Việt, Đà Nẵng</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="chonlichda.html"><span>XEM SÂN</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                            <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
                        <section class="tg-main-section tg-haslayout" id="NEXTMATCH">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>article introduction</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-latestresult">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contentbox">
                                            <div class="tg-section-heading">
                                                <h2 style="font-weight: 900; line-height: 40px;">Các hệ thống sân thuộc TP Đà Nẵng</h2></div>
                                            <div class="tg-description">
                                                <img src="{{asset('../public/front-end/images/img-04.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
                                            <div class="swiper-wrapper">
                                                @foreach($sys as $key => $valsys)
                                                <div class="swiper-slide">
                                                    <div class="tg-match">
                                                        <div class="tg-matchdetail">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/uploads/YardSystemImg/'.$valsys->yard_system_img)}}" alt="image" width="120px">
                                                                </strong>
                                                            </div>
                                                            <div>
                                                                <h4 style="align-items: center; line-height: 25px;">Giới thiệu {{$valsys->yard_system_name}}</h4>
                                                            </div>
                                                        </div>
                                                        <div class="tg-matchhover">
                                                            <address>Bài viết giới thiệu <br> <font style="font-size: 20px;">{{$valsys->yard_system_name}}</font>
                                                            </address>
                                                            <div class="tg-btnbox">
                                                                <a class="tg-btn" href="{{URL::TO('/gioi-thieu/'.$valsys->yard_system_slug.'/'.$valsys->yard_system_id.'/'.$valsys->post_yardsys_id)}}"><span>XEM BÀI VIẾT</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                            <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tg-main-section tg-haslayout" id="BOOK" style="margin-top: -50px;">
                <div class="container">
                    <div class="tg-section-name" style="margin-top: 50px;">
                        <h2>FOOTBALL PITCHES</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{asset('../public/front-end/images/gallery-1.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <h3 style="font-weight: 700;">TÌM KIẾM ĐỐI THỦ VÀ ĐẶT SÂN BÓNG ĐÁ TRỰC TUYẾN</h3>
                            <p>
                                Địa điểm, giá sân, giờ mở cửa, ... Các sân trong khu vực gần nơi bạn ở. Sự lựa chọn là gần vị trí của bạn, đặt trực tuyến, thuận tiện, dễ dàng.
                            </p>
                            <div class="tg-btnbox text-center">
                                <a class="tg-btn" href="{{URL::TO('/tim-san')}}"><span>Đặt sân bóng</span></a>
                                <a class="tg-btn" href="#FindOpponents"><span>Tìm đối thủ</span></a>
                            </div>
                            <img src="{{asset('../public/front-end/images/bia.png')}}" style="padding-top: 15px; height: 135px; width: 100%">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="tg-themetabs" id="FindOpponents">
                        <ul class="tg-themetabnav" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#LevelA" aria-controls="LevelA" role="tab" data-toggle="tab">Đội Mạnh</a>
                            </li>
                            <li role="presentation">
                                <a href="#LevelB" aria-controls="LevelB" role="tab" data-toggle="tab">Đội Vừa</a>
                            </li>
                            <li role="presentation">
                                <a href="#LevelC" aria-controls="LevelC" role="tab" data-toggle="tab">Đội Trung Bình Yếu</a>
                            </li>
                        </ul>
                        <div class="tab-content tg-themetabcontent"> <!--tabcontent o boostrap-->
                            <div role="tabpanel" class="tab-pane active" id="LevelA">
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo11.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U15 - U20</span>
                                        <h4>Đội <span>marauders</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn"  data-toggle="collapse" data-target="#down1">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down1" class="collapse public">
                                        <p><i class="fa fa-male"style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Hay</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội học sinh, sinh viên, tìm đội giao lưu nâng cao sức khỏe"</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo12.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U20 - U30</span>
                                        <h4>Đội <span>akademia stars</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down2">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down2" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Hay</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Ae văn phòng, sinh viên thực tập nhiều ,đá giao lưu vui vẻ không chơi xấu."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo13.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U30 - U35</span>
                                        <h4>Đội <span>strikers</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down3">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down3" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Hay</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Ae làm công trình thân mời các đội bóng giao lưu."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo14.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U35 - U40</span>
                                        <h4>Đội <span>Yourteam</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down4">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down4" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Hay</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Cựu đội bóng phủi, cần tìm đội giao lưu vui vẻ là chính."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="LevelB">
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo15.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U15 - U20</span>
                                        <h4>Đội <span>Tournament club</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down5">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down5" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Tốt</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội Sinh Viên Khoa CNTT-TT muốn tìm đội đá cùng."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo22.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U20 - U30</span>
                                        <h4>Đội <span>Eagleclaw fc</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down6">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down6" class="collapse public">
                                        <p><i class='fa fa-female' style="font-size:20px"></i> <i>"Đội bóng đá nữ"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Tốt</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội bóng nữ mới thành lập, đá đẹp, lịch sự, đá giao lưu vui vẻ là chính."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo16.png')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U30 - U35</span>
                                        <h4>Đội <span>Alpha FC</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down7">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down7" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Tạm</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội các anh em đầu bếp mới thành lập xin giao lưu cùng với những đội có nhu cầu."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo17.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U35 - U40</span>
                                        <h4>Đội <span>Miami fc</span></h4> 
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down8">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down8" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Tạm</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội bóng cựu cầu thủ, đá vì sức khỏe"</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="LevelC">
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo18.png')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U15 - U20</span>
                                        <h4>Đội <span>Hills Football</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down9">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down9" class="collapse public">
                                        <p><i class='fa fa-female' style="font-size:20px"></i> <i>"Đội bóng đá nữ"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Trung Bình</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Đội bóng tuyển của trường, cần tìm đội đá để học hỏi kinh nghiệm."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo19.jpg')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U20 - U30</span>
                                        <h4>Đội <span>Dragons fc</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down10">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down10" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Trung Bình</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Cần tìm đội đá chung, không toxic, không chơi xấu."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo20.png')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U30 - U35</span>
                                        <h4>Đội <span>richmond fc</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b">Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down11">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down11" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Trung Bình, Yếu</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Ae văn phòng ,đá giao lưu vui vẻ nâng cao thể lực."</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                                <div class="tg-oldmatchresult">
                                    <img class="tg-matchLogo" src="{{asset('../public/front-end/images/LogoDoi/logo21.png')}}">
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">Độ tuổi từ U35 - U40</span>
                                        <h4>Đội <span>Reno fc</span></h4>
                                        <address><i class='fa fa-clock-o'></i> <b>Thời gian:</b> 17h30 Thứ Sáu ngày 3/07/2020</address>
                                        <address><i class='fa fa-map-marker' style="margin-left: 2.5px;"></i><b style="margin-left: 5px;">Địa Chỉ:</b> 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng (Sân bóng DUY TÂN)</address>
                                        <div class="tg-btnsbox" style="float: right;">
                                            <span class="tg-btn" data-toggle="collapse" data-target="#down12">thông tin</span>
                                        </div>
                                    </div>
                                    <div id="down12" class="collapse public">
                                        <p><i class="fa fa-male" style="font-size:20px"></i> <i>"Đội bóng đá nam"</i></p>
                                        <p><i class='fa fa-user'></i> <b>Đội Trưởng:</b> Trần Quốc Nguyên</p>
                                        <p><i class="fa fa-phone"style="font-size:20px"></i> <b>Liên Hệ:</b> <i>0939 716 521</i></p>
                                        <p> <i class="fa fa-futbol-o"></i> <b>Trình độ:</b> Đá Trung Bình, Yếu</p>
                                        <p><i class="fa fa-spinner fa-spin"></i> <b> Trạng thái:</b> Đang chờ đội...</p>
                                        <p><b><i>"Cần tìm đội có trình độ từ trung bình yếu, vui là chín, ăn thua là mười"</i></b></p>
                                        <a class="tg-btn" href="#" onclick="alert('Mời Giao hữu thành công')"><span>Mời Giao hữu</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <section class="tg-main-section tg-haslayout" id="lastResult">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>latest result</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-latestresult">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <div class="tab-content tg-tabscontent">
                                            <div role="tabpanel" class="tab-pane active" id="one">
                                                <div class="tg-matchresult">
                                                    <div class="tg-box">
                                                        <div class="tg-score"><h3>3 - 3</h3></div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-20.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4 style="margin-top: 25px;"><a href="#">Richmond fc ( Hòa )</a></h4>
                                                            </div>
                                                        </div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo-02.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">Pro Soccer ( Hòa )</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="two">
                                                <div class="tg-matchresult">
                                                    <div class="tg-box">
                                                        <div class="tg-score"><h3>7 - 3</h3></div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-12.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">Stres Football ( Thắng )</a></h4>
                                                            </div>
                                                        </div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-21.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">Reno 1868 fc ( Thua )</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="three">
                                                <div class="tg-matchresult">
                                                    <div class="tg-box">
                                                        <div class="tg-score"><h3>4 - 9</h3></div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-13.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">Strikers ( Thua )</a></h4>
                                                            </div>
                                                        </div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-18.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">hills football ( Thắng )</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="four">
                                                <div class="tg-matchresult">
                                                    <div class="tg-box">
                                                        <div class="tg-score"><h3>5 - 8</h3></div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-16.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">Alpha city fc ( Thua)</a></h4>
                                                            </div>
                                                        </div>
                                                        <div class="tg-teamscore">
                                                            <strong class="tg-team-logo">
                                                                <a href="#">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo-s-14.png')}}" alt="image">
                                                                </a>
                                                            </strong>
                                                            <div class="tg-team-nameplusstatus">
                                                                <h4><a href="#">yourteam club ( thắng )</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div>
                                            <ul class="tg-matchtabnav" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#one" aria-controls="one" role="tab" data-toggle="tab">
                                                        <div class="tg-match">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo20.jpg')}}" alt="image">
                                                                </strong>
                                                                <h4>Hòa</h4>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>3 - 3</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi/logo-s-01.png')}}" alt="image">
                                                                </strong>
                                                                <h4>hòa</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#two" aria-controls="two" role="tab" data-toggle="tab">
                                                        <div class="tg-match">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo12.jpg')}}" alt="image">
                                                                </strong>
                                                                <h4>thắng</h4>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>7 - 3</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo21.png')}}" alt="image">
                                                                </strong>
                                                                <h4>thua</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#three" aria-controls="three" role="tab" data-toggle="tab">
                                                        <div class="tg-match">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo13.jpg')}}" alt="image">
                                                                </strong>
                                                                <h4>thua</h4>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>4 - 9</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo18.png')}}" alt="image">
                                                                </strong>
                                                                <h4>thắng</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#four" aria-controls="four" role="tab" data-toggle="tab">
                                                        <div class="tg-match">
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo16.png')}}" alt="image">
                                                                </strong>
                                                                <h4>thua</h4>
                                                            </div>
                                                            <div class="tg-box">
                                                                <h3>5 - 8</h3>
                                                            </div>
                                                            <div class="tg-box">
                                                                <strong class="tg-teamlogo">
                                                                    <img src="{{asset('../public/front-end/images/LogoDoi2/logo14.jpg')}}" alt="image ">
                                                                </strong>
                                                                <h4>thắng</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tg-main-section tg-haslayout tg-bgdark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tg-statistics">
                                <div class="tg-statistic tg-goals">
                                    <span class="tg-icon icon-Icon1"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="7171" data-speed="4000" data-refresh-interval="50">7171</span></h2>
                                    <h3>Bàn Thắng</h3>
                                </div>
                                <div class="tg-statistic tg-activeteams">
                                    <span class="tg-icon icon-Icon3"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="771" data-speed="3000" data-refresh-interval="50">771</span></h2>
                                    <h3>Tài Khoản</h3>
                                </div>
                                <div class="tg-statistic tg-activeplayers">
                                    <span class="tg-icon icon-Icon2"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="117" data-speed="2000" data-refresh-interval="50">117</span></h2>
                                    <h3>Đội Bóng</h3>
                                </div>
                                <div class="tg-statistic tg-earnedawards">
                                    <span class="tg-icon icon-Icon4"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="17" data-speed="1000" data-refresh-interval="50">17</span></h2>
                                    <h3>Giải đấu</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <main id="ContactUs" class="tg-main tg-paddingbottom-zero tg-haslayout">
            <section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
                <div class="container">
                    <div class="tg-section-name">
                        <h2>contact</h2>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="row">
                            <div class="tg-contactus tg-haslayout">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tg-contactinfobox">
                                            <div class="tg-section-heading"><h2>Hãy gửi cho chúng tôi truy vấn của bạn, đề xuất &amp; nhận xét</h2></div>
                                            <div class="tg-description">
                                                <p>Bạn có muốn trở thành một phần của NV Sport Football?<br>
                                                Chúng tôi muốn nghe ý kiến của bạn.<br>Có một vài câu hỏi? Chúng tôi có câu trả lời!</p>
                                                <p>Hay bạn chỉ cần đặt câu hỏi tại sao địa điểm thể thao yêu thích của bạn chưa nằm trong hệ thống của NV Sport Football. Vui lòng điền vào biểu mẫu dưới đây và chúng tôi sẽ đảm bảo bạn nhận được câu trả lời nhanh chóng và phù hợp.</p>
                                            </div>
                                            <ul class="tg-contactinfo">
                                                <li>
                                                    <i class="fa fa-map-marker" style="font-size:19px"></i>
                                                    <address>Khu A<sub>3</sub>, Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</address>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope-o"></i>
                                                    <a href="#">tqnguyen.19it3@sict.udn.vn</a>
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
                                                    <a href="#">www.NVSportsFootball.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <fieldset>
                            <form action="{{URL::TO('/send-mail')}}" method="post" class="needs-validation">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="contact_name" class="form-control" placeholder="Enter username" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="contact_email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" name="contact_phonenumber" class="form-control"placeholder="Enter phonenumber" required>
                                </div>
                                <div class="form-group">
                                    <label>Lời Nhắn</label>
                                    <textarea rows="5" class="form-control" name="contact_message" placeholder="Say something..."></textarea>
                                </div>
                                <label style="padding-bottom: 8px;">Tệp Đính Kèm:</label>
                                <div style="padding-bottom:17px;" class="mb-3">
                                    <input type="file" name="contact_filename">
                                </div>  
                                <div class="form-group">
                                    <button style="font:700 14px/35px 'Oswald', Arial, Helvetica, sans-serif;" class="tg-btn" type="submit" data-toggle="tooltip" title="I'd love your feedback!">Gửi</button>
                                </div>
                            </form>
{{--                             <form action="MAILTO:tqnguyen.19it3@vku.udn.vn" method="post" enctype="text/plain" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="Name" class="form-control" placeholder="Enter username" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="Mail" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" name="Phone" class="form-control"placeholder="Enter phonenumber" required>
                                </div>
                                <div class="form-group">
                                    <label>Lời Nhắn</label>
                                    <textarea rows="5" class="form-control" name="Message" placeholder="Say something..."></textarea>
                                </div>
                                <label style="padding-bottom: 8px;">Tệp Đính Kèm:</label>
                                <div style="padding-bottom:17px;" class="mb-3">
                                    <input type="file" name="filename">
                                </div>  
                                <div class="form-group">
                                    <button style="font:700 14px/35px 'Oswald', Arial, Helvetica, sans-serif;" class="tg-btn" type="submit" data-toggle="tooltip" title="I'd love your feedback!">Gửi</button>
                                </div>
                            </form> --}}
                        </fieldset>
                    </div>
                </section>
            </main>
            <a href="{{URL::TO('/home')}}"><p align="center" style="color: orange; font-size: 1.5rem;">© 2020 Website đặt sân bóng NV Sprorts Football</p></a>

            
            <div class="footer">
                <div class="abcd1">
                    <div class="footer-left">
                        <div class="footer-left-top">
                            <h3>Về nv sports football</h3>              
                        </div>
                        <div class="footer-left-center">
                            <p align="justify">Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân.</p>
                        </div>
                    </div>

                <div class="footer-center">
                    <div class="footer-center-top">
                        <h3>LIÊN KẾT NHANH</h3>
                    </div>
                    <div class="footer-center-center">
                        <ul class="footer-center-cot-1">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#FindOpponents">Tìm đối thủ</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#NEXTMATCH">Trận tiếp theo</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Điều khoản và sử dụng</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Chính sách bảo mật</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#">Hỗ trợ</a>
                            </li>                   
                        </ul>
                        <ul class="footer-center-cot-2">
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#BOOK">Đặt sân nhanh</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#lastResult">Kết quả gần đây</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right"></i>
                                <a href="#ContactUs">Phản hồi</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-right">
                    <div class="footer-right-top">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
                    </div>
                    <div class="footer-right-center">
                        <p>Khu A3, Đô thị Đại học Đà Nẵng, Đường Nam Kỳ Khởi Nghĩa, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</p>
                        <p>Tel.<font id="sdtlh">+84 819682325</font></p>
                    </div>

                    <div  class="footer-right-bottom">
                        <div class="khoi-footer-right-bottom">
                            <h3>LIÊN HỆ</h3>
                        </div> 
                        <div class="thong-tin-footer-right-bottom">
                            <ul class="social-agileinfo">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>          
                    </div>
                </div>
                </div>
            </div>



        </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--AOS-->
    <script>
      AOS.init();
    </script>
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

    
</body>
</html>