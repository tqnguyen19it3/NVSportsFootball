<!DOCTYPE html>
</body>
</html>
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="{{asset('../public/front-end/images/icon-play1.png')}}" />
	
	<link rel="stylesheet" href="{{asset('../public/front-end/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('../public/front-end/css/responsive1.css')}}">
	<script src="{{asset('../public/front-end/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
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
                                                <li><a href="{{URL::TO('/profile-person/'.$user_id)}}">T??i kho???n</a></li>
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
									<img src="{{asset('../public/front-end/images/logo5.png')}}"alt="image" style="height: 180px;">
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
		@yield('error_content')


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
	</body>

</html>