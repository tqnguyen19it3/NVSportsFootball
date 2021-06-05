<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                                                <li><a href="{{URL::TO('/logout-user')}}">Đăng xuất</a></li>
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
                            <h1>Lịch đặt sân</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
                            <li class="active">Lịch đặt sân</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Banner End
        *************************************-->
        <main class="tg-haslayout">
            <section class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="col-sm-9 col-xs-12 pull-left">
                        <div class="row">
                            <div class="tg-tickets">
                                @foreach($my_schedule as $key => $schedule)
                                <div class="tg-ticket">
                                    <time class="tg-matchdate"><span>{{$schedule->yard_limit}}</span></time>
                                    <div class="tg-matchdetail">
                                        <span class="tg-theme-tag">{{$schedule->yard_system_name}}</span>
                                        <h4>MSS: {{$schedule->yard_mss}}</h4>
                                        <ul class="tg-matchmetadata">
                                            <li>Khung giờ: {{$schedule->time_price_hours}} / Giá sân: {{number_format($schedule->time_price_pay)}} VNĐ</li>
                                            <li>Ngày đá: {{$schedule->schedule_date}}</li>
                                            <li>Địa chỉ sân: {{$schedule->yard_system_address}}</li>
                                            <li>Bạn đã đặt vào lúc: {{$schedule->date_time_current}}</li>
                                        </ul>
                                    </div>
                                    <div class="tg-btnsbox">
                                        {{-- <a class="tg-btn" href="#">read more</a> --}}
                                        <a class="tg-btn" onclick="myFunction1()" href="#">Đặt cọc trước</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <aside  class="tg-sidebar">
                            <div class="tg-widget">
                                <h3>Hồ sơ thể thao</h3>
                                <ul>
                                    <li>
                                        <a href="{{URL::TO('/profile-person/'.$user_id)}}"><em>Thông tin cá nhân</em><i>19</i></a>
                                    </li>
                                    {{-- @foreach($team_profile as $key => $profile1) --}}
                                    @foreach($list_of_team as $key => $val)
                                    {{-- @foreach($person_profile as $key => $profile) --}}
                                    @if($user_id == $val->user_id)
                                    <li>
                                        <a href="{{URL::TO('/profile-team/'.$val->profile_team_id.'/'.$user_id)}}"><em>Hồ sơ đội</em><i>10</i></a>
                                    </li>
                                    
                                    @endif
                                    {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                    @endforeach
                                    @if($vao_doi == 0)
                                        <li>
                                            <a href="{{URL::TO('/create-and-join-team')}}"><em>Tạo và tham gia đội</em><i>2</i></a>
                                        </li>
                                        @else
                                        <li>
                                            <a style="cursor: pointer;" onclick="myFunction()"><em>Tạo và tham gia đội</em><i>2</i></a>
                                        </li>
                                       
                                     @endif
                                    <li>
                                        <a href="{{URL::TO('/my-schedule/'.$user_id)}}"><em>Lịch đặt sân</em><i>2</i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </main>
        
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
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#ContactUs">Phản hồi</a>
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
    <script>
        function myFunction() {
          alert("Bạn đã có đội rồi, vui lòng rời đội bóng cũ để tham gia đội mới!");
        }
    </script>
    <script>
        function myFunction1() {
          alert("Bạn phải đến tận sân để thực hiện thanh toán này!");
        }
    </script>
</body>
</html>