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
                            <h1>Hồ sơ thể thao</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
                            <li class="active">Hồ sơ thể thao</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Banner End
        *************************************-->
        <main class="tg-haslayout">
            <div class="container">
                <div class="row">
                    <div  class="tg-main-section tg-haslayout">
                        @foreach($team_profile as $key => $profile)
                        @foreach($list_of_team as $key => $val)

                        @if($user_id == $val->user_id && $profile->profile_team_id == $val->profile_team_id)

                        <section class="wrapper">           
                            <div class="col-sm-9 col-xs-12 pull-left">
                            <div class="tg-player-detail tg-haslayout">
                                <div class="tg-player-data tg-haslayout">
                                    <div class="tg-player-info tg-haslayout">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="tg-widget tg-imagewidget">
                                                    <figure>
                                                        <img src="{{URL::TO('../public/uploads/logo-team/'.$profile->profile_team_logo)}}" alt="image description">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="tg-playcontent">
                                                    @foreach($profile_person as $key => $profile1)
                                                    @if($profile1->user_id == $user_id)
                                                    @foreach($list_of_team as $key => $val)
                                                    @if($val->clb_captain == '1' && $profile1->user_id == $val->user_id)
                                                    <strong class="tg-theme-tag">Đội trưởng</strong>
                                                    <h3>{{ $profile1->user_name }}</h3>
                                                    @elseif($val->clb_captain == '0' && $profile1->user_id == $val->user_id)
                                                    <strong class="tg-theme-tag">Tên Thành viên</strong>
                                                    <h3>{{ $profile1->user_name }}</h3>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                    @endforeach

                                                </div>
                                                <?php
                                                    echo "<div class='text-center'>";
                                                        echo "<h3 style='color:green;'>" ;
                                                            $message = Session::get('message');
                                                            if($message){
                                                                echo $message;
                                                                Session::put('message', null);
                                                            }
                                                        echo "</h3>";
                                                    echo "</div>";
                                                   ?> 
                                                <ul>
                                                    <li>Đội bóng :</li>
                                                    <li>{{ $profile->profile_team_name }}</li>
                                                     
                                                    <li>Giới tính đội :</li>
                                                    <li>Đội bóng đá {{ $profile->profile_team_gender}}</li>
                                                    <li>Trình độ :</li>
                                                    <li>{{ $profile->profile_team_level }}</li>
                                                    <li>Độ Tuổi :</li>
                                                    <li>{{ $profile->profile_team_age }}</li>
                                                    <li>Khu vực :</li>
                                                    <li>{{ $profile->profile_team_city}}, TP. Đà Nẵng</li>
                                                    <li>Mô tả đội của bạn :</li>
                                                    <li>"{{ $profile->profile_team_desc }}"</li>
                                                </ul>
                                                @foreach($list_of_team as $key => $val)
                                                    @if($val->clb_captain == '1' && $user_id == $val->user_id)
                                                    <div class="tg-btnbox">
                                                    <button class="tg-btn" data-toggle="modal" data-target="#myModal" type="button" style="top: 20px;">Cập Nhật Lại</button>
                                                    <a class="tg-btn" onclick="return confirm('Bạn có chắc muốn rời khỏi đội bóng này?')" href="{{URL::TO('/leave-team/'.$user_id)}}" type="button" style=" float: right; top: 20px;text-align: center; align-items: center;">Rời đội</a>
                                                    </div>
                                                    @elseif($val->clb_captain == '0' && $user_id == $val->user_id)
                                                    <div class="tg-btnbox">
                                                    <a class="tg-btn" onclick="return confirm('Bạn có chắc muốn rời khỏi đội bóng này?')" href="{{URL::TO('/leave-team/'.$user_id)}}" type="button" style=" float: right; top: 20px;text-align: center; align-items: center;">Rời đội</a>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>

                        @endif

                        @endforeach
                        <section class="section-form">
                            <div class="container1">
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Form cập nhật</h4>
                                    </div>
                                    <div class="modal-body">
                                      <main class="main123">
                                        <div class="container1">
                                            <div class="register-form">
                                                @foreach($team_profile as $key => $profile)
                                                <form action="{{URL::TO('/update-profile-team/'.$profile->profile_team_id.'/'.$user_id)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <h1 class="h123">Cập nhật hồ sơ thể thao</h1>
                                                    <div class="input-box">
                                                        <input name="team_name" type="text" placeholder="{{ $profile->profile_team_name }}" required="">
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="logo">Cập nhật logo đội</label>
                                                        <input type="file" id="logo" name="team_logo"  placeholder="Cập nhật logo">
                                                        <img src="{{URL::TO('../public/uploads/logo-team/'.$profile->profile_team_logo)}}" alt="Logo Team" height="50" width="50">
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="trinhdo">Giới tính</label>
                                                            <select name="team_gender" id="gender">
                                                                <option value="Nam">Nam</option>
                                                                <option value="Nữ">Nữ</option>
                                                            </select>
                                                            <label for="trinhdo">Trình độ</label>
                                                            <select name="team_level" id="level">
                                                                <option value="Đá Hay">Đá hay</option>
                                                                <option value="Đá Vừa">Đá vừa</option>
                                                                <option value="Đá Yếu">Đá yếu</option>
                                                            </select>
                                                            <label for="age">Độ tuổi</label>
                                                            <select name="team_age" id="age">
                                                                <option value="U15-U20">U15-U20</option>
                                                                <option value="U20-U30">U20-U30</option>
                                                                <option value="U30-U35">U30-U35</option>
                                                                <option value="U35-U40">U35-U40</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="khuvuc">Khu vực</label>
                                                            <select name="team_city" id="khuvuc">
                                                                <option value="Quận Sơn Trà">Quận Sơn Trà</option>
                                                                <option value="Quận Thanh Khê">Quận Thanh Khê</option>
                                                                <option value="Quận Ngũ Hành Sơn">Quận Ngũ Hành Sơn</option>
                                                                <option value="Quận Hải Châu">Quận Hải Châu</option>
                                                                <option value="Quận Liên Chiểu">Quận Liên Chiểu</option>
                                                                <option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
                                                                <option value="Huyện Hoà Vang">Huyện Hoà Vang</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="gioithieu">Giới thiệu đội</label>
                                                        <textarea name="team_desc" id="gioithieu">{{ $profile->profile_team_desc }}</textarea>
                                                    </div>
                                                    
                                                    <div class="btn-box">
                                                        <button type="submit">
                                                            Cập nhật
                                                        </button>
                                                    </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    </main>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </section>
                        @endforeach
                        </section>
                        <div class="col-sm-3 col-xs-12">
                            <aside  class="tg-sidebar">
                                <div class="tg-widget">
                                    <h3>Hồ sơ thể thao</h3>
                                    <ul>
                                        <li>
                                            <a href="{{URL::TO('/profile-person/'.$user_id)}}"><em>Thông tin cá nhân</em><i>19</i></a>
                                        </li>
                                        @foreach($list_of_team as $key => $val)
                                        @if($user_id == $val->user_id)
                                        <li>
                                            <a href="{{URL::TO('/profile-team/'.$val->profile_team_id.'/'.$user_id)}}"><em>Hồ sơ đội</em><i>10</i></a>
                                        </li>
                                        @endif
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
                                @foreach($list_of_team as $key => $val)
                                    @if($val->clb_captain == '0' && $user_id == $val->user_id)
                                <div style="margin-top: 20px;" class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Lưu ý!</strong> Chỉ người có vai trò đội trưởng (Người sáng lập đội) mới có quyền thay đổi thông tin đội.
                                </div>
                                    @endif
                                @endforeach
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        function myFunction() {
          alert("Bạn đã có đội rồi, vui lòng rời đội bóng cũ để tham gia đội mới!");
        }
    </script>

</body>
</html>