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
                        <a href="{{URL::TO('/home')}}">Trang ch???</a>
                    </li>
                    <li>
                        <a href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n Ti???p Theo</a>
                    </li>
                    <li><a href="{{URL::TO('/home')}}#BOOK">?????t S??n Nhanh</a></li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                    <li>
                        <a href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
                    </li>
                    <li>
                        <a href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                    </li>
                    <li><a href="{{URL::TO('/home')}}#ContactUs">Ph???n H???i</a></li>
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
                                                <li><a href="{{URL::TO('/logout-user')}}">????ng xu???t</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                <li><a href="{{URL::TO('/login')}}">????ng Nh???p</a></li>
                                                <?php
                                                    }
                                                ?>
                                                <li><a href="{{URL::TO('/registration')}}">????ng k??</a></li>
                                                <li><a href="{{URL::TO('/home-for-the-yard')}}">D??nh cho ch??? s??n</a></li>
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
                                </button> <!-- D???u icon 3 s???c trong moblie  -->
                                <strong class="tg-logo" style="width: 150px;">
                                    <img src="{{asset('../public/front-end/images/logo5.png')}}" style="height: 180px;" alt="image">
                                </strong> <!--c??i logo -->
                            </div>
                            <div id="tg-navigation" class="tg-navigation">
                                <div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="{{URL::TO('/home')}}">Trang ch???</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n Ti???p theo</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#BOOK">?????t S??n Nhanh</a></li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                                        </li>
                                        <li><a href="{{URL::TO('/home')}}#ContactUs">Ph???n h???i</a></li>
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
                            <h1>H??? s?? th??? thao</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
                            <li class="active">H??? s?? th??? thao</li>
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
                                                    <strong class="tg-theme-tag">?????i tr?????ng</strong>
                                                    <h3>{{ $profile1->user_name }}</h3>
                                                    @elseif($val->clb_captain == '0' && $profile1->user_id == $val->user_id)
                                                    <strong class="tg-theme-tag">T??n Th??nh vi??n</strong>
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
                                                    <li>?????i b??ng :</li>
                                                    <li>{{ $profile->profile_team_name }}</li>
                                                     
                                                    <li>Gi???i t??nh ?????i :</li>
                                                    <li>?????i b??ng ???? {{ $profile->profile_team_gender}}</li>
                                                    <li>Tr??nh ????? :</li>
                                                    <li>{{ $profile->profile_team_level }}</li>
                                                    <li>????? Tu???i :</li>
                                                    <li>{{ $profile->profile_team_age }}</li>
                                                    <li>Khu v???c :</li>
                                                    <li>{{ $profile->profile_team_city}}, TP. ???? N???ng</li>
                                                    <li>M?? t??? ?????i c???a b???n :</li>
                                                    <li>"{{ $profile->profile_team_desc }}"</li>
                                                </ul>
                                                @foreach($list_of_team as $key => $val)
                                                    @if($val->clb_captain == '1' && $user_id == $val->user_id)
                                                    <div class="tg-btnbox">
                                                    <button class="tg-btn" data-toggle="modal" data-target="#myModal" type="button" style="top: 20px;">C???p Nh???t L???i</button>
                                                    <a class="tg-btn" onclick="return confirm('B???n c?? ch???c mu???n r???i kh???i ?????i b??ng n??y?')" href="{{URL::TO('/leave-team/'.$user_id)}}" type="button" style=" float: right; top: 20px;text-align: center; align-items: center;">R???i ?????i</a>
                                                    </div>
                                                    @elseif($val->clb_captain == '0' && $user_id == $val->user_id)
                                                    <div class="tg-btnbox">
                                                    <a class="tg-btn" onclick="return confirm('B???n c?? ch???c mu???n r???i kh???i ?????i b??ng n??y?')" href="{{URL::TO('/leave-team/'.$user_id)}}" type="button" style=" float: right; top: 20px;text-align: center; align-items: center;">R???i ?????i</a>
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
                                      <h4 class="modal-title">Form c???p nh???t</h4>
                                    </div>
                                    <div class="modal-body">
                                      <main class="main123">
                                        <div class="container1">
                                            <div class="register-form">
                                                @foreach($team_profile as $key => $profile)
                                                <form action="{{URL::TO('/update-profile-team/'.$profile->profile_team_id.'/'.$user_id)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <h1 class="h123">C???p nh???t h??? s?? th??? thao</h1>
                                                    <div class="input-box">
                                                        <input name="team_name" type="text" placeholder="{{ $profile->profile_team_name }}" required="">
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="logo">C???p nh???t logo ?????i</label>
                                                        <input type="file" id="logo" name="team_logo"  placeholder="C???p nh???t logo">
                                                        <img src="{{URL::TO('../public/uploads/logo-team/'.$profile->profile_team_logo)}}" alt="Logo Team" height="50" width="50">
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="col-6">
                                                            <label for="trinhdo">Gi???i t??nh</label>
                                                            <select name="team_gender" id="gender">
                                                                <option value="Nam">Nam</option>
                                                                <option value="N???">N???</option>
                                                            </select>
                                                            <label for="trinhdo">Tr??nh ?????</label>
                                                            <select name="team_level" id="level">
                                                                <option value="???? Hay">???? hay</option>
                                                                <option value="???? V???a">???? v???a</option>
                                                                <option value="???? Y???u">???? y???u</option>
                                                            </select>
                                                            <label for="age">????? tu???i</label>
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
                                                            <label for="khuvuc">Khu v???c</label>
                                                            <select name="team_city" id="khuvuc">
                                                                <option value="Qu???n S??n Tr??">Qu???n S??n Tr??</option>
                                                                <option value="Qu???n Thanh Kh??">Qu???n Thanh Kh??</option>
                                                                <option value="Qu???n Ng?? H??nh S??n">Qu???n Ng?? H??nh S??n</option>
                                                                <option value="Qu???n H???i Ch??u">Qu???n H???i Ch??u</option>
                                                                <option value="Qu???n Li??n Chi???u">Qu???n Li??n Chi???u</option>
                                                                <option value="Qu???n C???m L???">Qu???n C???m L???</option>
                                                                <option value="Huy???n Ho?? Vang">Huy???n Ho?? Vang</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label for="gioithieu">Gi???i thi???u ?????i</label>
                                                        <textarea name="team_desc" id="gioithieu">{{ $profile->profile_team_desc }}</textarea>
                                                    </div>
                                                    
                                                    <div class="btn-box">
                                                        <button type="submit">
                                                            C???p nh???t
                                                        </button>
                                                    </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    </main>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Tho??t</button>
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
                                    <h3>H??? s?? th??? thao</h3>
                                    <ul>
                                        <li>
                                            <a href="{{URL::TO('/profile-person/'.$user_id)}}"><em>Th??ng tin c?? nh??n</em><i>19</i></a>
                                        </li>
                                        @foreach($list_of_team as $key => $val)
                                        @if($user_id == $val->user_id)
                                        <li>
                                            <a href="{{URL::TO('/profile-team/'.$val->profile_team_id.'/'.$user_id)}}"><em>H??? s?? ?????i</em><i>10</i></a>
                                        </li>
                                        @endif
                                        @endforeach
                                        @if($vao_doi == 0)
                                        <li>
                                            <a href="{{URL::TO('/create-and-join-team')}}"><em>T???o v?? tham gia ?????i</em><i>2</i></a>
                                        </li>
                                        @else
                                        <li>
                                            <a style="cursor: pointer;" onclick="myFunction()"><em>T???o v?? tham gia ?????i</em><i>2</i></a>
                                        </li>
                                       
                                        @endif
                                        <li>
                                            <a href="{{URL::TO('/my-schedule/'.$user_id)}}"><em>L???ch ?????t s??n</em><i>2</i></a>
                                        </li>
                                    </ul>
                                </div>
                                @foreach($list_of_team as $key => $val)
                                    @if($val->clb_captain == '0' && $user_id == $val->user_id)
                                <div style="margin-top: 20px;" class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>L??u ??!</strong> Ch??? ng?????i c?? vai tr?? ?????i tr?????ng (Ng?????i s??ng l???p ?????i) m???i c?? quy???n thay ?????i th??ng tin ?????i.
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
                                        <h3>V??? NV SPORTS FOOTBALL</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>N???n t???ng th??? thao d??nh chung m???i ?????i t?????ng. ??? ????y, b???n c?? th??? d??? d??ng t??m ch??? ch??i, t??m ?????ng ?????i hay ?????i th??? ????? ch??i m???t c??ch vui v??? nh???t, ?????t s??n m???t c??ch hi???u qu??? nh???t. H??? th???ng qu???n l?? s??n, l???ch bi???u th??ng minh gi???m thi???u t???i ??a th???i gian chi ph??, t??ng doanh thu cho ch??? s??n.</p>
                                    </div>
                                    <div class="tg-form-newsletter">
                                        <fieldset>
                                            <a class="tg-btn" href="{{URL::TO('/registration')}}">Tham gia ngay</a>
                                        </fieldset>
                                    </div>
                                    <div class="tg-posttitle">
                                        <h3>Li??n k???t nhanh</h3>
                                    </div>
                                    <div class="tg-tags">
                                        <a class="tg-tag" href="{{URL::TO('/home-for-the-yard')}}">D??nh cho ch??? s??n</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#BOOK">?????t s??n nhanh</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#FindOpponents">T??m ?????i th???</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#NEXTMATCH">Tr???n ti???p theo</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#lastResult">K???t qu??? g???n ????y</a>
                                        <a class="tg-tag" href="{{URL::TO('/home')}}#ContactUs"">Ph???n h???i</a>
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
                                            <address>Khu A3, ???? th??? ?????i h???c ???? N???ng, ???????ng Nam K??? Kh???i Ngh??a, Qu???n Ng?? H??nh S??n, Tp. ???? N???ng</address>
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
                            <li><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
                            <li><a href="{{URL::TO('/registration')}}">????ng k??</a></li>
                            <li><a href="{{URL::TO('/login')}}">????ng nh???p</a></li>
                            <li><a href="{{URL::TO('/home')}}">C???p nh???t</a></li>
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
          alert("B???n ???? c?? ?????i r???i, vui l??ng r???i ?????i b??ng c?? ????? tham gia ?????i m???i!");
        }
    </script>

</body>
</html>